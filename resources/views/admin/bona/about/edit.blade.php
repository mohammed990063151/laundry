@extends('admin.layouts.dashboard.app')
@section('title', ' الصفحة  من نحن العميل  لوحة  التحكم - بونا ')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>إعدادات صفحة من نحن</h1>
    </section>

    <section class="content">
        <div class="box box-primary p-4">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('dashboard.bona.about.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <h4 class="text-primary">قسم الهيرو</h4>
                <div class="mb-3">
                    <label>العنوان</label>
                    <input type="text" name="hero_title" value="{{ $about->hero_title }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>الوصف</label>
                    <textarea name="hero_description" class="form-control ckeditor">{!! $about->hero_description !!}</textarea>
                </div>
                <div class="mb-3">
                    <label>صورة الخلفية</label><br>
                    @if($about->hero_image)
                        <img src="{{ asset($about->hero_image) }}" width="200" class="mb-2 rounded shadow">
                    @endif
                    <input type="file" name="hero_image" class="form-control">
                </div>

                <hr>

                <h4 class="text-primary">قسم التعريف</h4>
                <div class="mb-3">
                    <label>العنوان</label>
                    <input type="text" name="about_title" value="{{ $about->about_title }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>النص</label>
                    <textarea name="about_text" class="form-control ckeditor" rows="4">{{ $about->about_text }}</textarea>
                </div>
                <div class="mb-3">
                    <label>الصورة</label><br>
                    @if($about->about_image)
                        <img src="{{ asset($about->about_image) }}" width="200" class="mb-2 rounded shadow">
                    @endif
                    <input type="file" name="about_image" class="form-control">
                </div>

                <hr>

                <h4 class="text-primary">الرؤية / المهمة / القيم</h4>
                <div class="mb-3">
                    <label>الرؤية</label>
                    <textarea name="vision_text" class="form-control ckeditor">{{ $about->vision_text }}</textarea>
                </div>
                <div class="mb-3">
                    <label>المهمة</label>
                    <textarea name="mission_text" class="form-control ckeditor">{{ $about->mission_text }}</textarea>
                </div>
                <div class="mb-3">
                    <label>القيم</label>
                    <textarea name="values_text" class="form-control ckeditor">{{ $about->values_text }}</textarea>
                </div>

                <hr>

                <h4 class="text-primary">القصة</h4>
                <div class="mb-3">
                    <label>العنوان</label>
                    <input type="text" name="story_title" value="{{ $about->story_title }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label>النص</label>
                    <textarea name="story_text" class="form-control ckeditor">{{ $about->story_text }}</textarea>
                </div>
                <div class="mb-3">
                    <label>الصورة</label><br>
                    @if($about->story_image)
                        <img src="{{ asset($about->story_image) }}" width="200" class="mb-2 rounded shadow">
                    @endif
                    <input type="file" name="story_image" class="form-control">
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success px-4 py-2">💾 حفظ التغييرات</button>
                </div>
            </form>
        </div>
    </section>
</div>
 <script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('story_text', {
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
        CKEDITOR.replace('values_text', {
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
        CKEDITOR.replace('mission_text', {
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
        CKEDITOR.replace('vision_text', {
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
        CKEDITOR.replace('about_text', {
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
        CKEDITOR.replace('hero_description', {
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
