@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    body {
        font-family: 'Cairo', sans-serif;
    }

    .branch-wrapper {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 6px 25px rgba(0,0,0,0.08);
        transition: .3s ease-in-out;
        margin-bottom: 40px;
    }
    .branch-wrapper:hover {
        box-shadow: 0 8px 35px rgba(0,0,0,0.12);
    }

    .branch-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 25px;
    }

    .branch-header h1 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #2c3e50;
    }

    .branch-header .btn {
        font-weight: 600;
        border-radius: 8px;
        padding: 10px 18px;
    }

    .branch-table {
        border-radius: 10px;
        overflow: hidden;
    }

    .branch-table th {
        background: linear-gradient(45deg, #D9EF82, #bce25e);
        color: #2c3e50;
        font-weight: 700;
        font-size: 15px;
        text-align: center;
        border: none;
    }

    .branch-table td {
        vertical-align: middle;
        color: #444;
        font-size: 14px;
        background: #fbfbfb;
    }

    .branch-table tr:hover td {
        background: #f2f9ec;
    }

    .branch-img {
        width: 75px;
        height: 75px;
        border-radius: 10px;
        object-fit: cover;
        border: 3px solid #f1f1f1;
        box-shadow: 0 0 8px rgba(0,0,0,0.1);
        transition: .3s;
    }

    .branch-img:hover {
        transform: scale(1.07);
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .btn-icon {
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .pagination {
        justify-content: center;
        margin-top: 25px;
    }

    .alert-success {
        border-left: 6px solid #8bc34a;
        font-weight: 500;
    }
</style>

<div class="content-wrapper">

    {{-- PAGE HEADER --}}
    <section class="content-header">
        <div class="d-flex align-items-center justify-content-between">
            <h1><i class="fa fa-building text-success"></i> فروع شركة مُضياف</h1>
        </div>
    </section>

    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))
        <div class="alert alert-success mt-3">
            <i class="fa fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    {{-- MAIN CONTENT --}}
    <section class="content">
        <div class="branch-wrapper">

            {{-- HEADER + ADD BUTTON --}}
            <div class="branch-header">
                <h1><i class="fa fa-map-marker text-success"></i> إدارة الفروع</h1>
                <a class="btn btn-success btn-icon" href="{{ route('dashboard.branches.create') }}">
                    <i class="fa fa-plus"></i> إضافة فرع جديد
                </a>
            </div>

            {{-- BRANCH TABLE --}}
            <table class="table table-bordered table-hover text-center branch-table">
                <thead>
                    <tr>
                        <th>الصورة</th>
                        <th>اسم الفرع</th>
                         <th> العنوان</th>
                        <th>الهاتف</th>
                        <th width="200">خيارات</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($branches as $branch)
                        <tr>
                            <td>
                                @if($branch->image)
                                    <img src="{{ asset('storage/'.$branch->image) }}" class="branch-img" alt="فرع {{ $branch->name }}">
                                @else
                                    <span class="text-muted">لا توجد صورة</span>
                                @endif
                            </td>
                            <td>{{ $branch->name }}</td>
                             <td>{{ $branch->address }}</td>
                            <td>{{ $branch->phone }}</td>
                            <td>
                                {{-- EDIT --}}
                                <a href="{{ route('dashboard.branches.edit', $branch) }}"
                                   class="btn btn-primary btn-sm btn-icon">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>

                                {{-- DELETE --}}
                                <form action="{{ route('dashboard.branches.destroy', $branch) }}"
                                      method="POST" style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm btn-icon"
                                            onclick="return confirm('هل أنت متأكد من الحذف؟');">
                                        <i class="fa fa-trash"></i> حذف
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-muted">لا توجد فروع مسجلة حالياً</td></tr>
                    @endforelse
                </tbody>
            </table>

            {{-- PAGINATION --}}
            <div class="d-flex">
                {{ $branches->links() }}
            </div>

        </div>
    </section>

</div>
@endsection
