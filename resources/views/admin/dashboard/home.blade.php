@extends('admin.layouts.dashboard.app')

@section('content')

<style>
    .small-box {
        border-radius:16px;
        color:#fff !important;
        position:relative;
        overflow:hidden;
        box-shadow:0 4px 15px rgba(0,0,0,0.08);
        transition:.3s;
    }
    .small-box:hover {
        transform: translateY(-5px);
        box-shadow:0 6px 20px rgba(0,0,0,0.15);
    }
    .small-box .inner h3 {
        font-size:2.5rem;
        font-weight:700;
    }
    .small-box .inner p {
        font-size:1.1rem;
        margin:0;
    }
    .small-box-icon {
        font-size:60px;
        position:absolute;
        right:20px;
        top:20px;
        opacity:0.15;
    }
    .box {
        border-radius:14px;
        box-shadow:0 3px 10px rgba(0,0,0,0.07);
        overflow:hidden;
    }
    .content-header h1 {
        color:#1226AA;
        font-weight:700;
        margin-bottom:25px;
    }
</style>

<div class="content-wrapper">

    <section class="content-header">
        <h1>لوحة التحكم - نظام بونا 🧺</h1>
    </section>

    <section class="content">

        {{-- 🔹 الإحصائيات --}}
        <div class="row">

            <div class="col-lg-3 col-xs-6">
                <div class="small-box" style="background:#1226AA;">
                    <div class="inner">
                        <h3>{{ $messagesCount }}</h3>
                        <p>الرسائل الواردة</p>
                    </div>
                    <i class="fa fa-envelope small-box-icon"></i>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box" style="background:#1E40E6;">
                    <div class="inner">
                        <h3>{{ $ordersCount }}</h3>
                        <p>الطلبات الجديدة</p>
                    </div>
                    <i class="fa fa-truck small-box-icon"></i>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box" style="background:#00aaff;">
                    <div class="inner">
                        <h3>{{ $branchesCount }}</h3>
                        <p>فروع بونا</p>
                    </div>
                    <i class="fa fa-map-marker-alt small-box-icon"></i>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box" style="background:#00b894;">
                    <div class="inner">
                        <h3>{{ $customersCount }}</h3>
                        <p>العملاء المسجلين</p>
                    </div>
                    <i class="fa fa-users small-box-icon"></i>
                </div>
            </div>

        </div>

        {{-- 🔹 الرسم البياني --}}
        <div class="box">
            <div class="box-header" >
                <h3 class="box-title">إحصائيات عامة 📊</h3>
            </div>
            <div class="box-body">
                <canvas id="statsChart" style="height:330px"></canvas>
            </div>
        </div>

        {{-- 🔹 آخر الطلبات أو الرسائل --}}
        <div class="box">
            <div class="box-header" style="background:#f6f7fb;">
                <h3 class="box-title" style="color:#1226AA;">آخر الرسائل الواردة 💬</h3>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-striped table-hover">
                    <thead style="background:#eaf0ff;">
                        <tr>
                            <th>الإسم</th>
                            <th>البريد الإلكتروني</th>
                            <th>نوع الاستفسار</th>
                            <th>التاريخ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lastMessages as $msg)
                            <tr>
                                <td>{{ $msg->name }}</td>
                                <td>{{ $msg->email }}</td>
                                <td>{{ $msg->subject }}</td>
                                <td>{{ $msg->created_at->format('Y-m-d') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

{{-- ✅ الرسم البياني --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('statsChart');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['الرسائل', 'الطلبات', 'الفروع', 'العملاء', 'الخدمات'],
        datasets: [{
            label: 'عدد العناصر',
            data: [
                {{ $messagesCount }},
                {{ $ordersCount }},
                {{ $branchesCount }},
                {{ $customersCount }},
                {{ $servicesCount }}
            ],
            borderWidth: 1,
            backgroundColor: ['#1226AA','#1E40E6','#00aaff','#00b894','#4dd0e1'],
        }]
    },
    options: {
        scales: { y: { beginAtZero: true } },
        plugins: { legend: { display: false } }
    }
});
</script>

@endsection
