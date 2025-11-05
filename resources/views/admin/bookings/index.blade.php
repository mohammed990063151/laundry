@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>طلبات الحجز</h1>
    </section>

    <section class="content">
        <div class="box box-primary p-3">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم الكامل</th>
                        <th>رقم الجوال</th>
                        <th>المدينة</th>
                        <th>الخدمة</th>
                        <th>الدفع</th>
                        <th>وقت الاستلام</th>
                        <th>تاريخ الطلب</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $booking->full_name }}</td>
                        <td>{{ $booking->phone }}</td>
                        <td>{{ $booking->city }}</td>
                        <td>{{ $booking->service_type }}</td>
                        <td>{{ $booking->payment_method }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->pickup_time)->format('Y-m-d H:i') }}</td>
                        <td>{{ $booking->created_at->format('Y-m-d H:i') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $bookings->links() }}
        </div>
    </section>
</div>
@endsection
