@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>معرض شركة مضياف</h1>
    </section>

    <section class="content">

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- تحديث العنوان والوصف -->
        <div class="box box-primary">
            <div class="box-header"><h3 class="box-title">إعدادات عامة</h3></div>
            <div class="box-body">
                <form action="{{ route('dashboard.gallery.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <label>عنوان القسم</label>

                    <input type="text" name="title" class="form-control" value="{{ $settingGallery->title ?? '' }}">

                    <label class="mt-3">الوصف</label>
                    <textarea name="description" rows="3" class="form-control">{{ $settingGallery->description ?? '' }}</textarea>

                    <button class="btn btn-success mt-3">حفظ</button>
                </form>
            </div>
        </div>

        <!-- إضافة صورة -->
        <div class="box box-primary mt-4">
            <div class="box-header"><h3 class="box-title">إضافة صورة</h3></div>
            <div class="box-body">
                <form action="{{ route('dashboard.gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <label>صورة</label>
                    <input type="file" name="image" class="form-control">

                    <label class="mt-2">عنوان الصورة</label>
                    <input type="text" name="caption" class="form-control">

                    <button class="btn btn-primary mt-3">إضافة</button>
                </form>
            </div>
        </div>

        <!-- عرض الصور -->
        <div class="row">
            @foreach($items as $img)
            <div class="col-md-3 text-center mb-4">
    <img src="{{ asset($img->image) }}" width="100%" height="180"
         style="object-fit:cover;" class="rounded shadow">

    <!-- نموذج تعديل الصورة والعنوان -->
    <form action="{{ route('dashboard.gallery.editItem', $img->id) }}"
          method="POST" enctype="multipart/form-data" class="mt-2">
        @csrf
        @method('PUT')

        <input type="text" name="caption" value="{{ $img->caption }}"
               class="form-control form-control-sm text-center mb-2">

        <input type="file" name="image" class="form-control form-control-sm mb-2">

        <button class="btn btn-success btn-sm w-100">💾 حفظ التعديل</button>
    </form>

    <!-- نموذج الحذف -->
    <form action="{{ route('dashboard.gallery.destroy', $img->id) }}" method="POST" class="mt-2">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm w-100">🗑️ حذف</button>
    </form>
</div>

             {{--    <div class="col-md-3 text-center mb-4">
                    <img src="{{ asset($img->image) }}" width="100%" height="180" style="object-fit:cover;" class="rounded shadow">

                    <p class="mt-2">{{ $img->caption }}</p>

                    <form action="{{ route('dashboard.gallery.destroy', $img->id) }}" method="POST">
                        @csrf @method('delete')
                        <button class="btn btn-danger btn-sm">حذف</button>
                    </form>
                </div>--}}
            @endforeach
        </div>


    </section>

</div>
@endsection
