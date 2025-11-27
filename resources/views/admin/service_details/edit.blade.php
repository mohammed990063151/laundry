
@extends('admin.layouts.dashboard.app')

@section('title', 'تعديل تفاصيل الخدمة')

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
                    <textarea name="long_description" class="form-control" rows="5">
                        {{ old('long_description', $detail->long_description) }}
                    </textarea>
                </div>

                {{-- <div class="mb-3">
                    <label class="form-label">الصورة الأساسية الحالية</label><br>
                    @if($detail->image)
                        <img src="{{ asset('storage/'.$detail->image) }}" width="200" class="rounded mb-3">
                    @endif
                    <input type="file" name="image" class="form-control">
                </div> --}}
                <div class="mb-4">
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

                {{-- <div class="mb-3">
                    <label class="form-label">معرض الصور</label><br>

                    <div class="row mb-3">
                        @if($detail->gallery)
                            @foreach($detail->gallery as $img)
                                <div class="col-md-3 mb-2">
                                    <img src="{{ asset('storage/'.$img) }}" class="img-fluid rounded">
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <input type="file" name="gallery[]" class="form-control" multiple>
                </div> --}}

                <div class="row" id="galleryImages">

    @if($detail->gallery)
        @foreach($detail->gallery as $img)
            <div class="col-md-3 text-center mb-3 gallery-item" id="img_{{ md5($img) }}">

                <div class="border p-2 rounded shadow-sm bg-white">
                    <img src="{{ asset('storage/app/public/'.$img) }}" class="img-fluid rounded mb-2"
                         style="height:150px; object-fit:cover;">
                </div>

                <button class="btn btn-sm btn-danger mt-1"
                        onclick="deleteGalleryImage('{{ $img }}', {{ $service->id }}, {{ $detail->id }}, '{{ md5($img) }}')">
                    حذف
                </button>

            </div>
        @endforeach
    @endif
     <input type="file" name="gallery[]" class="form-control" multiple>
</div>


                <div class="mb-3">
                    <label class="form-label">مميزات الخدمة</label>
                    <textarea name="features" class="form-control" rows="4">
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

@endsection
{{-- @extends('admin.layouts.dashboard.app')

@section('title', 'تعديل تفاصيل الخدمة')

@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <h2 class="fw-bold mb-4">تعديل تفاصيل خدمة: {{ $service->title }}</h2>
    </section>

    <section class="content">
        <div class="box box-primary p-4">

            <!-- 🔵 فورم التحديث الرئيسي -->
            <form action="{{ route('dashboard.service.details.update', [$service->id, $detail->id]) }}"
                  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- 🟦 معلومات أساسية -->
                <div class="row">

                    <!-- العنوان -->
                    <div class="col-md-8 mb-3">
                        <label class="form-label fw-bold">العنوان الفرعي</label>
                        <input type="text" name="title" class="form-control"
                               value="{{ old('title', $detail->title) }}">
                    </div>

                    <!-- الترتيب -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">الترتيب</label>
                        <input type="number" name="sort_order" class="form-control"
                               value="{{ old('sort_order', $detail->sort_order) }}">
                    </div>

                </div>

                <!-- الوصف -->
                <div class="mb-3">
                    <label class="form-label fw-bold">الوصف الطويل</label>
                    <textarea name="long_description" rows="5" class="form-control">
                        {{ old('long_description', $detail->long_description) }}
                    </textarea>
                </div>


                <!-- 🟦 الصورة الأساسية -->
                <div class="mb-4">
                    <label class="form-label fw-bold">الصورة الأساسية الحالية</label><br>

                    @if($detail->image)
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img src="{{ asset($detail->image) }}"
                                 width="200" class="rounded shadow">
                        </div>
                    @else
                        <p class="text-muted">لا توجد صورة حالياً</p>
                    @endif

                    <input type="file" name="image" class="form-control mt-2">
                </div>


                <!-- 🟦 معرض الصور -->
                <div class="mb-4">
                    <label class="form-label fw-bold">معرض الصور الحالي</label>

                    <div class="row">

                        @if($detail->gallery)
                            @foreach($detail->gallery as $img)
                                <div class="col-md-3 text-center mb-3">

                                    <div class="border p-2 rounded shadow-sm bg-white">
                                        <img src="{{ asset($img) }}"
                                             class="img-fluid rounded mb-2"
                                             style="height:150px; object-fit:cover;">
                                    </div>

                                </div>
                            @endforeach
                        @else
                            <p class="text-muted">لا يوجد صور في المعرض.</p>
                        @endif

                    </div>

                    <hr>

                    <label class="form-label fw-bold">إضافة صور جديدة للمعرض</label>
                    <input type="file" name="gallery[]" class="form-control" multiple>
                </div>


                <!-- 🟦 المميزات -->
                <div class="mb-4">
                    <label class="form-label fw-bold">مميزات الخدمة</label>
                    <textarea name="features" rows="5" class="form-control">
                        {{ old('features', implode("\n", $detail->features ?? [])) }}
                    </textarea>
                    <small class="text-muted">اكتب كل ميزة في سطر منفصل</small>
                </div>

                <!-- 🟦 الفيديو -->
                <div class="mb-4">
                    <label class="form-label fw-bold">رابط الفيديو (اختياري)</label>
                    <input type="text" name="video_url" class="form-control"
                           value="{{ old('video_url', $detail->video_url) }}">
                </div>

                <hr>

                <!-- أزرار -->
                <button type="submit" class="btn btn-primary px-4">
                    تحديث التفاصيل
                </button>

                <a href="{{ route('dashboard.bona-services.index', $service->id) }}"
                   class="btn btn-secondary px-4 ms-2">رجوع</a>

            </form><!-- نهاية فورم التحديث -->

        </div>
    </section>

</div>

@endsection --}}
