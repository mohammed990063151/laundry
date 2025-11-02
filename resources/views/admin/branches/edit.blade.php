@extends('admin.layouts.dashboard.app')

@section('content')
<style>
    .form-box {
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 0 20px rgba(0,0,0,0.05);
        margin-top: 20px;
    }
    .form-box:hover {
        transform: translateY(-2px);
        transition: .3s;
        box-shadow: 0 0 30px rgba(0,0,0,0.07);
    }
    .form-label { font-weight: bold; }
    .input-icon {
        position:absolute; right:10px; top:10px; color:#aaa;
    }
    .pos-relative { position:relative; }
</style>

<div class="content-wrapper">

    <section class="content-header">
        <h1><i class="fa fa-building"></i> تعديل بيانات الفرع</h1>
    </section>

    <section class="content">
        <div class="form-box">

            @include('partials._errors')

            @if(session('success'))
                <div class="alert alert-success"><i class="fa fa-check"></i> {{ session('success') }}</div>
            @endif

            <form action="{{ route('dashboard.branches.update', $branch) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">

                    <!-- الاسم -->
                    <div class="col-md-6 mb-3 pos-relative">
                        <label class="form-label">اسم الفرع</label>
                        <i class="fa fa-leaf input-icon"></i>
                        <input class="form-control" name="name" value="{{ old('name', $branch->name) }}">
                    </div>

                    <!-- الهاتف -->
                    <div class="col-md-6 mb-3 pos-relative">
                        <label class="form-label">الهاتف</label>
                        <i class="fa fa-phone input-icon"></i>
                        <input class="form-control" name="phone" value="{{ old('phone', $branch->phone) }}">
                    </div>

                    <!-- الإيميل -->
                    <div class="col-md-6 mb-3 pos-relative">
                        <label class="form-label">البريد الإلكتروني</label>
                        <i class="fa fa-envelope input-icon"></i>
                        <input class="form-control" name="email" value="{{ old('email', $branch->email) }}">
                    </div>

                    <!-- العنوان -->
                    <div class="col-md-6 mb-3 pos-relative">
                        <label class="form-label">العنوان</label>
                        <i class="fa fa-map-marker input-icon"></i>
                        <input class="form-control" name="address" value="{{ old('address', $branch->address) }}">
                    </div>

                    <!-- رابط الخريطة -->
                    <div class="col-md-12 mb-3 pos-relative">
                        <label class="form-label">رابط خريطة Google Maps</label>
                        <i class="fa fa-map input-icon"></i>
                        <input class="form-control" name="map_link" value="{{ old('map_link', $branch->map_link) }}">
                    </div>

                </div>

                <button type="submit" class="btn btn-success">
                    <i class="fa fa-save"></i> حفظ التعديلات
                </button>

            </form>
        </div>
    </section>

</div>
@endsection
