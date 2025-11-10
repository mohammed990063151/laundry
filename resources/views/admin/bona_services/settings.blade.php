@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>إعدادات صفحة الرئيسية بونا</h1>
    </section>

    <section class="content">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="box box-primary">
            <div class="box-body">
                <form action="{{ route('dashboard.bona-services-settings.update') }}"
                      method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <h3>قسم الهيرو (الأعلى)</h3>
                    <div class="form-group">
                        <label>عنوان الهيرو</label>
                        <input type="text" name="hero_title" class="form-control"
                               value="{{ old('hero_title', $settings->hero_title) }}">
                    </div>
                    <div class="form-group">
                        <label>وصف الهيرو</label>
                        <textarea name="hero_subtitle" class="form-control ckeditor" rows="2">{{ old('hero_subtitle', $settings->hero_subtitle) }}</textarea>
                    </div>
                    {{-- <div class="form-group">
                        <label>صورة الخلفية للهيرو</label><br>
                        @if($settings->hero_background)
                            <img src="{{ asset($settings->hero_background) }}" width="200" class="mb-2">
                        @endif
                        <input type="file" name="hero_background" class="form-control">
                    </div> --}}
                    <div class="form-group">
    <label>صورة / فيديو الخلفية للهيرو</label><br>

    @if($settings->hero_background)
        @php
            $ext = strtolower(pathinfo($settings->hero_background, PATHINFO_EXTENSION));
            $isVideo = in_array($ext, ['mp4', 'webm', 'mov']);
        @endphp

        @if($isVideo)
            <!-- 🎥 عرض الفيديو -->
            <video width="320" height="180" controls class="mb-2 rounded shadow-sm">
                <source src="{{ asset($settings->hero_background) }}" type="video/{{ $ext }}">
                متصفحك لا يدعم تشغيل الفيديو.
            </video>
        @else
            <!-- 🖼️ عرض الصورة -->
            <img src="{{ asset($settings->hero_background) }}" width="200" class="mb-2 rounded shadow-sm border">
        @endif
    @endif

    <input type="file" name="hero_background" class="form-control mt-2">
</div>


                    <hr>

                    <h3>قسم لماذا نحن؟</h3>
                    <div class="form-group">
                        <label>عنوان صغير (بادج)</label>
                        <input type="text" name="whyus_badge" class="form-control"
                               value="{{ old('whyus_badge', $settings->whyus_badge) }}">
                    </div>
                    <div class="form-group">
                        <label>عنوان رئيسي</label>
                        <input type="text" name="whyus_title" class="form-control"
                               value="{{ old('whyus_title', $settings->whyus_title) }}">
                    </div>
                    <div class="form-group">
                        <label>النص</label>
                        <textarea name="whyus_text" class="form-control ckeditor" rows="3">{{ old('whyus_text', $settings->whyus_text) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>صورة القسم</label><br>
                        @if($settings->whyus_image)
                            <img src="{{ asset($settings->whyus_image) }}" width="200" class="mb-2">
                        @endif
                        <input type="file" name="whyus_image" class="form-control">
                    </div>

                    <hr>

                    <h3>الصورة الكبيرة</h3>
                    <div class="form-group">
                        <label>الصورة</label><br>
                        @if($settings->big_image)
                            <img src="{{ asset($settings->big_image) }}" width="250" class="mb-2">
                        @endif
                        <input type="file" name="big_image" class="form-control">
                    </div>

                    <hr>

                    <h3>قسم النداء للعمل (CTA)</h3>
                    <div class="form-group">
                        <label>العنوان</label>
                        <input type="text" name="cta_title" class="form-control"
                               value="{{ old('cta_title', $settings->cta_title) }}">
                    </div>
                    <div class="form-group">
                        <label>الوصف</label>
                        <textarea name="cta_subtitle" class="form-control ckeditor" rows="2">{{ old('cta_subtitle', $settings->cta_subtitle) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>نص الزر</label>
                        <input type="text" name="cta_button_text" class="form-control"
                               value="{{ old('cta_button_text', $settings->cta_button_text) }}">
                    </div>
                    <div class="form-group">
                        <label>رابط الزر</label>
                        <input type="text" name="cta_button_link" class="form-control"
                               value="{{ old('cta_button_link', $settings->cta_button_link) }}">
                    </div>
                    <div class="form-group">
                        <label>صورة خلفية النداء</label><br>
                        @if($settings->cta_background)
                            <img src="{{ asset($settings->cta_background) }}" width="250" class="mb-2">
                        @endif
                        <input type="file" name="cta_background" class="form-control">
                    </div>

                    <button class="btn btn-primary mt-3">حفظ التعديلات</button>
                </form>
            </div>
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
