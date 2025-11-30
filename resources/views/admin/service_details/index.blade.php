{{-- @extends('admin.layouts.dashboard.app')

@section('title', 'تفاصيل الخدمات')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>طلبات العملاء</h1>
    </section>

    <section class="content">
        <div class="box box-primary p-3">
            <table class="table table-bordered table-striped align-middle">
                <thead>
                    <tr>
                        <th>الخدمة</th>
                        <th>العنوان الفرعي</th>
                        <th>الترتيب</th>
                        <th>تاريخ التحديث</th>
                        <th>تحكم</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($details as $detail)
                    <tr>
                        <td>{{ $detail->service->title }}</td>
                        <td>{{ $detail->title }}</td>
                        <td>{{ $detail->sort_order }}</td>
                        <td>{{ $detail->updated_at->format('Y-m-d') }}</td>

                        <td>
                            <a href="{{ route('dashboard.service.details.edit', [$detail->service->id, $detail->id]) }}"
                               class="btn btn-primary btn-sm">
                                تعديل
                            </a>

                            <form action="{{ route('dashboard.service.details.delete', [$detail->service->id, $detail->id]) }}"
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button onclick="return confirm('متأكد من الحذف؟');"
                                        class="btn btn-danger btn-sm">
                                    حذف
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>
    </div>

{{-- </div> --}

@endsection --}}
@extends('admin.layouts.dashboard.app')
@section('title', ' الصفحة  الخدمات العميل  لوحة  التحكم - بونا ')
@section('content')
<div class="content-wrapper">

      <section class="content-header">
        <h2 class="fw-bold mb-3" style="font-family:'Cairo', sans-serif;">
            <i class="fa fa-list text-primary"></i> تفاصيل الخدمات
        </h2>
        <p class="text-muted">إدارة التفاصيل الخاصة بكل خدمة في الموقع.</p>
    </section>

    <section class="content">
        <div class="box box-primary p-3">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="m-0"><i class="fa fa-soap text-primary me-1"></i> قائمة الخدمات</h4>
                {{-- <a href="{{ route('dashboard.bona.services.create') }}" class="btn btn-primary">
                    <i class="fa fa-plus-circle"></i> إضافة خدمة جديدة
                </a> --}}
            </div>

            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>الخدمة</th>
                        <th>العنوان الفرعي</th>
                        <th>الترتيب</th>
                        <th>تاريخ التحديث</th>
                        <th>تحكم</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($details as $detail)
                    <tr>
                        <td>{{ $detail->service->title }}</td>
                        <td>{{ $detail->title }}</td>
                        <td>{{ $detail->sort_order }}</td>
                        <td>{{ $detail->updated_at->format('Y-m-d') }}</td>

                    <td style="display:flex; gap:8px; align-items:center;">

    <a href="{{ route('dashboard.service.details.edit', [$detail->service->id, $detail->id]) }}"
       class="btn btn-primary btn-sm">
        تعديل
    </a>

    <!-- زر الحذف -->
    <button type="button"
            class="btn btn-danger btn-sm"
            onclick="confirmDelete({{ $detail->id }})">
        حذف
    </button>

    <!-- فورم الحذف (مخفي) -->
    <form id="delete-form-{{ $detail->id }}"
          action="{{ route('dashboard.service.details.delete', [$detail->service->id, $detail->id]) }}"
          method="POST" style="display:none;">
        @csrf
        @method('DELETE')
    </form>

</td>

                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                {{-- {{ $services->links() }} --}}
            </div>
        </div>
    </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'هل أنت متأكد؟',
        text: "لن تتمكن من التراجع بعد الحذف!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'نعم، احذف',
        cancelButtonText: 'إلغاء',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById('delete-form-' + id);
            if (form) {
                form.submit();
            } else {
                console.error('لم يتم العثور على الفورم: delete-form-' + id);
            }
        }
    });
}
</script>


@endsection

