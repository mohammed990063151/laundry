@extends('admin.layouts.dashboard.app')
@section('title', ' الصفحة  اضافة مشروع لوحة  التحكم - بونا ')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>إضافة مشروع جديد</h1>
    </section>

    <section class="content">
        <div class="box box-primary p-4">
            <form action="{{ route('dashboard.bona.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label>عنوان المشروع</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>الوصف</label>
                    <textarea name="description" class="form-control ckeditor" rows="4"></textarea>
                </div>

                <div class="mb-3">
                    <label>الموقع</label>
                    <input type="text" name="location" class="form-control">
                </div>

                <div class="mb-3">
                    <label>الصورة</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="mb-3">
                    <label>الترتيب</label>
                    <input type="number" name="sort_order" class="form-control" value="0">
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success px-4 py-2">💾 حفظ</button>
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
@endsection
