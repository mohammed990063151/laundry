{{-- {{--
@extends('admin.layouts.dashboard.app')

@section('content')

    <style>
        .box-wrapper {
            background: #f3f6f8;
            border-radius: 12px;
            padding: 25px;
            border: 1px solid #e7ecef;
            transition: .3s;
        }

        .box-wrapper:hover {
            box-shadow: 0 0 25px rgba(0, 0, 0, .08);
        }

        .page-title {
            font-size: 26px;
            font-weight: bold;
            color: #1c5530;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #34495E;
        }

        .form-control {
            border-radius: 8px !important;
        }

        .input-icon {
            position: absolute;
            right: 10px;
            top: 38px;
            color: #aaa;
        }

        /* الصور */
        .preview img,
        .old-img {
            width: 140px;
            height: 140px;
            border-radius: 10px;
            object-fit: cover;
            border: 2px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, .08);
            margin: 5px;
            transition: .3s;
        }

        .preview img:hover,
        .old-img:hover {
            transform: scale(1.08) rotate(3deg);
        }

        .btn-save {
            font-size: 16px;
            padding: 10px 30px;
            border-radius: 30px;
            background: #27ae60;
            color: #fff;
            transition: .3s;
        }

        .btn-save:hover {
            background: #1c8b4f;
        }
    </style>


    <div class="content-wrapper">

        <section class="content-header">
            <h2 class="page-title">
                <i class="fa fa-edit"></i> تعديل بيانات الخدمة
            </h2>
        </section>

        <section class="content">
            <div class="box-wrapper">

                @include('partials._errors')

                @if (session('success'))
                    <div class="alert alert-success"><i class="fa fa-check"></i> {{ session('success') }}</div>
                @endif

                <form action="{{ route('dashboard.Pag_services.update', $Pag_service->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">

                        <!-- الاسم -->
                        <div class="col-md-6 mb-3 position-relative">
                            <label class="form-label">اسم الخدمة</label>
                            <i class="fa fa-leaf input-icon"></i>
                            <input class="form-control" name="title" value="{{ old('title', $Pag_service->title) }}">
                        </div>

                        <!-- الأيقونة -->
                        <div class="col-md-6 mb-3 position-relative">
                            <label class="form-label">أيقونة FontAwesome</label>
                            <i class="fa fa-icons input-icon"></i>
                            <input class="form-control" name="icon" value="{{ old('icon', $Pag_service->icon) }}">
                            <small class="text-muted">مثال: fa fa-tree</small>
                        </div>

                        <!-- الترتيب -->
                        <div class="col-md-4 mb-3 position-relative">
                            <label class="form-label">ترتيب الظهور</label>
                            <i class="fa fa-sort input-icon"></i>
                            <input name="sort_order" class="form-control"
                                value="{{ old('sort_order', $Pag_service->sort_order) }}">
                        </div>

                        <!-- الصور الجديدة -->
                        <div class="col-md-8 mb-3">
                            <label class="form-label"><i class="fa fa-images"></i> صور جديدة للخدمة</label>
                            <input type="file" name="images[]" class="form-control" multiple accept="image/*"
                                onchange="previewMultiple(event)">
                            <div id="multiPreview" class="preview d-flex flex-wrap mt-3"></div>
                        </div>

                        <!-- الوصف -->
                        <div class="col-md-12 mb-4 position-relative">
                            <label class="form-label">الوصف</label>
                            <i class="fa fa-align-right input-icon"></i>
                            <textarea name="description" class="form-control" rows="4">{{ old('description', $Pag_service->description) }}</textarea>
                        </div>

                    </div>

                    <button class="btn-save"><i class="fa fa-save"></i> تحديث الخدمة</button>

                </form>

                <hr class="my-4">

                <!-- عرض الصور القديمة -->
                {{-- <h4>📌 الصور الحالية:</h4>
        <div class="d-flex flex-wrap">
            @if ($Pag_service->images && $Pag_service->images->count() > 0)
                @foreach ($Pag_service->images as $img)
                    <img src="{{ asset( $img->image) }}" class="old-img">
                @endforeach
            @else
                <span class="text-muted">لا توجد صور حالية</span>
            @endif
        </div> --}
                <!-- عرض الصور القديمة -->
                <h4>📌 الصور الحالية:</h4>
                <div class="d-flex flex-wrap" id="oldImages">
                    @if ($Pag_service->images && $Pag_service->images->count() > 0)
                        @foreach ($Pag_service->images as $img)
                            <div class="position-relative m-2" style="display:inline-block;">
                                <img src="{{ asset($img->image) }}" class="old-img">
                                {{-- <button type="button" class="btn btn-danger btn-sm delete-btn"
                    data-id="{{ $img->id }}"
                    style="position:absolute;top:5px;right:5px;border-radius:50%;padding:4px 7px;">
                    <i class="fa fa-times"></i>
                </button> --}
                                <button type="button" class="delete-btn" data-id="{{ $img->id }}"
                                    style="
        /* position:absolute; */
        top:5px;
        right:5px;
        width:26px;
        height:26px;
        background:#e74c3c;
        border:none;
        color:#fff;
        border-radius:50%;
        display:flex;
        align-items:center;
        justify-content:center;
        cursor:pointer;
        box-shadow:0 0 6px rgba(0,0,0,0.2);
    ">
                                    <i class="fa fa-times" style="font-size:14px;"></i>
                                </button>

                            </div>
                        @endforeach
                    @else
                        <span class="text-muted">لا توجد صور حالية</span>
                    @endif
                </div>


            </div>
        </section>

    </div>

    <script>
        /* معاينة الصور الجديدة */
        function previewMultiple(event) {
            let preview = document.getElementById('multiPreview');
            preview.innerHTML = ''; // تفريغ الصور السابقة
            Array.from(event.target.files).forEach(file => {
                let reader = new FileReader();
                reader.onload = function(e) {
                    let img = document.createElement('img');
                    img.src = e.target.result;
                    preview.appendChild(img);
                }
                reader.readAsDataURL(file);
            });
        }


        <script>
document.querySelectorAll('.delete-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        if(confirm('هل أنت متأكد من حذف هذه الصورة؟')) {

            fetch("{{ url('dashboard/Pag_services/image') }}/" + id, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    this.parentElement.style.transition = "opacity 0.4s";
                    this.parentElement.style.opacity = 0;
                    setTimeout(() => this.parentElement.remove(), 400);
                } else {
                    alert('حدث خطأ أثناء الحذف: ' + (data.message ?? ''));
                }
            })
            .catch(() => alert('تعذر الاتصال بالسيرفر'));
        }
    });
});
</script>


@endsection --}
@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .box-wrapper {
        background: #f3f6f8;
        border-radius: 12px;
        padding: 25px;
        border: 1px solid #e7ecef;
        transition: .3s;
    }
    .box-wrapper:hover { box-shadow: 0 0 25px rgba(0,0,0,.08); }

    .page-title { font-size: 26px; font-weight: bold; color: #1c5530; margin-bottom: 20px; }

    .form-label { font-weight: bold; color: #34495E; }

    .form-control { border-radius: 8px !important; }

    .input-icon { position: absolute; right: 10px; top: 38px; color: #aaa; }

    .preview img, .old-img {
        width: 140px;
        height: 140px;
        border-radius: 10px;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 0 10px rgba(0,0,0,.08);
        margin: 5px;
        transition: .3s;
    }
    .preview img:hover, .old-img:hover {
        transform: scale(1.08) rotate(3deg);
    }

    .btn-save {
        font-size: 16px;
        padding: 10px 30px;
        border-radius: 30px;
        background: #27ae60;
        color: #fff;
        transition: .3s;
    }
    .btn-save:hover { background: #1c8b4f; }

    /* Feature box */
    .feature-box {
        background: #fff;
        border: 1px solid #dce3e7;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
</style>

<div class="content-wrapper">

<section class="content-header">
    <h2 class="page-title">
        <i class="fa fa-edit"></i> تعديل بيانات الخدمة
    </h2>
</section>

<section class="content">
    <div class="box-wrapper">

        @include('partials._errors')

        @if (session('success'))
            <div class="alert alert-success"><i class="fa fa-check"></i> {{ session('success') }}</div>
        @endif

        <!-- 🧩 نموذج تعديل الخدمة -->
        <form action="{{ route('dashboard.Pag_services.update', $Pag_service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">

                <!-- الاسم -->
                <div class="col-md-6 mb-3 position-relative">
                    <label class="form-label">اسم الخدمة</label>
                    <i class="fa fa-leaf input-icon"></i>
                    <input class="form-control" name="title" value="{{ old('title', $Pag_service->title) }}">
                </div>

                <!-- الأيقونة -->
                <div class="col-md-6 mb-3 position-relative">
                    <label class="form-label">أيقونة FontAwesome</label>
                    <i class="fa fa-icons input-icon"></i>
                    <input class="form-control" name="icon" value="{{ old('icon', $Pag_service->icon) }}">
                    <small class="text-muted">مثال: fa-solid fa-leaf</small>
                </div>

                <!-- الترتيب -->
                <div class="col-md-4 mb-3 position-relative">
                    <label class="form-label">ترتيب الظهور</label>
                    <i class="fa fa-sort input-icon"></i>
                    <input name="sort_order" class="form-control" value="{{ old('sort_order', $Pag_service->sort_order) }}">
                </div>

                <!-- الصور الجديدة -->
                <div class="col-md-8 mb-3">
                    <label class="form-label"><i class="fa fa-images"></i> صور جديدة للخدمة</label>
                    <input type="file" name="images[]" class="form-control" multiple accept="image/*" onchange="previewMultiple(event)">
                    <div id="multiPreview" class="preview d-flex flex-wrap mt-3"></div>
                </div>

                <!-- الوصف -->
                <div class="col-md-12 mb-4 position-relative">
                    <label class="form-label">الوصف</label>
                    <i class="fa fa-align-right input-icon"></i>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $Pag_service->description) }}</textarea>
                </div>

            </div>

            <button class="btn-save"><i class="fa fa-save"></i> تحديث الخدمة</button>
        </form>

        <hr class="my-4">

        <!-- 📸 الصور القديمة -->
        <h4 class="fw-bold text-primary mb-3"><i class="fa fa-image"></i> الصور الحالية:</h4>
        <div class="d-flex flex-wrap" id="oldImages">
            @if ($Pag_service->images && $Pag_service->images->count() > 0)
                @foreach ($Pag_service->images as $img)
                    <div class="position-relative m-2" style="display:inline-block;">
                        <img src="{{ asset($img->image) }}" class="old-img">
                        <button type="button" class="delete-btn" data-id="{{ $img->id }}"
                            style="
                                position:absolute;
                                top:5px;right:5px;
                                width:26px;height:26px;
                                background:#e74c3c;
                                border:none;color:#fff;
                                border-radius:50%;
                                display:flex;align-items:center;justify-content:center;
                                cursor:pointer;
                                box-shadow:0 0 6px rgba(0,0,0,0.2);
                            ">
                            <i class="fa fa-times" style="font-size:14px;"></i>
                        </button>
                    </div>
                @endforeach
            @else
                <span class="text-muted">لا توجد صور حالية</span>
            @endif
        </div>

        <!-- 🌿 قسم المميزات -->
        <hr class="my-5">
        <h4 class="fw-bold text-success mb-3"><i class="fa fa-star"></i> مميزات الخدمة</h4>

        @if($Pag_service->features && $Pag_service->features->count())
            <div class="row">
                @foreach($Pag_service->features as $feature)
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="d-flex align-items-center mb-2">
                                <i class="{{ $feature->icon ?? 'fa-solid fa-circle-check' }} fs-4 text-success me-2"></i>
                                <h5 class="mb-0">{{ $feature->title }}</h5>
                            </div>
                            <p class="text-muted mb-2">{{ $feature->description }}</p>
                            <form action="{{ route('dashboard.Pag_services.features.delete', $feature->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i> حذف</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-muted">لا توجد مميزات مضافة بعد.</p>
        @endif

        <!-- إضافة ميزة جديدة -->
        <div class="card mt-4 shadow-sm">
            <div class="card-body">
                <h5 class="mb-3">➕ إضافة ميزة جديدة</h5>
                <form action="{{ route('dashboard.Pag_services.features.store', $Pag_service->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <input type="text" name="title" class="form-control" placeholder="عنوان الميزة" required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <input type="text" name="icon" class="form-control" placeholder="fa-solid fa-leaf">
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="text" name="description" class="form-control" placeholder="وصف الميزة">
                        </div>
                        <div class="col-md-2 mb-2 text-center">
                            <button class="btn btn-success w-100"><i class="fa fa-plus"></i> إضافة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
</div>

<script>
/* معاينة الصور الجديدة */
function previewMultiple(event) {
    let preview = document.getElementById('multiPreview');
    preview.innerHTML = '';
    Array.from(event.target.files).forEach(file => {
        let reader = new FileReader();
        reader.onload = function(e) {
            let img = document.createElement('img');
            img.src = e.target.result;
            preview.appendChild(img);
        }
        reader.readAsDataURL(file);
    });
}

/* حذف الصور القديمة Ajax */
document.querySelectorAll('.delete-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        if(confirm('هل أنت متأكد من حذف هذه الصورة؟')) {
            fetch("{{ url('dashboard/Pag_services/image') }}/" + id, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                }
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    this.parentElement.style.transition = "opacity 0.4s";
                    this.parentElement.style.opacity = 0;
                    setTimeout(() => this.parentElement.remove(), 400);
                } else {
                    alert('حدث خطأ أثناء الحذف: ' + (data.message ?? ''));
                }
            })
            .catch(() => alert('تعذر الاتصال بالسيرفر'));
        }
    });
});
</script>

@endsection --}}
{{-- @extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .box-wrapper {
        background: #f3f6f8;
        border-radius: 12px;
        padding: 25px;
        border: 1px solid #e7ecef;
        transition: .3s;
    }
    .box-wrapper:hover { box-shadow: 0 0 25px rgba(0,0,0,.08); }

    .page-title { font-size: 26px; font-weight: bold; color: #1c5530; margin-bottom: 20px; }

    .form-label { font-weight: bold; color: #34495E; }

    .form-control { border-radius: 8px !important; }

    .input-icon { position: absolute; right: 10px; top: 38px; color: #aaa; }

    .preview img, .old-img {
        width: 140px;
        height: 140px;
        border-radius: 10px;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 0 10px rgba(0,0,0,.08);
        margin: 5px;
        transition: .3s;
    }
    .preview img:hover, .old-img:hover {
        transform: scale(1.08) rotate(3deg);
    }

    .btn-save {
        font-size: 16px;
        padding: 10px 30px;
        border-radius: 30px;
        background: #27ae60;
        color: #fff;
        transition: .3s;
    }
    .btn-save:hover { background: #1c8b4f; }

    .feature-box {
        background: #fff;
        border: 1px solid #dce3e7;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        position: relative;
        transition: .3s;
    }
    .feature-box:hover { transform: translateY(-3px); }

    .feature-delete {
        position:absolute;
        top:8px;
        right:8px;
        background:#e74c3c;
        color:#fff;
        border:none;
        border-radius:50%;
        width:26px;
        height:26px;
        display:flex;
        align-items:center;
        justify-content:center;
        cursor:pointer;
    }
    .feature-delete i { font-size:13px; }
</style>

<div class="content-wrapper">
<section class="content-header">
    <h2 class="page-title">
        <i class="fa fa-edit"></i> تعديل بيانات الخدمة
    </h2>
</section>

<section class="content">
    <div class="box-wrapper">

        @include('partials._errors')

        @if (session('success'))
            <div class="alert alert-success"><i class="fa fa-check"></i> {{ session('success') }}</div>
        @endif

        <!-- 🧩 نموذج تعديل الخدمة -->
        <form action="{{ route('dashboard.Pag_services.update', $Pag_service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">

                <!-- الاسم -->
                <div class="col-md-6 mb-3 position-relative">
                    <label class="form-label">اسم الخدمة</label>
                    <i class="fa fa-leaf input-icon"></i>
                    <input class="form-control" name="title" value="{{ old('title', $Pag_service->title) }}">
                </div>

                <!-- الأيقونة -->
                <div class="col-md-6 mb-3 position-relative">
                    <label class="form-label">أيقونة FontAwesome</label>
                    <i class="fa fa-icons input-icon"></i>
                    <input class="form-control" name="icon" value="{{ old('icon', $Pag_service->icon) }}">
                    <small class="text-muted">مثال: fa-solid fa-leaf</small>
                </div>

                <!-- الترتيب -->
                <div class="col-md-4 mb-3 position-relative">
                    <label class="form-label">ترتيب الظهور</label>
                    <i class="fa fa-sort input-icon"></i>
                    <input name="sort_order" class="form-control" value="{{ old('sort_order', $Pag_service->sort_order) }}">
                </div>

                <!-- الصور الجديدة -->
                <div class="col-md-8 mb-3">
                    <label class="form-label"><i class="fa fa-images"></i> صور جديدة للخدمة</label>
                    <input type="file" name="images[]" class="form-control" multiple accept="image/*" onchange="previewMultiple(event)">
                    <div id="multiPreview" class="preview d-flex flex-wrap mt-3"></div>
                </div>

                <!-- الوصف -->
                <div class="col-md-12 mb-4 position-relative">
                    <label class="form-label">الوصف</label>
                    <i class="fa fa-align-right input-icon"></i>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $Pag_service->description) }}</textarea>
                </div>
            </div>

            <button class="btn-save"><i class="fa fa-save"></i> تحديث الخدمة</button>
        </form>

        <hr class="my-4">

        <!-- 📸 الصور القديمة -->
        <h4 class="fw-bold text-primary mb-3"><i class="fa fa-image"></i> الصور الحالية:</h4>
        <div class="row">
        <div class="d-flex flex-wrap position-relative" id="oldImages">
            @foreach($Pag_service->images as $img)
                <div class="position-relative m-2">
                    <img src="{{ asset($img->image) }}" class="old-img">
                    <button type="button" class="delete-btn" data-id="{{ $img->id }}">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            @endforeach
            @if($Pag_service->images->count() == 0)
                <span class="text-muted">لا توجد صور حالية</span>
            @endif
        </div>
</div>
        <!-- 🌿 قسم المميزات -->
        <hr class="my-5">
        <h4 class="fw-bold text-success mb-3"><i class="fa fa-star"></i> مميزات الخدمة</h4>

        <div id="featuresContainer" class="row">
            @foreach($Pag_service->features as $feature)
                <div class="col-md-4 feature-box" id="feature-{{ $feature->id }}">
                    <button class="feature-delete" data-id="{{ $feature->id }}"><i class="fa fa-trash"></i></button>
                    <div class="d-flex align-items-center mb-2">
                        <i class="{{ $feature->icon ?? 'fa-solid fa-circle-check' }} fs-4 text-success me-2"></i>
                        <h5 class="mb-0">{{ $feature->title }}</h5>
                    </div>
                    <p class="text-muted mb-0">{{ $feature->description }}</p>
                </div>
            @endforeach

            @if($Pag_service->features->count() == 0)
                <p class="text-muted">لا توجد مميزات مضافة بعد.</p>
            @endif
        </div>

        <!-- إضافة ميزة جديدة -->
        <div class="card mt-4 shadow-sm">
            <div class="card-body">
                <h5 class="mb-3">➕ إضافة ميزة جديدة</h5>
                <form id="featureForm">
                    @csrf
                    <input type="hidden" id="service_id" value="{{ $Pag_service->id }}">
                    <div class="row">
                        <div class="col-md-3 mb-2">
                            <input type="text" id="f_title" class="form-control" placeholder="عنوان الميزة" required>
                        </div>
                        <div class="col-md-3 mb-2">
                            <input type="text" id="f_icon" class="form-control" placeholder="fa-solid fa-leaf">
                        </div>
                        <div class="col-md-4 mb-2">
                            <input type="text" id="f_description" class="form-control" placeholder="وصف الميزة">
                        </div>
                        <div class="col-md-2 mb-2 text-center">
                            <button type="submit" class="btn btn-success w-100"><i class="fa fa-plus"></i> إضافة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
</div>

<script>
/* معاينة الصور الجديدة */
function previewMultiple(event) {
    let preview = document.getElementById('multiPreview');
    preview.innerHTML = '';
    Array.from(event.target.files).forEach(file => {
        let reader = new FileReader();
        reader.onload = function(e) {
            let img = document.createElement('img');
            img.src = e.target.result;
            preview.appendChild(img);
        }
        reader.readAsDataURL(file);
    });
}

/* حذف الصور القديمة */
document.querySelectorAll('.delete-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const id = this.dataset.id;
        if(confirm('هل أنت متأكد من حذف هذه الصورة؟')) {
            fetch(`{{ url('dashboard/Pag_services/image') }}/${id}`, {
                method: 'DELETE',
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}','Accept': 'application/json'}
            })
            .then(r => r.json())
            .then(d => {
                if(d.success) this.parentElement.remove();
                else alert('حدث خطأ أثناء الحذف');
            });
        }
    });
});

/* إضافة ميزة جديدة Ajax */
document.getElementById('featureForm').addEventListener('submit', function(e){
    e.preventDefault();
    const id = document.getElementById('service_id').value;
    const title = document.getElementById('f_title').value;
    const icon = document.getElementById('f_icon').value;
    const description = document.getElementById('f_description').value;

    fetch(`{{ url('dashboard/Pag_services') }}/${id}/features`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({title, icon, description})
    })
    .then(r => r.json())
    .then(data => {
        if(data.success){
            const box = `
            <div class="col-md-4 feature-box" id="feature-${data.feature.id}">
                <button class="feature-delete" data-id="${data.feature.id}"><i class="fa fa-trash"></i></button>
                <div class="d-flex align-items-center mb-2">
                    <i class="${data.feature.icon ?? 'fa-solid fa-circle-check'} fs-4 text-success me-2"></i>
                    <h5 class="mb-0">${data.feature.title}</h5>
                </div>
                <p class="text-muted mb-0">${data.feature.description ?? ''}</p>
            </div>`;
            document.getElementById('featuresContainer').insertAdjacentHTML('beforeend', box);
            this.reset();
        } else {
            alert('حدث خطأ أثناء الإضافة');
        }
    });
});

/* حذف الميزة Ajax */
document.addEventListener('click', function(e){
    if(e.target.closest('.feature-delete')){
        const btn = e.target.closest('.feature-delete');
        const id = btn.dataset.id;
        if(confirm('هل أنت متأكد من حذف هذه الميزة؟')){
            fetch(`{{ url('dashboard/Pag_services/features') }}/${id}`, {
                method: 'DELETE',
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}','Accept': 'application/json'}
            })
            .then(r => r.json())
            .then(data => {
                if(data.success) document.getElementById('feature-'+id).remove();
            });
        }
    }
});
</script>

@endsection
 --}}
@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .box-wrapper {
        background: #f3f6f8;
        border-radius: 12px;
        padding: 25px;
        border: 1px solid #e7ecef;
        transition: .3s;
    }
    .box-wrapper:hover { box-shadow: 0 0 25px rgba(0,0,0,.08); }

    .page-title { font-size: 26px; font-weight: bold; color: #1c5530; margin-bottom: 20px; }

    .form-label { font-weight: bold; color: #34495E; }
    .form-control { border-radius: 8px !important; }

    .input-icon { position: absolute; right: 10px; top: 38px; color: #aaa; }

    /* الصور */
    .old-img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,.08);
        margin: 6px;
        transition: .3s;
    }
    .old-img:hover { transform: scale(1.07); }

    .delete-btn {
        /* position: absolute; */
        top: 5px; right: 5px;
        width: 26px; height: 26px;
        border-radius: 50%;
        background: #e74c3c; color:#fff;
        border:none; display:flex; justify-content:center; align-items:center;
        cursor:pointer; box-shadow:0 0 5px rgba(0,0,0,0.2);
    }
    .delete-btn i { font-size: 14px; }

    /* Grid الصور */
    .image-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        gap: 10px;
    }

    /* مميزات الخدمة */
    .feature-box {
        background: #fff;
        border: 1px solid #dce3e7;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        transition: .3s;
        position: relative;
    }
    .feature-box:hover { transform: translateY(-3px); }

    .feature-delete {
        position:absolute;
        top:8px; right:8px;
        background:#e74c3c; color:#fff;
        border:none; border-radius:50%;
        width:26px; height:26px;
        display:flex; align-items:center; justify-content:center;
        cursor:pointer;
    }

    .feature-input { width:100%; margin-bottom:8px; }
</style>

<div class="content-wrapper">
<section class="content-header">
    <h2 class="page-title">
        <i class="fa fa-edit"></i> تعديل بيانات الخدمة
    </h2>
</section>

<section class="content">
    <div class="box-wrapper">

        @include('partials._errors')
        @if (session('success'))
            <div class="alert alert-success"><i class="fa fa-check"></i> {{ session('success') }}</div>
        @endif

        <!-- 🧩 نموذج تعديل الخدمة -->
        <form action="{{ route('dashboard.Pag_services.update', $Pag_service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6 mb-3 position-relative">
                    <label class="form-label">اسم الخدمة</label>
                    <i class="fa fa-leaf input-icon"></i>
                    <input class="form-control" name="title" value="{{ old('title', $Pag_service->title) }}">
                </div>

                <div class="col-md-6 mb-3 position-relative">
                    <label class="form-label">أيقونة FontAwesome</label>
                    <i class="fa fa-icons input-icon"></i>
                    <input class="form-control" name="icon" value="{{ old('icon', $Pag_service->icon) }}">
                </div>

                <div class="col-md-4 mb-3 position-relative">
                    <label class="form-label">ترتيب الظهور</label>
                    <i class="fa fa-sort input-icon"></i>
                    <input name="sort_order" class="form-control" value="{{ old('sort_order', $Pag_service->sort_order) }}">
                </div>

                <div class="col-md-8 mb-3">
                    <label class="form-label"><i class="fa fa-images"></i> صور جديدة للخدمة</label>
                    <input type="file" name="images[]" class="form-control" multiple accept="image/*" onchange="previewMultiple(event)">
                    <div id="multiPreview" class="d-flex flex-wrap mt-3"></div>
                </div>

                <div class="col-md-12 mb-4 position-relative">
                    <label class="form-label">الوصف</label>
                    <i class="fa fa-align-right input-icon"></i>
                    <textarea name="description" class="form-control" rows="4">{{ old('description', $Pag_service->description) }}</textarea>
                </div>
            </div>

            <button class="btn-save"><i class="fa fa-save"></i> تحديث الخدمة</button>
        </form>

        <hr class="my-4">

        <!-- 📸 الصور الحالية -->
        <h4 class="fw-bold text-primary mb-3"><i class="fa fa-image"></i> الصور الحالية:</h4>
        <div class="image-grid" id="oldImages">
            @forelse($Pag_service->images as $img)
                <div class="position-relative">
                    <img src="{{ asset($img->image) }}" class="old-img">
                    <button type="button" class="delete-btn" data-id="{{ $img->id }}"><i class="fa fa-times"></i></button>
                </div>
            @empty
                <span class="text-muted">لا توجد صور حالية</span>
            @endforelse
        </div>

        <hr class="my-5">
        <h4 class="fw-bold text-success mb-3"><i class="fa fa-star"></i> مميزات الخدمة</h4>

        <!-- 🔹 عرض المميزات مع إمكانية تعديلها -->
        <div id="featuresContainer" class="row">
            @forelse($Pag_service->features as $feature)
                <div class="col-md-4 feature-box" id="feature-{{ $feature->id }}">
                    <button class="feature-delete" data-id="{{ $feature->id }}"><i class="fa fa-trash"></i></button>
                    <input type="text" class="form-control feature-input f-title" value="{{ $feature->title }}">
                    <input type="text" class="form-control feature-input f-icon" value="{{ $feature->icon }}">
                    <input type="text" class="form-control feature-input f-desc" value="{{ $feature->description }}">
                    <button class="btn btn-sm btn-outline-primary w-100 save-feature" data-id="{{ $feature->id }}">
                        <i class="fa fa-save"></i> حفظ التعديل
                    </button>
                </div>
            @empty
                <p class="text-muted">لا توجد مميزات مضافة بعد.</p>
            @endforelse
        </div>

        <!-- ➕ إضافة ميزة جديدة -->
        <div class="card mt-4 shadow-sm">
            <div class="card-body">
                <h5 class="mb-3">➕ إضافة ميزة جديدة</h5>
                <div id="newFeatures"></div>
                <button id="addNewFeature" class="btn btn-outline-success mb-3"><i class="fa fa-plus"></i> إضافة حقل ميزة جديد</button>
                <button id="saveAllFeatures" class="btn btn-success"><i class="fa fa-save"></i> حفظ كل المميزات الجديدة</button>
            </div>
        </div>

    </div>
</section>
</div>

<script>
/* 🖼️ معاينة الصور الجديدة */
function previewMultiple(event) {
    const preview = document.getElementById('multiPreview');
    preview.innerHTML = '';
    Array.from(event.target.files).forEach(file => {
        const reader = new FileReader();
        reader.onload = e => {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.classList.add('old-img');
            preview.appendChild(img);
        }
        reader.readAsDataURL(file);
    });
}

/* 🗑️ حذف الصور القديمة */
document.addEventListener('click', e => {
    if(e.target.closest('.delete-btn')){
        const id = e.target.closest('.delete-btn').dataset.id;
        if(confirm('هل أنت متأكد من حذف هذه الصورة؟')){
            fetch(`{{ url('dashboard/Pag_services/image') }}/${id}`, {
                method: 'DELETE',
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}','Accept': 'application/json'}
            }).then(r=>r.json()).then(d=>{
                if(d.success) e.target.closest('.position-relative').remove();
                else alert('حدث خطأ أثناء الحذف');
            });
        }
    }
});

/* ✏️ تعديل الميزة */
document.addEventListener('click', e => {
    if(e.target.closest('.save-feature')){
        const box = e.target.closest('.feature-box');
        const id = box.querySelector('.save-feature').dataset.id;
        const title = box.querySelector('.f-title').value;
        const icon = box.querySelector('.f-icon').value;
        const description = box.querySelector('.f-desc').value;

        fetch(`{{ url('dashboard/Pag_services/features') }}/${id}`, {
            method: 'PUT',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}','Accept': 'application/json','Content-Type': 'application/json'},
            body: JSON.stringify({title, icon, description})
        }).then(r=>r.json()).then(d=>{
            if(d.success) alert('✅ تم حفظ التعديل بنجاح');
        });
    }
});

/* 🗑️ حذف ميزة */
document.addEventListener('click', e => {
    if(e.target.closest('.feature-delete')){
        const btn = e.target.closest('.feature-delete');
        const id = btn.dataset.id;
        if(confirm('هل أنت متأكد من حذف هذه الميزة؟')){
            fetch(`{{ url('dashboard/Pag_services/features') }}/${id}`, {
                method: 'DELETE',
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}','Accept': 'application/json'}
            }).then(r=>r.json()).then(d=>{
                if(d.success) document.getElementById('feature-'+id).remove();
            });
        }
    }
});

/* ➕ إضافة ميزة جديدة */
document.getElementById('addNewFeature').addEventListener('click', () => {
    const container = document.getElementById('newFeatures');
    const i = Date.now();
    const row = `
        <div class="feature-box" id="temp-${i}">
            <input type="text" class="form-control feature-input n-title" placeholder="عنوان الميزة">
            <input type="text" class="form-control feature-input n-icon" placeholder="fa-solid fa-leaf">
            <input type="text" class="form-control feature-input n-desc" placeholder="وصف الميزة">
        </div>`;
    container.insertAdjacentHTML('beforeend', row);
});

/* 💾 حفظ المميزات الجديدة */
document.getElementById('saveAllFeatures').addEventListener('click', () => {
    const newBoxes = document.querySelectorAll('#newFeatures .feature-box');
    const id = {{ $Pag_service->id }};
    newBoxes.forEach(box => {
        const title = box.querySelector('.n-title').value;
        const icon = box.querySelector('.n-icon').value;
        const description = box.querySelector('.n-desc').value;
        fetch(`{{ url('dashboard/Pag_services') }}/${id}/features`, {
            method: 'POST',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}','Accept': 'application/json','Content-Type': 'application/json'},
            body: JSON.stringify({title, icon, description})
        }).then(r=>r.json()).then(d=>{
            if(d.success){
                box.remove();
                alert('✅ تم حفظ الميزة بنجاح');
            }
        });
    });
});
</script>

@endsection
