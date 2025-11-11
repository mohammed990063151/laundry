@extends('admin.layouts.dashboard.app')
@section('title', ' الصفحة  رسائل العملاء لوحة  التحكم - بونا ')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>رسائل العملاء</h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>الجوال</th>
                            <th>البريد</th>
                            <th>نوع الاستفسار</th>
                            <th>الرسالة</th>
                            <th>التاريخ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $msg)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $msg->name }}</td>
                            <td>{{ $msg->phone }}</td>
                            <td>{{ $msg->email }}</td>
                            <td>{{ $msg->subject }}</td>
                            <td>{{ $msg->message }}</td>
                            <td>{{ $msg->created_at->format('Y-m-d') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $messages->links() }}
            </div>
        </div>
    </section>
</div>
@endsection
