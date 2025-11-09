@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>إضافة شريك جديد</h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <form action="{{ route('dashboard.partners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label>اسم الشريك</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>رابط الموقع</label>
                        <input type="url" name="link" class="form-control" placeholder="https://example.com">
                    </div>

                    <div class="form-group">
                        <label>شعار الشريك</label>
                        <input type="file" name="logo" class="form-control">
                    </div>

                    <button class="btn btn-success">حفظ</button>
                    <a href="{{ route('dashboard.partners.index') }}" class="btn btn-default">رجوع</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
