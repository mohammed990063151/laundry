@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .msg-view-wrapper {
        background:#f7f9fa;
        padding:25px;
        border-radius:12px;
        box-shadow:0 4px 20px rgba(0,0,0,0.08);
        transition:.3s;
        margin-bottom:25px;
    }

    .msg-view-wrapper:hover {
        box-shadow:0 6px 25px rgba(0,0,0,0.12);
    }

    .info-label {
        color:#355a3b;
        font-weight:600;
        font-size:14px;
        margin-bottom:3px;
        display:flex;
        align-items:center;
        gap:6px;
    }

    .info-box {
        background:#fff;
        padding:12px 15px;
        border-radius:10px;
        border:1px solid #eee;
        margin-bottom:15px;
        font-size:14px;
        color:#333;
    }

    .msg-content {
        background:#fff;
        border:1px solid #eee;
        border-radius:10px;
        padding:18px;
        line-height:1.9;
        font-size:15px;
        color:#444;
        box-shadow:0 2px 10px rgba(0,0,0,0.05);
    }

    .back-btn {
        margin-top:20px;
    }
</style>

<div class="content-wrapper">

    {{-- PAGE HEADER --}}
    <section class="content-header">
        <h1><i class="fa fa-envelope-open"></i> عرض الرسالة</h1>
    </section>

    <section class="content">

        <div class="msg-view-wrapper">

            {{-- Name --}}
            <div class="info-label"><i class="fa fa-user"></i> الاسم</div>
            <div class="info-box">{{ $message->name }}</div>

            {{-- Email --}}
            <div class="info-label"><i class="fa fa-envelope"></i> البريد الإلكتروني</div>
            <div class="info-box">{{ $message->email }}</div>

            {{-- Phone --}}
            <div class="info-label"><i class="fa fa-phone"></i> رقم الهاتف</div>
            <div class="info-box">{{ $message->phone ?? '-' }}</div>

            {{-- Subject --}}
            <div class="info-label"><i class="fa fa-tag"></i> الموضوع</div>
            <div class="info-box">{{ $message->subject ?? '-' }}</div>

            {{-- Message --}}
            <div class="info-label"><i class="fa fa-comment"></i> محتوى الرسالة</div>
            <div class="msg-content">
                {{ $message->message }}
            </div>

            {{-- Back Button --}}
            <a href="{{ route('dashboard.messages') }}" class="btn btn-dark btn-md back-btn">
                <i class="fa fa-arrow-right"></i> رجوع
            </a>

        </div>

    </section>

</div>
@endsection
