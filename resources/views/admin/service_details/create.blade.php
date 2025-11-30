{{-- @extends('admin.layouts.dashboard.app')

@section('content')

<h3>إضافة تفاصيل لخدمة: {{ $service->title }}</h3>

<form action="{{ route('dashboard.service.details.store', $service->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>العنوان الفرعي</label>
    <input type="text" name="title" class="form-control">

    <label>الوصف الطويل</label>
    <textarea name="long_description" class="form-control" rows="6"></textarea>

    <label>صورة أساسية</label>
    <input type="file" name="image" class="form-control">

    <label>معرض صور (يمكن رفع عدة صور)</label>
    <input type="file" name="gallery[]" class="form-control" multiple>

    <label>المميزات (كل ميزة في سطر)</label>
    <textarea name="features" class="form-control" rows="4"></textarea>

    <label>رابط فيديو</label>
    <input type="text" name="video_url" class="form-control">

    <label>الترتيب</label>
    <input type="number" name="sort_order" class="form-control" value="0">

    <button type="submit" class="btn btn-primary mt-3">إضافة التفاصيل</button>

</form>

@endsection --}}

@extends('admin.layouts.dashboard.app')

@section('title', 'إضافة تفاصيل للخدمة')

@section('content')

 <div class="content-wrapper">
    <section class="content-header">

    <h2 class="fw-bold mb-4">إضافة تفاصيل لخدمة: {{ $service->title }}</h2>
 </section>
   <section class="content">
        <div class="box box-primary p-3">

            <form action="{{ route('dashboard.service.details.store', $service->id) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <!-- عنوان فرعي -->
                    <div class="col-md-6 mb-3">
                        <label class="form-label">العنوان الفرعي</label>
                        <input type="text" name="title" class="form-control"
                               placeholder="مثال: مميزات الخدمة" value="{{ old('title') }}">
                    </div>

                    <!-- ترتيب -->
                    <div class="col-md-3 mb-3">
                        <label class="form-label">الترتيب</label>
                        <input type="number" name="sort_order" class="form-control" value="0">
                    </div>

                </div>

                <!-- الوصف الطويل -->
                <div class="mb-3">
                    <label class="form-label">الوصف الطويل</label>
                    <textarea name="long_description" class="form-control ckeditor" rows="5"
                              placeholder="اكتب شرحاً طويلاً للخدمة">{{ old('long_description') }}</textarea>
                </div>

                <!-- صورة أساسية -->
                <div class="mb-3">
                    <label class="form-label">الصورة الأساسية</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <!-- معرض صور -->
                <div class="mb-3">
                    <label class="form-label">معرض الصور (يمكن اختيار أكثر من صورة)</label>
                    <input type="file" name="gallery[]" class="form-control" multiple>
                </div>

                <!-- مميزات الخدمة -->
                <div class="mb-3">
                    <label class="form-label">مميزات الخدمة (كل ميزة في سطر)</label>
                    <textarea name="features" class="form-control ckeditor" rows="4"
                              placeholder="مثال:
✔ جودة عالية
✔ تنفيذ سريع
✔ عمالة محترفة">{{ old('features') }}</textarea>
                </div>

                <!-- فيديو -->
                <div class="mb-3">
                    <label class="form-label">رابط فيديو (اختياري)</label>
                    <input type="text" name="video_url" class="form-control"
                           placeholder="ضع رابط يوتيوب أو فيديو خارجي" value="{{ old('video_url') }}">
                </div>

                <hr>

                <!-- زر الحفظ -->
                <button type="submit" class="btn btn-primary px-4">
                    حفظ التفاصيل
                </button>

                <a href="{{ route('dashboard.bona-services.edit', $service->id) }}"
                   class="btn btn-secondary px-4 ms-2">
                    رجوع
                </a>

            </form>

        </div>
    </div>

</div>
 </section>
</div>
 <script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('long_description', {
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
 <script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('features', {
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

