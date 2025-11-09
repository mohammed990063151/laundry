@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>تعديل بيانات الشريك</h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <form action="{{ route('dashboard.partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>اسم الشريك</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $partner->name) }}" required>
                    </div>

                    <div class="form-group">
                        <label>رابط الموقع</label>
                        <input type="url" name="link" class="form-control" value="{{ old('link', $partner->link) }}" placeholder="https://example.com">
                    </div>

                    <div class="form-group">
                        <label>شعار الشريك الحالي</label><br>
                        @if($partner->logo)
                            <img src="{{ asset($partner->logo) }}" alt="{{ $partner->name }}" width="120" style="border-radius:10px; margin-bottom:10px; border:1px solid #ddd;">
                        @else
                            <p class="text-muted">لا يوجد شعار مرفوع</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>تحديث الشعار</label>
                        <input type="file" name="logo" class="form-control">
                        <small class="text-muted">يُفضل رفع صورة بصيغة JPG أو PNG (حجم أقل من 2MB)</small>
                    </div>

                    <button class="btn btn-primary">تحديث</button>
                    <a href="{{ route('dashboard.partners.index') }}" class="btn btn-default">رجوع</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
