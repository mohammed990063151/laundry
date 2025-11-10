{{--
@extends('frontend.layouts.master')

@section('content')

<!-- Hero Section -->
<div class="overflow-hidden py-9 py-xl-10 position-relative">
    <img src="./assets/img/bg/bg1.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Bona Projects">

    <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark"
        style="opacity: 0.8; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.9);"></div>

    <div class="position-absolute z-0 top-0 h-100 w-100">
        <div class="container h-100 d-flex align-items-center">
            <div class="max-w-2xl mx-auto mx-xl-0 text-center text-xl-start">
                <h1 class="m-0 mt-7 text-white fw-bold display-5" data-aos="fade" data-aos-duration="3000">
                    مشاريعنا
                </h1>
                <p class="m-0 mt-4 text-white fs-5" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
                    نفخر بتنفيذ مشاريع غسيل احترافية تلبي أعلى معايير الجودة والنظافة في المملكة.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Intro Section -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
    <div class="container text-center">
        <h2 class="text-primary-emphasis fw-semibold">نبذة عن مشاريع بونا</h2>
        <p class="m-0 mt-3 text-body-secondary fs-5 mx-auto" style="max-width:800px;">
            على مدار السنوات الماضية، قدمت <strong>بونا</strong> خدماتها المتميزة لعشرات الشركات والفنادق والمجمعات السكنية.
            نعمل وفق معايير عالمية في الغسيل والتعقيم والتغليف لتلبية احتياجات المؤسسات والأفراد على حد سواء.
        </p>
    </div>
</div>

<!-- Projects Grid -->
<div class="overflow-hidden py-6 py-sm-8 py-xl-9 bg-body-tertiary">
    <div class="container">
        <div class="row gy-5 gx-4">
            <!-- Project 1 -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="./assets/img/bg/bg8.jpg" class="card-img-top object-fit-cover" height="230" alt="Hotel Project">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-body-emphasis">مشروع فنادق الرياض</h5>
                        <p class="text-body-secondary small mt-2">
                            شراكة مع مجموعة فنادق راقية لتقديم خدمة غسيل يومية متكاملة تشمل تنظيف المفارش، الستائر، والمناشف، بمعايير فندقية فاخرة.
                        </p>
                        <p class="text-primary-emphasis fw-semibold small mt-2">الموقع: الرياض</p>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="./assets/img/bg/bg10.jpg" class="card-img-top object-fit-cover" height="230" alt="Hospital Project">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-body-emphasis">مشروع المستشفيات</h5>
                        <p class="text-body-secondary small mt-2">
                            خدمات غسيل وتعقيم احترافية للملابس الطبية والمفارش باستخدام منظفات آمنة ومعقمة وفق المعايير الصحية.
                        </p>
                        <p class="text-primary-emphasis fw-semibold small mt-2">الموقع: جدة</p>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="./assets/img/bg/bg2.jpg" class="card-img-top object-fit-cover" height="230" alt="Residential Project">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-body-emphasis">عقود سكنية طويلة الأجل</h5>
                        <p class="text-body-secondary small mt-2">
                            خدمات الغسيل للمجمعات السكنية وشركات التطوير العقاري بعقود شهرية مرنة وجودة موثوقة.
                        </p>
                        <p class="text-primary-emphasis fw-semibold small mt-2">الموقع: الدمام</p>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="./assets/img/bg/bg7.jpg" class="card-img-top object-fit-cover" height="230" alt="Corporate Laundry">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-body-emphasis">خدمات الشركات والمؤسسات</h5>
                        <p class="text-body-secondary small mt-2">
                            حلول غسيل يومية للمكاتب والمراكز التجارية، مع خدمة استلام وتسليم مرنة تتناسب مع أوقات العمل.
                        </p>
                        <p class="text-primary-emphasis fw-semibold small mt-2">الموقع: الخبر</p>
                    </div>
                </div>
            </div>

            <!-- Project 5 -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="./assets/img/bg/bg8.jpg" class="card-img-top object-fit-cover" height="230" alt="Uniform Laundry">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-body-emphasis">مشروع غسيل الزي الموحد</h5>
                        <p class="text-body-secondary small mt-2">
                            إدارة كاملة لملابس العاملين في المصانع والمطاعم، مع تعقيم وضمان تقديمها في أفضل صورة.
                        </p>
                        <p class="text-primary-emphasis fw-semibold small mt-2">الموقع: مكة المكرمة</p>
                    </div>
                </div>
            </div>

            <!-- Project 6 -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="./assets/img/bg/bg10.jpg" class="card-img-top object-fit-cover" height="230" alt="Event Project">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-body-emphasis">مشروع فعاليات ومناسبات</h5>
                        <p class="text-body-secondary small mt-2">
                            دعم تنظيمي لغسيل أقمشة المناسبات الرسمية، حفلات الزفاف والمؤتمرات بخدمة سريعة وفاخرة.
                        </p>
                        <p class="text-primary-emphasis fw-semibold small mt-2">الموقع: المدينة المنورة</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call To Action -->
<div class="pb-9 pt-7">
    <div class="container">
        <div class="py-6 position-relative text-white rounded-3">
            <img src="./assets/img/bg/bg10.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3" alt="Bona Laundry">
            <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3"
                style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.1) brightness(0.85);"></div>

            <div class="px-5 text-center">
                <h2 class="fw-bold display-6">هل ترغب بالتعاون معنا؟</h2>
                <p class="mt-3 fs-5">نحن في بونا جاهزون لتقديم حلول غسيل احترافية تناسب مشاريعك المؤسسية.</p>
                <a href="{{  route('contact') }}" class="btn btn-lg btn-primary text-white mt-3">تواصل معنا الآن</a>
            </div>
        </div>
    </div>
</div>
@endsection --}}


@extends('frontend.layouts.master')

@section('content')

<!-- Hero Section -->
<!-- Hero Section -->
<div class="overflow-hidden py-9 py-xl-10 position-relative">
    <img src="./assets/img/bg/bg1.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Bona Projects">

    <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark"
        style="opacity: 0.8; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.9);"></div>

    <div class="position-absolute z-0 top-0 h-100 w-100">
        <div class="container h-100 d-flex align-items-center">
            <div class="max-w-2xl mx-auto mx-xl-0 text-center text-xl-start">
                <h1 class="m-0 mt-7 text-white fw-bold display-5" data-aos="fade" data-aos-duration="3000">
                    مشاريعنا
                </h1>
                <p class="m-0 mt-4 text-white fs-5" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
                    نفخر بتنفيذ مشاريع غسيل احترافية تلبي أعلى معايير الجودة والنظافة في المملكة.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Intro Section -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
    <div class="container text-center">
        <h2 class="text-primary-emphasis fw-semibold">نبذة عن مشاريع بونا</h2>
        <p class="m-0 mt-3 text-body-secondary fs-5 mx-auto" style="max-width:800px;">
            على مدار السنوات الماضية، قدمت <strong>بونا</strong> خدماتها المتميزة لعشرات الشركات والفنادق والمجمعات السكنية.
            نعمل وفق معايير عالمية في الغسيل والتعقيم والتغليف لتلبية احتياجات المؤسسات والأفراد على حد سواء.
        </p>
    </div>
</div>

<!-- Projects -->
<div class="py-8 bg-body-tertiary">
    <div class="container">
        <div class="row gy-5 gx-4">
            @foreach($projects as $project)
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                    <img src="{{ asset($project->image) }}" class="card-img-top object-fit-cover" height="230" alt="{{ $project->title }}">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-body-emphasis">{{ $project->title }}</h5>
                        <p class="text-body-secondary small mt-2">{!! $project->description !!}</p>
                        @if($project->location)
                            <p class="text-primary-emphasis fw-semibold small mt-2">الموقع: {{ $project->location }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="pb-9 pt-7">
    <div class="container">
        <div class="py-6 position-relative text-white rounded-3">
            <img src="./assets/img/bg/bg10.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3" alt="Bona Laundry">
            <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3"
                style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.1) brightness(0.85);"></div>

            <div class="px-5 text-center">
                <h2 class="fw-bold display-6">هل ترغب بالتعاون معنا؟</h2>
                <p class="mt-3 fs-5">نحن في بونا جاهزون لتقديم حلول غسيل احترافية تناسب مشاريعك المؤسسية.</p>
                <a href="{{  route('contact') }}" class="btn btn-lg btn-primary text-white mt-3">تواصل معنا الآن</a>
            </div>
        </div>
    </div>
</div>
@endsection


