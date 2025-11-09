@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>خدمات بونا</h1>
    </section>

    <section class="content">
        <div class="box box-primary p-3">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="m-0"><i class="fa fa-soap text-primary me-1"></i> قائمة الخدمات</h4>
                <a href="{{ route('dashboard.bona.services.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus-circle"></i> إضافة خدمة جديدة
                </a>
            </div>

            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>المعاينة</th>
                        <th>العنوان</th>
                        <th>الوصف</th>
                        <th>الترتيب</th>
                        <th>الإجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($services as $service)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                @php
                                    $ext = strtolower(pathinfo($service->image, PATHINFO_EXTENSION));
                                    $isVideo = in_array($ext, ['mp4', 'webm', 'mov']);
                                @endphp
                                @if($isVideo)
                                    <video width="90" height="60" muted loop playsinline>
                                        <source src="{{ asset($service->image) }}" type="video/{{ $ext }}">
                                    </video>
                                @elseif($service->image)
                                    <img src="{{ asset($service->image) }}" width="90" height="60" class="rounded border object-fit-cover">
                                @else
                                    <span class="text-muted">لا يوجد</span>
                                @endif
                            </td>
                            <td class="fw-semibold">{{ $service->title }}</td>
                            <td class="text-muted text-start small">{{ Str::limit(strip_tags($service->description), 80, '...') }}</td>
                            <td><span class="badge bg-light text-dark">{{ $service->sort_order }}</span></td>
                            <td>
                                <a href="{{ route('dashboard.bona.services.edit', $service) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>
                                <form action="{{ route('dashboard.bona.services.delete', $service) }}" method="POST" style="display:inline-block" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> حذف
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">لا توجد خدمات مضافة بعد.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3">
                {{-- {{ $services->links() }} --}}
            </div>
        </div>
    </section>

</div>
@endsection
