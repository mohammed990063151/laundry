@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .msg-wrapper {
        background:#f7f9fa;
        padding:25px;
        border-radius:12px;
        box-shadow:0 4px 20px rgba(0,0,0,0.08);
        transition:.3s;
        margin-bottom:25px;
    }

    .msg-wrapper:hover {
        box-shadow:0 6px 25px rgba(0,0,0,0.12);
    }
    
    .table th {
        background:#eef3ea;
        color:#294330;
        font-weight:700;
        text-align:center;
    }

    .table td {
        vertical-align:middle;
    }

    .btn-sm {
        padding:5px 8px;
        border-radius:6px;
    }

    .status-pill {
        background:#D9EF82;
        color:#294330;
        padding:4px 10px;
        border-radius:50px;
        font-size:12px;
        font-weight:600;
        box-shadow:0 0 6px rgba(0,0,0,0.1);
    }

    .pagination {
        justify-content:center;
        margin-top:15px;
    }

</style>

<div class="content-wrapper">

    {{-- PAGE TITLE --}}
    <section class="content-header">
        <h1><i class="fa fa-envelope"></i> الرسائل الواردة من نموذج التواصل</h1>
    </section>

    <section class="content">

        {{-- SUCCESS --}}
        @if(session('success'))
            <div class="alert alert-success">
                <i class="fa fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        {{-- WRAPPER --}}
        <div class="msg-wrapper">

            {{-- TABLE --}}
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th><i class="fa fa-user"></i> الاسم</th>
                        <th><i class="fa fa-envelope"></i> البريد</th>
                        <th><i class="fa fa-phone"></i> الهاتف</th>
                        <th><i class="fa fa-clock-o"></i> التاريخ</th>
                        <th><i class="fa fa-eye"></i> مشاهدة</th>
                        <th><i class="fa fa-trash"></i> حذف</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($msgs as $msg)
                    <tr>
                        <td>{{ $msg->name }}</td>
                        <td>{{ $msg->email }}</td>
                        <td>{{ $msg->phone ?? '-' }}</td>
                        <td>{{ $msg->created_at->format('Y-m-d') }}</td>

                        {{-- VIEW --}}
                        <td>
                            <a href="{{ route('dashboard.messages.show',$msg) }}" 
                               class="btn btn-info btn-sm">
                               <i class="fa fa-eye"></i>
                            </a>
                        </td>

                        {{-- DELETE --}}
                        <td>
                            <form action="{{ route('dashboard.messages.delete',$msg) }}" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                onclick="return confirm('هل تريد حذف هذه الرسالة؟');">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="6">🚫 لا توجد رسائل حالياً</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>

            {{-- PAGINATION --}}
            <div class="mt-4">
                {{ $msgs->links() }}
            </div>

        </div>

    </section>

</div>
@endsection
