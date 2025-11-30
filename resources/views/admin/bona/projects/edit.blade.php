{{--
@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h2 class="fw-bold mb-4">تعديل مشروع: {{ $project->title }}</h2>
    </section>

    <section class="content">
        <div class="box box-primary p-4">

            <form action="{{ route('dashboard.bona.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')


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

                    @if($project->image)
    <div class="mb-3">
        <img src="{{ asset('storage/app/public/' . $project->image) }}"
             width="180" class="rounded shadow-sm mb-2">

        <button type="button" class="btn btn-danger btn-sm"
                onclick="confirmDeleteMain()">
            <i class="fa fa-trash"></i> حذف الصورة الأساسية
        </button>

        <button type="button" class="btn btn-danger btn-sm"
        onclick="confirmDeleteMain()">
    <i class="fa fa-trash"></i> حذف الصورة الأساسية
</button>

    </div>
@endif

                    <input type="file" name="image" class="form-control mt-2">
                </div>

                <div class="form-group mb-3">
                    <label>إضافة صور للمعرض</label>
                    <input type="file" name="gallery[]" class="form-control" multiple>
                </div>

                <h4 class="mt-4">معرض الصور الحالية:</h4>

                <div class="row mt-3">

    @foreach($project->images as $img)
        <div class="col-md-3 mb-4">

            <!-- بطاقة الصورة -->
            <div class="image-wrapper shadow-sm rounded position-relative overflow-hidden">

                <!-- الصورة -->
                <img src="{{ asset('storage/app/public/' . $img->image) }}"
                     class="img-fluid project-photo"
                     style="height:180px; width:100%; object-fit:cover;">


<div class="delete-overlay">
    <button type="button"
            class="btn btn-danger btn-sm"
            onclick="confirmDeleteGallery({{ $img->id }})">
        <i class="fa fa-trash"></i> حذف
    </button>
</div>

@foreach($project->images as $img)

<form id="delete-gallery-form-{{ $img->id }}"
      action="{{ route('dashboard.bona-projects.delete-image', $img->id) }}"
      method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>

@endforeach



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
@foreach($project->images as $img)

<form id="delete-gallery-form-{{ $img->id }}"
      action="{{ route('dashboard.bona-projects.delete-image', $img->id) }}"
      method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>

@endforeach
<form id="delete-main-image-form"
      action="{{ route('dashboard.bona-projects.delete-main', $project->id) }}"
      method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>


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
 --}}

 @extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h2 class="fw-bold mb-4">تعديل مشروع: {{ $project->title }}</h2>
    </section>

    <section class="content">
        <div class="box box-primary p-4">

            <!-- FORM التعديل -->
            <form action="{{ route('dashboard.bona.projects.update', $project->id) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label>عنوان المشروع</label>
                    <input value="{{ $project->title }}"
                           type="text" name="title" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                    <label>الموقع</label>
                    <input value="{{ $project->location }}"
                           type="text" name="location" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label>الوصف المختصر</label>
                    <textarea name="short_description"
                              class="form-control ckeditor">{{ $project->short_description }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label>الوصف الكامل</label>
                    <textarea name="long_description"
                              class="form-control ckeditor">{{ $project->long_description }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label>الصورة الرئيسية (الحالية أدناه)</label><br>

                    @if($project->image)
                    <div class="mb-3">
                        <img src="{{ asset('storage/app/public/' . $project->image) }}"
                             width="180" class="rounded shadow-sm mb-2">

                        <button type="button" class="btn btn-danger btn-sm"
                                onclick="confirmDeleteMain()">
                            <i class="fa fa-trash"></i> حذف الصورة الأساسية
                        </button>
                    </div>
                    @endif

                    <input type="file" name="image" class="form-control mt-2">
                </div>

                <div class="form-group mb-3">
                    <label>إضافة صور للمعرض</label>
                    <input type="file" name="gallery[]" class="form-control" multiple>
                </div>

                <h4 class="mt-4">معرض الصور الحالية:</h4>

                <div class="row mt-3">

                    @foreach($project->images as $img)
                    <div class="col-md-3 mb-4">

                        <div class="image-wrapper shadow-sm rounded position-relative overflow-hidden">

                            <img src="{{ asset('storage/app/public/' . $img->image) }}"
                                 class="img-fluid project-photo"
                                 style="height:180px; width:100%; object-fit:cover;">

                            <div class="delete-overlay">
                                <button type="button" class="btn btn-danger btn-sm"
                                        onclick="confirmDeleteGallery({{ $img->id }})">
                                    <i class="fa fa-trash"></i> حذف
                                </button>
                            </div>

                        </div>

                    </div>
                    @endforeach

                </div>

                <div class="form-group mb-3">
                    <label>ترتيب العرض</label>
                    <input value="{{ $project->sort_order }}"
                           type="number" name="sort_order" class="form-control">
                </div>

                <button class="btn btn-primary w-100 mt-3">تحديث المشروع</button>

            </form>
            <!-- END FORM التعديل -->

        </div>
    </section>
</div>

<!-- ===============================
      FORMS الحذف (خارج فورم التعديل)
================================= -->

<!-- حذف الصور من المعرض -->
@foreach($project->images as $img)
<form id="delete-gallery-form-{{ $img->id }}"
      action="{{ route('dashboard.bona-projects.delete-image', $img->id) }}"
      method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>
@endforeach

<!-- حذف الصورة الأساسية -->
<form id="delete-main-image-form"
      action="{{ route('dashboard.bona-projects.delete-main', $project->id) }}"
      method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>

<!-- CKEditor -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    if (typeof CKEDITOR !== 'undefined') {
        CKEDITOR.replace('short_description', {
            contentsLangDirection: 'rtl',
            contentsLanguage: 'ar',
            language: 'ar',
            height: 250
        });

        CKEDITOR.replace('long_description', {
            contentsLangDirection: 'rtl',
            contentsLanguage: 'ar',
            language: 'ar',
            height: 250
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
        text: "سيتم حذفها نهائياً من المعرض!",
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

