@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>مشاريع بونا</h1>
    </section>

    <section class="content">
        <div class="box box-primary p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="{{ route('dashboard.bona.projects.create') }}" class="btn btn-primary">
                    ➕ إضافة مشروع جديد
                </a>

                @if(session('success'))
                    <div class="alert alert-success m-0">{{ session('success') }}</div>
                @endif
            </div>

            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th>الصورة</th>
                        <th>العنوان</th>
                        <th>الوصف</th>
                        <th>الموقع</th>
                        <th>الترتيب</th>
                        <th>الخيارات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($projects as $project)
                        <tr>
                            <td>
                                @if($project->image)
                                    <img src="{{ asset($project->image) }}" width="90" class="rounded shadow-sm">
                                @else
                                    <span class="text-muted small">لا توجد صورة</span>
                                @endif
                            </td>
                            <td class="fw-semibold">{{ $project->title }}</td>
                            <td>{{ Str::limit($project->description, 60) }}</td>
                            <td>{{ $project->location ?? '-' }}</td>
                            <td>{{ $project->sort_order }}</td>
                            <td>
                                <a href="{{ route('dashboard.bona.projects.edit', $project->id) }}" class="btn btn-warning btn-sm">✏️ تعديل</a>
                                <form action="{{ route('dashboard.bona.projects.delete', $project->id) }}" method="POST" style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button type="submit" onclick="return confirm('هل أنت متأكد من الحذف؟')" class="btn btn-danger btn-sm">🗑️ حذف</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-muted py-4">🚫 لا توجد مشاريع مضافة بعد.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="d-flex justify-content-center mt-4">
                {{ $projects->links() }}
            </div>
        </div>
    </section>
</div>
@endsection
