
@extends('admin.layouts.dashboard.app')

@section('title', 'تعديل تفاصيل الخدمة')
<style>
.gallery-card img:hover {
    transform: scale(1.03);
    transition: 0.2s;
}

.gallery-card {
    transition: 0.2s;
}

.gallery-card:hover {
    box-shadow: 0px 4px 12px rgba(0,0,0,0.15);
}
</style>

@section('content')


 <div class="content-wrapper">
    <section class="content-header">

    <h2 class="fw-bold mb-4">إضافة تفاصيل لخدمة: {{ $service->title }}</h2>
 </section>
   <section class="content">
        <div class="box box-primary p-3">

            <form action="{{ route('dashboard.service.details.update', [$service->id, $detail->id]) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label class="form-label">العنوان الفرعي</label>
                        <input type="text" name="title" class="form-control"
                               value="{{ old('title', $detail->title) }}">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label class="form-label">الترتيب</label>
                        <input type="number" name="sort_order" class="form-control"
                               value="{{ old('sort_order', $detail->sort_order) }}">
                    </div>

                </div>

                <div class="mb-3">
                    <label class="form-label">الوصف الطويل</label>
                    <textarea name="long_description" class="form-control ckeditor" rows="5">
                        {{ old('long_description', $detail->long_description) }}
                    </textarea>
                </div>

                {{-- <div class="mb-4">
    <label class="form-label fw-bold">الصورة الأساسية الحالية</label><br>

    @if($detail->image)
        <div id="mainImageBox" class="d-flex align-items-center gap-3 mb-3">

            <img src="{{ asset('storage/app/public/'.$detail->image) }}" width="200" class="rounded shadow">

            <button class="btn btn-danger"
                    onclick="deleteMainImage({{ $service->id }}, {{ $detail->id }})">
                حذف الصورة
            </button>

        </div>
    @else
        <p class="text-muted">لا توجد صورة أساسية حالياً.</p>
    @endif
</div>
   <input type="file" name="image" class="form-control">
 --}}
 <div class="mb-4">
    <label class="form-label fw-bold">الصورة الأساسية الحالية</label>

    @if($detail->image)
        <div id="mainImageBox" class="d-flex align-items-center gap-3 mb-3">

            <div class="image-box rounded shadow-sm p-2 bg-white">
                <img src="{{ asset('storage/app/public/'.$detail->image) }}"
                     class="img-fluid rounded"
                     style="width:200px; height:150px; object-fit:cover;">
            </div>

            <button type="button"
                    class="btn btn-outline-danger btn-sm"
                    onclick="confirmDeleteMainImage({{ $service->id }}, {{ $detail->id }})" style="
    background-color: #ff5050;
">
                <i class="fa fa-trash"></i> حذف
            </button>

        </div>
    @else
        <p class="text-muted">لا توجد صورة أساسية.</p>
    @endif

    <input type="file" name="image" class="form-control mt-2">
</div>




           <div class="mb-4">
    <label class="form-label fw-bold">معرض الصور</label>

    <div class="row">

        @if($detail->gallery)
            @foreach($detail->gallery as $img)
                <div class="col-md-3 mb-4 text-center" id="img_{{ md5($img) }}">

                    <div class="gallery-card rounded shadow-sm p-2 bg-white position-relative">

                        <img src="{{ asset('storage/app/public/'.$img) }}"
                             class="img-fluid rounded"
                             style="height:150px; width:100%; object-fit:cover; cursor:pointer;">

                    </div>

                    <button type="button"
                            class="btn btn-outline-danger btn-sm mt-2"
                            onclick="confirmDeleteGalleryImage('{{ $img }}',
                                                              {{ $service->id }},
                                                              {{ $detail->id }},
                                                              '{{ md5($img) }}')" style="
    background-color: #ff5050;
">
                        <i class="fa fa-trash"></i> حذف
                    </button>

                </div>
            @endforeach
        @endif

    </div>

    <label class="form-label fw-bold mt-3">إضافة صور جديدة</label>
    <input type="file" name="gallery[]" class="form-control" multiple>
</div>


                <div class="mb-3">
                    <label class="form-label">مميزات الخدمة</label>
                    <textarea name="features" class="form-control ckeditor" rows="4">
                        {{ old('features', implode("\n", $detail->features ?? [])) }}
                    </textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">رابط فيديو</label>
                    <input type="text" name="video_url"
                           value="{{ old('video_url', $detail->video_url) }}"
                           class="form-control">
                </div>

                <hr>

                <button type="submit" class="btn btn-primary px-4">
                    تحديث التفاصيل
                </button>

                <a href="{{ route('dashboard.bona-services.edit', $service->id) }}"
                   class="btn btn-secondary px-4 ms-2">
                    رجوع
                </a>

            </form>

        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmDeleteMainImage(serviceId, detailId) {
    Swal.fire({
        title: 'هل أنت متأكد؟',
        text: "سيتم حذف الصورة الأساسية نهائيًا!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'نعم، احذف',
        cancelButtonText: 'إلغاء',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6'
    }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                url: "/dashboard/services/" + serviceId + "/details/" + detailId + "/delete-main-image",
                type: "DELETE",
                data: { _token: "{{ csrf_token() }}" },

                success: function(res) {
                    $("#mainImageBox").fadeOut(300, function () {
                        $(this).remove();
                    });

                    Swal.fire({
                        icon: 'success',
                        title: 'تم الحذف!',
                        text: res.message,
                        timer: 1500
                    });
                }
            });

        }
    });
}



function confirmDeleteGalleryImage(imagePath, serviceId, detailId, boxId) {

    Swal.fire({
        title: "هل تريد حذف هذه الصورة؟",
        text: "سيتم حذفها من المعرض.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "نعم، احذف",
        cancelButtonText: "إلغاء",
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6"
    }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                url: "/dashboard/services/" + serviceId + "/details/" + detailId + "/delete-gallery-image",
                type: "DELETE",
                data: {
                    _token: "{{ csrf_token() }}",
                    image_path: imagePath
                },

                success: function(res) {
                    $("#img_" + boxId).fadeOut(300, function () {
                        $(this).remove();
                    });

                    Swal.fire({
                        icon: 'success',
                        title: 'تم الحذف!',
                        text: res.message,
                        timer: 1500
                    });
                }
            });
        }
    });
}
</script>

<script>
function deleteMainImage(serviceId, detailId) {

    if (!confirm("هل تريد حذف الصورة الأساسية؟")) return;

    $.ajax({
        url: "/dashboard/services/" + serviceId + "/details/" + detailId + "/delete-main-image",
        type: "DELETE",
        data: { _token: "{{ csrf_token() }}" },

        success: function(res) {
            $("#mainImageBox").remove();
            alert(res.message);
        },

        error: function(err) {
            alert("حدث خطأ أثناء الحذف");
            console.log(err);
        }
    });
}


function deleteGalleryImage(imagePath, serviceId, detailId, boxId) {

    if (!confirm("هل تريد حذف هذه الصورة؟")) return;

    $.ajax({
        url: "/dashboard/services/" + serviceId + "/details/" + detailId + "/delete-gallery-image",
        type: "DELETE",
        data: {
            _token: "{{ csrf_token() }}",
            image_path: imagePath
        },

        success: function(res) {
            $("#img_" + boxId).fadeOut(300, function () {
                $(this).remove();
            });
            alert(res.message);
        },

        error: function(err) {
            alert("حدث خطأ أثناء الحذف");
            console.log(err);
        }
    });
}
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
