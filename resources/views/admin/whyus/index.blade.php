@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>إعدادات لماذا نحن؟</h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-header"><h3 class="box-title">تحديث البيانات</h3></div>
            <div class="box-body">

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="{{ route('dashboard.whyus.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- العنوان -->
                    <div class="form-group mb-3">
                        <label>عنوان القسم</label>
                        <input type="text" name="title" class="form-control"
                               value="{{ old('title', $whyus->title) }}">
                    </div>

                    <!-- الوصف -->
                    <div class="form-group mb-3">
                        <label>الوصف</label>
                        <textarea name="description" class="form-control" rows="3">{{ old('description', $whyus->description) }}</textarea>
                    </div>

                    <hr>

                    <!-- الصورة 1 -->
                    <div class="form-group mb-3">
                        <label>الصورة 1</label>
                        <input type="file" name="image1" class="form-control">
                        @if($whyus->image1)
                            <img src="{{ asset($whyus->image1) }}" width="150" class="mt-2 img-thumbnail">
                        @endif
                    </div>

                    <!-- الصورة 2 -->
                    <div class="form-group mb-3">
                        <label>الصورة 2</label>
                        <input type="file" name="image2" class="form-control">
                        @if($whyus->image2)
                            <img src="{{ asset($whyus->image2) }}" width="150" class="mt-2 img-thumbnail">
                        @endif
                    </div>

                    <!-- الصورة 3 -->
                    <div class="form-group mb-3">
                        <label>الصورة 3</label>
                        <input type="file" name="image3" class="form-control">
                        @if($whyus->image3)
                            <img src="{{ asset($whyus->image3) }}" width="150" class="mt-2 img-thumbnail">
                        @endif
                    </div>

                    <!-- الصورة 4 -->
                    <div class="form-group mb-3">
                        <label>الصورة 4</label>
                        <input type="file" name="image4" class="form-control">
                        @if($whyus->image4)
                            <img src="{{ asset($whyus->image4) }}" width="150" class="mt-2 img-thumbnail">
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">💾 حفظ التحديثات</button>

                </form>
            </div>
        </div>
    </section>
</div>
@endsection
