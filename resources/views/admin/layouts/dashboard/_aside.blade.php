<aside class="main-sidebar">
    <section class="sidebar">

        {{-- لوحة المستخدم --}}
        <div class="user-panel">
            <div class="pull-left image">
                {{-- أيقونة أو صورة المستخدم --}}
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> متصل</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">

    {{-- ======================= لوحة التحكم (Admin) ======================= --}}
    <li>
        <a href="{{ route('dashboard.home') }}">
            <i class="fa fa-tachometer"></i> <span> الرئيسية </span>
        </a>
    </li>
    <li>
        <a href="{{ route('dashboard.orders') }}">
            <i class="fa fa-tachometer"></i> <span> الطلبات </span>
        </a>
    </li>
    <li>
        <a href="{{ route('dashboard.bookings') }}">
            <i class="fa fa-calendar"></i> <span> طلبات الحجز </span>
        </a>
    </li>

    <li><a href="{{ route('dashboard.bona-messages.index') }}">
    <i class="fa fa-envelope"></i> <span>رسائل العملاء</span>
</a></li>

<li>
    <a href="{{ route('dashboard.newsletter.index') }}">
        <i class="fa fa-envelope-open-text"></i> <span>النشرة البريدية</span>
    </a>
</li>
 <li>
        <a href="{{ route('dashboard.settings.edit') }}">
            <i class="fa fa-cogs"></i> <span>اعدادات</span>
        </a>
    </li>


</ul>


    </section>
</aside>
