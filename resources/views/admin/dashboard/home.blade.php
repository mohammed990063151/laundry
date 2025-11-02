@extends('admin.layouts.dashboard.app')
<style>
.small-box-icon{
    font-size: 60px;
    position:absolute;
    right:20px;
    top:20px;
    opacity:0.2;
}
</style>

@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <h1>لوحة التحكم الرئيسية</h1>
    </section>

    <section class="content">

        {{-- ============= الإحصائيات ============= --}}
        <div class="row">

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>{{ $messagesCount }}</h3>
                        <p>الرسائل الواردة</p>
                    </div>
                    <i class="fa fa-envelope small-box-icon"></i>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $servicesCount }}</h3>
                        <p>الخدمات</p>
                    </div>
                    <i class="fa fa-tree small-box-icon"></i>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>{{ $branchesCount }}</h3>
                        <p>فروع الشركة</p>
                    </div>
                    <i class="fa fa-map small-box-icon"></i>
                </div>
            </div>

            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>{{ $testimonialsCount }}</h3>
                        <p>آراء العملاء</p>
                    </div>
                    <i class="fa fa-star small-box-icon"></i>
                </div>
            </div>

        </div>


        {{-- ============= الرسم البياني ============= --}}
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">تحليل سريع</h3>
            </div>
            <div class="box-body">
                <canvas id="statsChart" style="height:330px"></canvas>
            </div>
        </div>

        {{-- ============= آخر الرسائل ============= --}}
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">آخر الرسائل</h3>
            </div>

            <div class="box-body">
                <table class="table table-bordered">
                    <tr>
                        <th>الإسم</th>
                        <th>البريد</th>
                        <th>الموضوع</th>
                        <th>التاريخ</th>
                    </tr>
                    @foreach($lastMessages as $msg)
                        <tr>
                            <td>{{ $msg->name }}</td>
                            <td>{{ $msg->email }}</td>
                            <td>{{ $msg->subject }}</td>
                            <td>{{ $msg->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('statsChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['رسائل', 'خدمات', 'فروع', 'آراء', 'أقسام'],
            datasets: [{
                label: 'إحصائيات',
                data: [{{ $messagesCount }}, {{ $servicesCount }}, {{ $branchesCount }}, {{ $testimonialsCount }}, {{ $sectionsCount }}],
                borderWidth: 1,
                backgroundColor: ['#00c0ef','#00a65a','#f39c12','#dd4b39','#605ca8'],
            }]
        },
        options: { scales: { y: { beginAtZero: true } } }
    });
</script>
@endsection

{{-- @section('scripts') --}}



{{-- @endsection --}}
