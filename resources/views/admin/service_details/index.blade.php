@extends('admin.layouts.dashboard.app')

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

{{-- </div> --}}

@endsection
