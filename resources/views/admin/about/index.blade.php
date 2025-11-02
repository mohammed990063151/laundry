@extends('admin.layouts.dashboard.app')

@section('content')
<style>
    .about-wrapper {
        background: #f5f7fa;
        border-radius: 12px;
        padding: 20px;
        transition: .3s;
    }
    .about-wrapper:hover {
        box-shadow: 0 0 20px rgba(0,0,0,0.10);
        transform: translateY(-3px);
    }
    .preview-box img {
        width: 120px;
        height: 120px;
        border-radius: 8px;
        object-fit: cover;
        border: 3px solid #fff;
        box-shadow: 0 0 10px rgba(0,0,0,.1);
        transition: .3s;
    }
    .preview-box img:hover {
        transform: scale(1.05);
    }
    .form-label {
        font-weight: bold;
        color: #34495E;
    }
    .input-icon {
        position: absolute;
        right: 10px;
        top: 12px;
        color: #bbb;
    }
    .form-control {
        padding-right: 30px;
    }
    .pill {
        background: #e7ffe9;
        border: 1px solid #86d993;
        padding: 6px 12px;
        border-radius: 50px;
        font-size: 14px;
        margin: 3px;
        display: inline-block;
        color:#1C5530;
    }
</style>

<div class="content-wrapper">

    <section class="content-header">
        <h1><i class="fa fa-info-circle"></i> إعدادات صفحة من نحن</h1>
    </section>

    <section class="content">
        <div class="about-wrapper">

            @include('partials._errors')
            @if(session('success'))
                <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ session('success') }}</div>
            @endif

            <form action="{{ route('dashboard.about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">

                    <!-- العنوان -->
                    <div class="col-md-12 mb-3 position-relative">
                        <label class="form-label">عنوان الصفحة</label>
                        <i class="fa fa-heading input-icon"></i>
                        <input type="text" name="title" class="form-control" value="{{ $about->title }}">
                    </div>
<br /><br /><br /><br />
                    <!-- الوصف -->
                    <div class="col-md-12 mb-3 position-relative">
                        <label class="form-label">الوصف</label>
                        <i class="fa fa-align-left input-icon"></i>
                        <textarea name="description" class="form-control" rows="4">{{ $about->description }}</textarea>
                    </div>

                    <!-- النقاط -->
                    <div class="col-md-3 mb-3 position-relative">
                        <label class="form-label">نقطة 1</label>
                        <i class="fa fa-check input-icon"></i>
                        <input type="text" name="point1" class="form-control" value="{{ $about->point1 }}">
                    </div>
                    <div class="col-md-3 mb-3 position-relative">
                        <label class="form-label">نقطة 2</label>
                        <i class="fa fa-check input-icon"></i>
                        <input type="text" name="point2" class="form-control" value="{{ $about->point2 }}">
                    </div>
                    <div class="col-md-3 mb-3 position-relative">
                        <label class="form-label">نقطة 3</label>
                        <i class="fa fa-check input-icon"></i>
                        <input type="text" name="point3" class="form-control" value="{{ $about->point3 }}">
                    </div>
                    <div class="col-md-3 mb-3 position-relative">
                        <label class="form-label">نقطة 4</label>
                        <i class="fa fa-check input-icon"></i>
                        <input type="text" name="point4" class="form-control" value="{{ $about->point4 }}">
                    </div>

                    <!-- صورة 1 -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label"><i class="fa fa-image"></i> الصورة الرئيسية</label>
                        <input type="file" name="image1" class="form-control">
                        
                        @if($about->image1)
                            <div class="preview-box mt-2">
                                <img src="{{ asset($about->image1) }}">
                            </div>
                        @endif
                    </div>

                    <!-- صورة 2 -->
                    <div class="col-md-6 mb-4">
                        <label class="form-label"><i class="fa fa-image"></i> الصورة الفرعية</label>
                        <input type="file" name="image2" class="form-control">
                        
                        @if($about->image2)
                            <div class="preview-box mt-2">
                                <img src="{{ asset($about->image2) }}">
                            </div>
                        @endif
                    </div>

                </div>

                <button class="btn btn-success btn-lg">
                    <i class="fa fa-save"></i> حفظ التغييرات
                </button>
            </form>

            <hr>

            <!-- معاينة مصغّرة مباشرة -->
            <h4>معاينة مباشرة</h4>
            <div class="bg-white p-3 rounded shadow-sm">
                <h5>{{ $about->title }}</h5>
                <p>{{ $about->description }}</p>

                @if($about->point1)<span class="pill">{{ $about->point1 }}</span>@endif
                @if($about->point2)<span class="pill">{{ $about->point2 }}</span>@endif
                @if($about->point3)<span class="pill">{{ $about->point3 }}</span>@endif
                @if($about->point4)<span class="pill">{{ $about->point4 }}</span>@endif
            </div>

        </div>
    </section>
</div>
@endsection
