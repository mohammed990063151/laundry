@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>طلبات العملاء</h1>
    </section>

    <section class="content">
        <div class="box box-primary p-3">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم الكامل</th>
                        <th>رقم الجوال</th>
                        <th>الخدمة</th>
                        <th>الدفع</th>
                        <th>المدينة</th>
                        <th>التاريخ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $order->full_name }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->service_type }}</td>
                        <td>{{ $order->payment_method }}</td>
                        <td>{{ $order->city }}</td>
                        <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $orders->links() }}
        </div>
    </section>
</div>
@endsection
