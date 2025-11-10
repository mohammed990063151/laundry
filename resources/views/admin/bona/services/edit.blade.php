@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>تعديل الخدمة: {{ $service->title }}</h1>
    </section>

    <section class="content">
        <div class="box box-primary p-4 rounded-3">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="m-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- <form action="{{ route('dashboard.bona.services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') --}}
    <form action="{{ route('dashboard.bona-services.update', $service->id) }}"
      method="POST"
      enctype="multipart/form-data">
    @csrf
    @method('PUT')


                <div class="form-group mb-3">
                    <label for="title">عنوان الخدمة <span class="text-danger">*</span></label>
                    <input type="text" name="title" id="title" value="{{ old('title', $service->title) }}" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label for="subtitle">العنوان الفرعي (اختياري)</label>
                    <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $service->subtitle) }}" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="description">الوصف</label>
                    <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $service->description) }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label>صورة </label><br>

                    {{-- @if($service->image)
                        @php
                            $ext = strtolower(pathinfo($service->image, PATHINFO_EXTENSION));
                            $isVideo = in_array($ext, ['mp4', 'webm', 'mov']);
                        @endphp
                        @if($isVideo)
                            <video width="280" controls class="rounded shadow-sm mb-2">
                                <source src="{{ asset($service->image) }}" type="video/{{ $ext }}">
                                متصفحك لا يدعم تشغيل الفيديو.
                            </video>
                        @else --}}
                            <img src="{{ asset($service->image ?? 'assets/css/font/Inter-italic.var.woff2') }}" width="200" class="rounded shadow-sm mb-2 border">
                        {{-- @endif --}}
                    {{-- @endif --}}

                    <input type="file" name="image" id="image" class="form-control mt-2">
                    <small class="text-muted d-block mt-1">يمكنك ترك الحقل فارغًا للإبقاء على الصورة .</small>
                </div>

                <div class="form-group mb-4">
                    <label for="sort_order">ترتيب العرض</label>
                    <input type="number" name="sort_order" id="sort_order" class="form-control" value="{{ old('sort_order', $service->sort_order) }}">
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save me-1"></i> تحديث الخدمة
                    </button>
                    <a href="{{ route('dashboard.bona.services.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left me-1"></i> عودة
                    </a>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection
