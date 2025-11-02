@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1><i class="fa fa-building"></i> إضافة فرع جديد</h1>
    </section>

    <section class="content">

        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">بيانات الفرع</h3>
            </div>

            <div class="box-body">

                @include('partials._errors')

                <form action="{{ route('dashboard.branches.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <!-- الاسم -->
                        <div class="col-md-6 mb-3">
                            <label>اسم الفرع</label>
                            <input type="text" name="name" class="form-control" placeholder="مثال: فرع الرياض" required>
                        </div>

                        <!-- المدينة -->
                        <div class="col-md-6 mb-3">
                            <label>المدينة</label>
                            <input type="text" name="city" class="form-control" placeholder="مدينة الفرع">
                        </div>

                        <!-- الهاتف -->
                        <div class="col-md-6 mb-3">
                            <label>رقم الهاتف</label>
                            <input type="text" name="phone" class="form-control" placeholder="رقم التواصل">
                        </div>

                        <!-- البريد -->
                        <div class="col-md-6 mb-3">
                            <label>البريد الإلكتروني</label>
                            <input type="email" name="email" class="form-control" placeholder="البريد الخاص بالفرع">
                        </div>

                        <!-- رابط الخريطة -->
                        <div class="col-md-12 mb-3">
                            <label>رابط الخريطة (Google Maps)</label>
                            <input type="text" name="map_link" class="form-control" placeholder="قم بلصق رابط الخريطة">
                        </div>

                        <!-- الصورة -->
                        <div class="col-md-12 mb-3">
                            <label>صورة الفرع</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> حفظ الفرع
                    </button>

                    <a href="{{ route('dashboard.branches.index') }}" class="btn btn-default">
                        رجوع
                    </a>
                </form>

            </div>
        </div>

    </section>

</div>
@endsection
