@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>إضافة خدمة جديدة</h1>
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

            <form action="{{ route('dashboard.bona.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="title">عنوان الخدمة <span class="text-danger">*</span></label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="أدخل اسم الخدمة" required>
                </div>

                <div class="form-group mb-3">
                    <label for="subtitle">العنوان الفرعي (اختياري)</label>
                    <input type="text" name="subtitle" id="subtitle" class="form-control" placeholder="أدخل عنوانًا فرعيًا (اختياري)">
                </div>

                <div class="form-group mb-3">
                    <label for="description">الوصف</label>
                    <textarea name="description" id="description" class="form-control ckeditor" rows="4" placeholder="أدخل وصف الخدمة بالتفصيل"></textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="image">صورة الخدمة  </label>
                    <input type="file" name="image" id="image" class="form-control">
                    <small class="text-muted d-block mt-1">أنواع الملفات المسموحة: jpg, png, webp, mov, webm</small>
                </div>

                <div class="form-group mb-4">
                    <label for="sort_order">ترتيب العرض</label>
                    <input type="number" name="sort_order" id="sort_order" class="form-control" value="0" min="0">
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save me-1"></i> حفظ الخدمة
                    </button>
                    <a href="{{ route('dashboard.bona.services.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left me-1"></i> عودة
                    </a>
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
