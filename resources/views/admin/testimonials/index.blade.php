@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .testimonials-wrapper {
        background:#f7f9fa;
        padding:25px;
        border-radius:12px;
        box-shadow:0 4px 20px rgba(0,0,0,0.07);
        transition:.3s;
        margin-top:15px;
    }

    .testimonials-wrapper:hover {
        box-shadow:0 8px 25px rgba(0,0,0,0.12);
    }

    .table-wrap {
        margin-top:20px;
    }

    .avatar-img {
        width:55px;
        height:55px;
        border-radius:50%;
        object-fit:cover;
        box-shadow:0 0 8px rgba(0,0,0,0.15);
    }

    .badge-stars {
        background:#ffd86f;
        color:#333;
        padding:5px 12px;
        border-radius:20px;
        font-weight:600;
        font-size:13px;
        box-shadow:0 2px 6px rgba(0,0,0,0.12);
    }

    .btn-actions {
        display:flex;
        align-items:center;
        gap:6px;
        justify-content:center;
    }

</style>

<div class="content-wrapper">

    {{-- PAGE HEADER --}}
    <section class="content-header">
        <h1><i class="fa fa-star"></i> آراء العملاء</h1>
    </section>

    <section class="content">

        @if(session('success'))
            <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ session('success') }}</div>
        @endif

        <div class="testimonials-wrapper">

            <a href="{{ route('dashboard.testimonials.create') }}" class="btn btn-success mb-3">
                <i class="fa fa-plus-circle"></i> إضافة رأي جديد
            </a>

            <div class="table-wrap">
                <table class="table table-bordered text-center">
                    <thead style="background:#e6f5e9;">
                        <tr>
                            <th>الصورة</th>
                            <th>الاسم</th>
                            <th>عدد النجوم</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>

                    @foreach($items as $t)
                    <tr>
                        <td>
                            @if($t->avatar)
                                <img src="{{ asset('storage/'.$t->avatar) }}" class="avatar-img">
                            @else
                                <span style="color:#aaa">لا يوجد</span>
                            @endif
                        </td>

                        <td>{{ $t->name }}</td>

                        <td>
                            <span class="badge-stars">
                                {{ $t->stars }} ⭐
                            </span>
                        </td>

                        <td>
                            <div class="btn-actions">
                                <a class="btn btn-primary btn-sm" href="{{ route('dashboard.testimonials.edit',$t) }}">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>

                                <form method="POST" action="{{ route('dashboard.testimonials.destroy',$t) }}">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('متأكد من الحذف؟')">
                                        <i class="fa fa-trash"></i> حذف
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            {{ $items->links() }}

        </div>

    </section>

</div>

@endsection
