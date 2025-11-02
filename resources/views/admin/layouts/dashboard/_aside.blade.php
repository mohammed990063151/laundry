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

        {{-- <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard.settings.edit') }}">
                    <i class="fa fa-cogs"></i> <span>اعدادات</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.sections.edit') }}">
                    <i class="fa fa-leaf"></i> <span>أقسام الحدائق والخدمات</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.about.index') }}">
                    <i class="fa fa-leaf"></i> <span>نبذه عنا</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.whyus.index') }}">
                    <i class="fa fa-leaf"></i> <span>لماذا نحنا</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.gallery.index') }}">
                    <i class="fa fa-leaf"></i> <span> معرض الصور</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.services.index') }}">
                    <i class="fa fa-leaf"></i> <span>خدماتنا</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.counters.index') }}">
                    <i class="fa fa-leaf"></i> <span> إعدادات الإحصائيات</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.company_about.index') }}">
                    <i class="fa fa-leaf"></i> <span> من نحنا</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.Pag_services.index') }}">
                    <i class="fa fa-leaf"></i> <span> خدمتنا </span>
                </a>
            </li>
            <li><a href="{{ route('dashboard.contact.settings') }}">إعدادات الصفحة</a></li>
            <li><a href="{{ route('dashboard.branches.index') }}">فروع الشركة</a></li>
            <li><a href="{{ route('dashboard.messages') }}">الرسائل الواردة</a></li>
            <li><a href="{{ route('dashboard.testimonials.index') }}">آراء عملائنا</a></li>

        </ul> --}}
        {{-- <ul class="sidebar-menu" data-widget="tree">

            {{-- ======================= لوحة التحكم (Admin) ======================= --}
            <li>
                <a href="{{ route('dashboard.home') }}">
                    <i class="fa fa-cogs"></i> <span> الرئيسية </span>
                </a>
            </li>
            <li>
                <a href="{{ route('dashboard.settings.edit') }}">
                    <i class="fa fa-cogs"></i> <span>اعدادات</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.sections.edit') }}">
                    <i class="fa fa-leaf"></i> <span>أقسام الحدائق والخدمات</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.about.index') }}">
                    <i class="fa fa-leaf"></i> <span>نبذه عنا</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.whyus.index') }}">
                    <i class="fa fa-leaf"></i> <span>لماذا نحنا</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.gallery.index') }}">
                    <i class="fa fa-leaf"></i> <span>معرض الصور</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.services.index') }}">
                    <i class="fa fa-leaf"></i> <span>خدماتنا</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.counters.index') }}">
                    <i class="fa fa-leaf"></i> <span>إعدادات الإحصائيات</span>
                </a>
            </li>

            {{-- ======================= صفحات موقع مُضياف (Frontend Content) ======================= --}
            <li class="header" style="font-size:14px;color:#888;margin-top:15px;">
                🟢 صفحات الموقع (Frontend)
            </li>

            <li>
                <a href="{{ route('dashboard.company_about.index') }}">
                    <i class="fa fa-leaf"></i> <span>من نحنا</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.Pag_services.index') }}">
                    <i class="fa fa-leaf"></i> <span>خدمتنا</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.contact.settings') }}">
                    <i class="fa fa-envelope"></i> <span>إعدادات الصفحة</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.branches.index') }}">
                    <i class="fa fa-building"></i> <span>فروع الشركة</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.messages') }}">
                    <i class="fa fa-comments"></i> <span>الرسائل الواردة</span>
                </a>
            </li>

            <li>
                <a href="{{ route('dashboard.testimonials.index') }}">
                    <i class="fa fa-star"></i> <span>آراء عملائنا</span>
                </a>
            </li>

        </ul> --}}
        <ul class="sidebar-menu" data-widget="tree">

    {{-- ======================= لوحة التحكم (Admin) ======================= --}}
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
        <a href="{{ route('dashboard.sections.edit') }}">
            <i class="fa fa-th-large"></i> <span>أقسام الحدائق والخدمات</span>
        </a>
    </li>

    <li>
        <a href="{{ route('dashboard.about.index') }}">
            <i class="fa fa-info-circle"></i> <span>نبذه عنا</span>
        </a>
    </li>

    <li>
        <a href="{{ route('dashboard.whyus.index') }}">
            <i class="fa fa-check-circle"></i> <span>لماذا نحنا</span>
        </a>
    </li>

    <li>
        <a href="{{ route('dashboard.gallery.index') }}">
            <i class="fa fa-image"></i> <span>معرض الصور</span>
        </a>
    </li>

    <li>
        <a href="{{ route('dashboard.services.index') }}">
            <i class="fa fa-briefcase"></i> <span>خدماتنا</span>
        </a>
    </li>

    <li>
        <a href="{{ route('dashboard.counters.index') }}">
            <i class="fa fa-chart-bar"></i> <span>إعدادات الإحصائيات</span>
        </a>
    </li>

    {{-- ======================= صفحات موقع مُضياف (Frontend Content) ======================= --}}
    <li class="header" style="font-size:14px;color:#888;margin-top:15px;">
        🟢 صفحات الموقع (Frontend)
    </li>

    <li>
        <a href="{{ route('dashboard.company_about.index') }}">
            <i class="fa fa-building"></i> <span>من نحنا</span>
        </a>
    </li>

    <li>
        <a href="{{ route('dashboard.Pag_services.index') }}">
            <i class="fa fa-tree"></i> <span>خدمتنا</span>
        </a>
    </li>

    <li>
        <a href="{{ route('dashboard.contact.settings') }}">
            <i class="fa fa-phone"></i> <span>إعدادات الصفحة</span>
        </a>
    </li>

    <li>
        <a href="{{ route('dashboard.branches.index') }}">
            <i class="fa fa-map-marker"></i> <span>فروع الشركة</span>
        </a>
    </li>

    <li>
        <a href="{{ route('dashboard.messages') }}">
            <i class="fa fa-envelope"></i> <span>الرسائل الواردة</span>
        </a>
    </li>

    <li>
        <a href="{{ route('dashboard.projects.index') }}">
            <i class="fa fa-star"></i> <span>مشارعينا </span>
        </a>
    </li>

</ul>


    </section>
</aside>
