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
                    <textarea name="short_description" class="form-control ckeditor">{{ $project->short_description }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label>الوصف الكامل</label>
                    <textarea name="long_description" class="form-control ckeditor">{{ $project->long_description }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label>الصورة الرئيسية (الحالية أدناه)</label><br>
                    {{-- @if($project->image)
                        <img src="{{ asset('storage/app/public/' . $project->image) }}" width="180" class="mb-2">
                    @endif --}}
                    @if($project->image)
    <div class="mb-3">
        <img src="{{ asset('storage/app/public/' . $project->image) }}"
             width="180" class="rounded shadow-sm mb-2">

        <button type="button" class="btn btn-danger btn-sm"
                onclick="confirmDeleteMain()">
            <i class="fa fa-trash"></i> حذف الصورة الأساسية
        </button>

        <!-- Form حذف الصورة الأساسية -->
        <form id="delete-main-image-form"
              action="{{ route('dashboard.bona-projects.delete-main', $project->id) }}"
              method="POST" style="display:none;">
            @csrf
            @method('DELETE')
        </form>
    </div>
@endif

                    <input type="file" name="image" class="form-control mt-2">
                </div>

                <div class="form-group mb-3">
                    <label>إضافة صور للمعرض</label>
                    <input type="file" name="gallery[]" class="form-control" multiple>
                </div>

                <h4 class="mt-4">معرض الصور الحالية:</h4>
                {{-- <div class="row mt-2">
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
                </div> --}}
                <div class="row mt-3">

    @foreach($project->images as $img)
        <div class="col-md-3 mb-4">

            <!-- بطاقة الصورة -->
            <div class="image-wrapper shadow-sm rounded position-relative overflow-hidden">

                <!-- الصورة -->
                <img src="{{ asset('storage/app/public/' . $img->image) }}"
                     class="img-fluid project-photo"
                     style="height:180px; width:100%; object-fit:cover;">

                <!-- زر الحذف -->
                {{-- <div class="delete-overlay">
                    <form action="{{ route('dashboard.bona-projects.delete-image', $img->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i> حذف
                        </button>
                    </form>
                </div> --}}
                <!-- زر الحذف -->
<div class="delete-overlay">
    <button type="button"
            class="btn btn-danger btn-sm"
            onclick="confirmDeleteGallery({{ $img->id }})">
        <i class="fa fa-trash"></i> حذف
    </button>
</div>

<form id="delete-gallery-form-{{ $img->id }}"
      action="{{ route('dashboard.bona-projects.delete-image', $img->id) }}"
      method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>


            </div>

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

<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('short_description', {
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// حذف الصورة الأساسية
function confirmDeleteMain() {
    Swal.fire({
        title: 'هل تريد حذف الصورة الأساسية؟',
        text: "لن تستطيع استرجاعها بعد الحذف!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'نعم، احذف',
        cancelButtonText: 'إلغاء'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-main-image-form').submit();
        }
    });
}


// حذف صورة من المعرض
function confirmDeleteGallery(id) {
    Swal.fire({
        title: 'هل تريد حذف هذه الصورة؟',
        text: "سيتم حذف الصورة نهائياً من المعرض!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'نعم، احذف',
        cancelButtonText: 'إلغاء'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-gallery-form-' + id).submit();
        }
    });
}
</script>

@endsection

