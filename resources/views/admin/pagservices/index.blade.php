{{-- resources/views/dashboard/services/index.blade.php --}}
@extends('admin.layouts.dashboard.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

@section('content')
<style>
    .box-wrapper {
        background: #f8fafb;
        border-radius: 12px;
        padding: 25px;
        transition: .3s;
        border: 1px solid #e9ecef;
    }
    .box-wrapper:hover {
        box-shadow: 0 0 25px rgba(0,0,0,.07);
        transform: translateY(-2px);
    }

    .page-title {
        font-size: 26px;
        font-weight: bold;
        color: #1C5036;
        margin-bottom: 20px;
    }

    .btn-add {
        background: #27ae60;
        color: #fff !important;
        border-radius: 50px;
        padding: 10px 18px;
        font-weight: bold;
        transition: .3s;
    }
    .btn-add:hover {
        background: #1e8f4c;
    }

    table {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
    }

    table thead {
        background: #ecfff1;
    }

    table thead th {
        color: #1c5530;
        font-weight: bold;
    }

    .icon-preview {
        font-size: 25px;
        color: #27ae60;
    }

    .service-img {
        width: 60px;
        height: 55px;
        border-radius: 6px;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 0 10px rgba(0,0,0,.05);
        transition: .3s;
    }
    .service-img:hover {
        transform: scale(1.1) rotate(2deg);
    }

    .action-btn {
        border-radius: 8px !important;
        font-size: 13px;
        padding: 6px 12px !important;
    }

    .badge-sort {
        background: #def6e3;
        color: #27ae60;
        padding: 4px 12px;
        border-radius: 30px;
        font-weight: bold;
        font-size: 13px;
    }


.service-img {
    width: 70px;
    height: 70px;
    border-radius: 8px;
    object-fit: cover;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}
.icon-preview {
    font-size: 28px;
    color: #4CAF50;
}
.badge-sort {
    background: #2e7d32;
    color: #fff;
    padding: 6px 10px;
    border-radius: 8px;
}


</style>

<div class="content-wrapper">

    <section class="content-header">
        <h2 class="page-title"><i class="fa fa-leaf"></i> إدارة خدمات الصفحة</h2>
    </section>

    <section class="content">
        <div class="box-wrapper">

            @if(session('success'))
                <div class="alert alert-success"><i class="fa fa-check"></i> {{ session('success') }}</div>
            @endif

            <a href="{{ route('dashboard.Pag_services.create') }}" class="btn btn-add mb-3">
                <i class="fa fa-plus-circle"></i> إضافة خدمة جديدة
            </a>

            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>الترتيب</th>
                        <th>الصورة</th>
                        <th>العنوان</th>
                        <th>الأيقونة</th>
                        <th>خيارات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $s)
                    <tr>
                        <td><span class="badge-sort">{{ $s->sort_order }}</span></td>

                        <td>
                          @if($s->images && $s->images->first())
    <img src="{{ asset($s->images->first()->image) }}" class="service-img" alt="{{ $s->title }}">
@else

                                <span class="text-muted">لا يوجد</span>
                            @endif
                        </td>

                        <td>{{ $s->title }}</td>

                        {{-- <td><i class="{{ $s->icon }} icon-preview"></i></td> --}}
                      <td>
        <i class="{{ str_starts_with($s->icon, 'fa') ? $s->icon : 'fa-solid '.$s->icon }} icon-preview"></i>
    </td>


                        <td>
                            <a href="{{ route('dashboard.Pag_services.edit',$s) }}"
                               class="btn btn-primary action-btn"><i class="fa fa-edit"></i> تعديل</a>

                            <form action="{{ route('dashboard.Pag_services.destroy',$s) }}"
                                method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger action-btn"
                                        onclick="return confirm('⚠️ هل تريد حذف هذه الخدمة؟')">
                                        <i class="fa fa-trash"></i> حذف
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <p class="text-muted">لا توجد خدمات مسجلة حاليًا</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </section>

</div>
@endsection
