@extends('admin.layouts.dashboard.app')

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
                    <textarea name="description" class="form-control" rows="4">{{ $project->description }}</textarea>
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
@endsection
