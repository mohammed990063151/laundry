{{-- @extends('admin.layouts.dashboard.app')
@section('title', ' الصفحة  تعديل مشروع لوحة  التحكم - بونا ')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>تعديل المشروع</h1>
    </section>

    <section class="content">
        <div class="box box-primary p-4">
            <form action="{{ route('dashboard.bona.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                <div class="mb-3">
                    <label>عنوان المشروع</label>
                    <input type="text" name="title" value="{{ $project->title }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>الوصف</label>
                    <textarea name="description" class="form-control ckeditor" rows="4">{{ $project->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label>الموقع</label>
                    <input type="text" name="location" value="{{ $project->location }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>الصورة الحالية</label><br>
                    @if($project->image)
                        <img src="{{ asset($project->image) }}" width="200" class="mb-2 rounded shadow-sm">
                    @else
                        <p class="text-muted small">لا توجد صورة مرفقة</p>
                    @endif
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="mb-3">
                    <label>الترتيب</label>
                    <input type="number" name="sort_order" value="{{ $project->sort_order }}" class="form-control">
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success px-4 py-2">💾 تحديث</button>
                </div>
            </form>
        </div>
    </section>
</div>
 <script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('description', {
            contentsLangDirection: 'rtl',
            contentsLanguage: 'ar',
            language: 'ar',
            height: 250,
            removeButtons: 'Subscript,Superscript,Anchor,Image', // اختياري
            toolbarCanCollapse: true
        });
    }
});
</script>
@endsection --}}


@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h2 class="fw-bold mb-4">تعديل مشروع: {{ $project->title }}</h2>
    </section>

    <section class="content">
        <div class="box box-primary p-4">

            <form action="{{ route('dashboard.bona-projects.update', $project->id) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label>عنوان المشروع</label>
                    <input value="{{ $project->title }}" type="text" name="title" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label>الموقع</label>
                    <input value="{{ $project->location }}" type="text" name="location" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label>الوصف المختصر</label>
                    <textarea name="short_description" class="form-control">{{ $project->short_description }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label>الوصف الكامل</label>
                    <textarea name="long_description" class="form-control">{{ $project->long_description }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label>الصورة الرئيسية (الحالية أدناه)</label><br>
                    @if($project->image)
                        <img src="{{ asset('storage/app/public/' . $project->image) }}" width="180" class="mb-2">
                    @endif
                    <input type="file" name="image" class="form-control mt-2">
                </div>

                <div class="form-group mb-3">
                    <label>إضافة صور للمعرض</label>
                    <input type="file" name="gallery[]" class="form-control" multiple>
                </div>

                <h4 class="mt-4">📌 الصور الحالية:</h4>
                <div class="row mt-2">
                    @foreach($project->images as $img)
                    <div class="col-md-3 mb-3 text-center">
                        <img src="{{ asset('storage/app/public/' . $img->image) }}" class="img-thumbnail" style="height:140px;object-fit:cover">
                        <form action="{{ route('dashboard.bona-projects.delete-image', $img->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm mt-2">حذف</button>
                        </form>
                    </div>
                    @endforeach
                </div>

                <div class="form-group mb-3">
                    <label>ترتيب العرض</label>
                    <input value="{{ $project->sort_order }}" type="number" name="sort_order" class="form-control">
                </div>

                <button class="btn btn-primary w-100 mt-3">تحديث المشروع</button>

            </form>

        </div>
    </section>
</div>
@endsection

