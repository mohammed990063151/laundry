{{-- <aside class="main-sidebar">
    <section class="sidebar">

        {{-- لوحة المستخدم --}
        <div class="user-panel">
            <div class="pull-left image">
                {{-- أيقونة أو صورة المستخدم --}
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> متصل</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">

    {{-- ======================= لوحة التحكم (Admin) ======================= --}
    <li>
        <a href="{{ route('dashboard.home') }}">
            <i class="fa fa-tachometer"></i> <span> الرئيسية </span>
        </a>
    </li>
     <li>
        <a href="{{ route('dashboard.settings.edit') }}">
            <i class="fa fa-cogs"></i> <span>اعدادات</span>
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
        <a href="{{ route('dashboard.partners.index') }}">
            <i class="fa fa-cogs"></i> <span>شعارات شركاء</span>
        </a>
    </li>
      <li>
        <a href="{{ route('dashboard.bona-services-settings.index') }}">
            <i class="fa fa-cogs"></i> <span>صفحة الرئيسة</span>
        </a>
    </li>
   <li>
        <a href="{{ route('dashboard.bona.services.index') }}">
            <i class="fa fa-cogs"></i> <span>خدمات</span>
        </a>
    </li>
    <li>
        <a href="{{ route('dashboard.bona.about.edit') }}">
            <i class="fa fa-cogs"></i> <span>من نحنا</span>
        </a>
    </li>
 <li>
        <a href="{{ route('dashboard.bona.projects.index') }}">
            <i class="fa fa-cogs"></i> <span>مشاريعينا </span>
        </a>
    </li>


</ul>


    </section>
</aside> --}}
<!-- ✅ Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-R7oPWRZ4TXJr1TttjRovrkCMxyWwe1jFtO/4dIhEsL6nEoh+XW0eJFDXr7jL6C8vW2n3iGBkY7OQ96vEo4p0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<aside class="main-sidebar" style="background: #1e293b; color: #fff; min-height: 100vh;">
    <section class="sidebar">

        {{-- 🧑‍💼 لوحة المستخدم
        <div class="user-panel d-flex align-items-center py-3 px-3 border-bottom border-secondary">
            <div class="image me-2">
                <img src="{{ asset($setting->logo) }}" class="img-circle" alt="User Image" width="40">
            </div>
            <div class="info">
                <p class="mb-0 fw-bold text-white">{{ $setting->name }}</p>
                <a href="#" class="text-success small"><i class="fa fa-circle"></i> متصل</a>
            </div>
        </div>
        <br /><br /><br /> --}}

        <ul class="sidebar-menu mt-3" data-widget="tree" style="list-style:none; padding-left:0;">
            {{-- ======================= لوحة التحكم ======================= --}}
            <li class="nav-item mb-1">
                <a href="{{ route('dashboard.home') }}" class="d-flex align-items-center px-3 py-2 text-white text-decoration-none">
                   <i class="fa fa-tachometer me-2 text-primary"></i><span>الرئيسية</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="{{ route('dashboard.settings.edit') }}" class="d-flex align-items-center px-3 py-2 text-white text-decoration-none">
                   <i class="fa fa-cogs me-2 text-warning"></i><span>الإعدادات العامة</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="{{ route('dashboard.orders') }}" class="d-flex align-items-center px-3 py-2 text-white text-decoration-none">
                     <i class="fa fa-list-alt me-2 text-info"></i> <span>الطلبات</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="{{ route('dashboard.bookings') }}" class="d-flex align-items-center px-3 py-2 text-white text-decoration-none">
                    <i class="fa fa-calendar me-2 text-success"></i> <span>طلبات الحجز</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="{{ route('dashboard.bona-messages.index') }}" class="d-flex align-items-center px-3 py-2 text-white text-decoration-none">
                    <i class="fa fa-envelope me-2 text-danger"></i> <span>رسائل العملاء</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="{{ route('dashboard.newsletter.index') }}" class="d-flex align-items-center px-3 py-2 text-white text-decoration-none">
                    <i class="fa fa-paper-plane me-2 text-info"></i> <span>النشرة البريدية</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="{{ route('dashboard.partners.index') }}" class="d-flex align-items-center px-3 py-2 text-white text-decoration-none">
                     <i class="fa fa-handshake-o me-2 text-success"></i> <span>شركاؤنا</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="{{ route('dashboard.bona-services-settings.index') }}" class="d-flex align-items-center px-3 py-2 text-white text-decoration-none">
                    <i class="fa fa-home me-2 text-primary"></i> <span>صفحة الرئيسية</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="{{ route('dashboard.bona.services.index') }}" class="d-flex align-items-center px-3 py-2 text-white text-decoration-none">
                   <i class="fa fa-bath me-2 text-light"></i> <span>الخدمات</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="{{ route('dashboard.bona.about.edit') }}" class="d-flex align-items-center px-3 py-2 text-white text-decoration-none">
                    <i class="fa fa-users me-2 text-warning"></i> <span>من نحن</span>
                </a>
            </li>

            <li class="nav-item mb-1">
                <a href="{{ route('dashboard.bona.projects.index') }}" class="d-flex align-items-center px-3 py-2 text-white text-decoration-none">
                   <i class="fa fa-building me-2 text-info"></i> <span>مشاريعنا</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

