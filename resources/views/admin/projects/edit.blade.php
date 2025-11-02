@extends('admin.layouts.dashboard.app')

@section('title','تعديل المشروع')

@section('content')
<style>
.form-card {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 0 25px rgba(0,0,0,0.05);
}
.btn-save {
    background: #27ae60;
    color: #fff;
    padding: 10px 20px;
    border-radius: 30px;
    font-weight: bold;
}
.btn-save:hover {
    background: #1e8f4c;
}
.preview-img {
    width: 150px;
    border-radius: 8px;
    margin-top: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
</style>

<div class="content-wrapper">
<section class="content-header">
    <h2 class="page-title"><i class="fa fa-edit"></i> تعديل المشروع</h2>
</section>

<section class="content">
<div class="container">
<div class="form-card">

<form action="{{ route('dashboard.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-3">
        <label class="form-label fw-bold">عنوان المشروع</label>
        <input type="text" name="title" value="{{ $project->title }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">الوصف</label>
        <textarea name="description" class="form-control" rows="4">{{ $project->description }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">الموقع</label>
        <input type="text" name="location" value="{{ $project->location }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">تاريخ الإنجاز</label>
        <input type="date" name="completion_date" value="{{ $project->completion_date }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label fw-bold">الصورة الحالية</label><br>
        @if($project->image)
            <img src="{{ asset($project->image) }}" class="preview-img mb-2">
        @else
            <p class="text-muted">لا توجد صورة حالياً</p>
        @endif

        <label class="form-label fw-bold">تغيير الصورة</label>
        <input type="file" name="image" class="form-control" onchange="previewImage(event)">
        <img id="preview" class="preview-img d-none">
    </div>

    <button class="btn btn-save"><i class="fa fa-save"></i> حفظ التغييرات</button>
    <a href="{{ route('dashboard.projects.index') }}" class="btn btn-secondary ms-2">رجوع</a>
</form>

</div>
</div>
</section>
</div>

<script>
function previewImage(event) {
    const img = document.getElementById('preview');
    img.src = URL.createObjectURL(event.target.files[0]);
    img.classList.remove('d-none');
}
</script>
@endsection
