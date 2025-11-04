
@extends('frontend.layouts.master')

@section('content')

	<!-- header body -->
<!-- Hero Section -->
<div class="overflow-hidden py-9 py-xl-10 position-relative">
    <img src="./assets/img/bg/laundry-bg1.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Bona Laundry">

    <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark"
        style="opacity: 0.75; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.9);"></div>

    <div class="position-absolute z-0 top-0 h-100 w-100">
        <div class="container h-100 d-flex align-items-center">
            <div class="max-w-2xl mx-auto mx-xl-0 text-center text-xl-start">
                <h1 class="m-0 mt-7 text-white tracking-tight fw-bold display-5" data-aos="fade" data-aos-duration="2000">
                    خدماتنا في بونا
                </h1>
                <p class="m-0 mt-4 text-white fs-5" data-aos="fade" data-aos-delay="200">
                    حلول غسيل متكاملة تجمع بين التكنولوجيا الحديثة والخدمة المميزة لتجعل حياتك أسهل وأنظف.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Why us -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
    <div class="container">
        <div class="row gy-5 align-items-center justify-content-between">
            <div class="col-12 col-xl-5 order-first order-xl-last">
                <div class="mx-auto max-w-2xl">
                    <h2 class="m-0 text-primary-emphasis text-base fw-semibold">لماذا تختار بونا؟</h2>
                    <p class="m-0 mt-2 text-body-emphasis display-6 fw-bold">
                        نظافة عصرية بخدمة مؤتمتة وجودة تفوق التوقعات
                    </p>
                    <p class="m-0 mt-4 text-body-secondary fs-5">
                        في <strong>بونا</strong> نؤمن أن الغسيل ليس مجرد خدمة، بل تجربة.
                        نستخدم أحدث التقنيات البيئية والمنظفات الآمنة على الأقمشة لتقديم نتائج مذهلة
                        دون الإضرار بالبيئة أو بملابسك المفضلة.
                    </p>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="ratio ratio-4x3" data-aos="fade" data-aos-delay="300">
                    <img src="./assets/img/bg/laundry-eco.jpg" class="object-fit-cover rounded-3" alt="Bona Eco Friendly">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service 1 -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
    <div class="container">
        <div class="row gy-5 align-items-center justify-content-between">
            <div class="col-12 col-xl-5">
                <div class="mx-auto max-w-2xl">
                    <h2 class="m-0 text-primary-emphasis text-base fw-semibold">خدمة 1</h2>
                    <p class="m-0 mt-2 text-body-emphasis display-6 fw-bold">
                        الغسيل والتنظيف الجاف الصديق للبيئة
                    </p>
                    <p class="m-0 mt-4 text-body-secondary fs-5">
                        نعتني بملابسك بعناية فائقة باستخدام أجهزة متطورة ومنظفات صديقة للبيئة،
                        تزيل الأوساخ بفعالية وتحافظ على نعومة الأقمشة وجودتها.
                        تجربة غسيل فاخرة تعيد لملابسك بريقها الأصلي.
                    </p>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/bg/laundry-service1.jpg" class="object-fit-cover rounded-3" alt="Bona Dry Cleaning">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service 2 -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
    <div class="container">
        <div class="row gy-5 align-items-center justify-content-between">
            <div class="col-12 col-xl-5 order-first order-xl-last">
                <div class="mx-auto max-w-2xl">
                    <h2 class="m-0 text-primary-emphasis text-base fw-semibold">خدمة 2</h2>
                    <p class="m-0 mt-2 text-body-emphasis display-6 fw-bold">
                        الغسيل والطي بخدمة التوصيل السريع
                    </p>
                    <p class="m-0 mt-4 text-body fs-5">
                        استمتع بخدمة غسيل متكاملة تشمل الغسل، التجفيف، والطي بطريقة مرتبة
                        مع التوصيل حتى باب منزلك.
                        نوفر لك الوقت والجهد لتستمتع بيومك بينما نهتم بملابسك.
                    </p>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/bg/laundry-service2.jpg" class="object-fit-cover rounded-3" alt="Bona Wash and Fold">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Service 3 -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
    <div class="container">
        <div class="row gy-5 align-items-center justify-content-between">
            <div class="col-12 col-xl-5">
                <div class="mx-auto max-w-2xl">
                    <h2 class="m-0 text-primary-emphasis text-base fw-semibold">خدمة 3</h2>
                    <p class="m-0 mt-2 text-body-emphasis display-6 fw-bold">
                        استلام وتسليم في نفس اليوم
                    </p>
                    <p class="m-0 mt-4 text-body-secondary fs-5">
                        لأننا نُدرك قيمة وقتك، نوفر خدمة الاستلام والتسليم في نفس اليوم.
                        فقط حدد الوقت المناسب، وسيتولى فريقنا مهمة استلام الملابس وتنظيفها
                        وإعادتها إليك في وقت قياسي.
                    </p>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="ratio ratio-4x3">
                    <img src="./assets/img/bg/laundry-service3.jpg" class="object-fit-cover rounded-3" alt="Bona Express Delivery">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Big image -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 d-none d-xl-block">
    <div class="container">
        <div class="ratio ratio-16x9">
            <img src="./assets/img/bg/laundry-team.jpg" class="object-fit-cover rounded-3" alt="Bona Team">
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-secondary">
    <div class="container text-center">
        <h2 class="fw-bold text-body-emphasis mb-5">آراء عملاؤنا</h2>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p class="fs-5 text-body-secondary">“ خدمة بونا رائعة! استلموا ملابسي في الوقت المحدد وأعادوها نظيفة ومكوية باحترافية عالية. أنصح الجميع بتجربتها.”</p>
                    <h5 class="fw-semibold text-body-emphasis mt-3">سارة القحطاني</h5>
                    <small class="text-muted">الرياض</small>
                </div>
                <div class="carousel-item">
                    <p class="fs-5 text-body-secondary">“ أفضل تجربة غسيل وتوصيل جربتها على الإطلاق، فريق محترف وسريع جدًا، شكراً بونا.”</p>
                    <h5 class="fw-semibold text-body-emphasis mt-3">عبدالله العتيبي</h5>
                    <small class="text-muted">جدة</small>
                </div>
                <div class="carousel-item">
                    <p class="fs-5 text-body-secondary">“ جودة عالية وخدمة راقية، الملابس رجعت كأنها جديدة تمامًا.”</p>
                    <h5 class="fw-semibold text-body-emphasis mt-3">ريم الحربي</h5>
                    <small class="text-muted">الدمام</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Clients -->
<div class="overflow-hidden py-6 py-sm-7 py-xl-8 bg-body-tertiary">
    <div class="container text-center">
        <h2 class="text-primary-emphasis fw-semibold">شركاؤنا</h2>
        <h3 class="fw-bold text-body-emphasis mt-2">نفخر بثقة عملائنا من المؤسسات والفنادق الكبرى</h3>
        <div class="mt-5 d-flex flex-wrap justify-content-center align-items-center gap-4">
            <img src="./assets/img/clients/logo1.png" class="img-fluid" alt="Client 1" style="max-height:60px;">
            <img src="./assets/img/clients/logo2.png" class="img-fluid" alt="Client 2" style="max-height:60px;">
            <img src="./assets/img/clients/logo3.png" class="img-fluid" alt="Client 3" style="max-height:60px;">
            <img src="./assets/img/clients/logo4.png" class="img-fluid" alt="Client 4" style="max-height:60px;">
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="pb-9 pt-7">
    <div class="container">
        <div class="py-6 position-relative text-white rounded-3">
            <img src="./assets/img/bg/laundry-cta.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3" alt="Bona Call To Action">
            <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3"
                style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.1) brightness(0.85);"></div>

            <div class="px-5 text-center">
                <h2 class="fw-bold display-6">وفّر وقتك، واترك الغسيل علينا</h2>
                <p class="mt-3 fs-5">حمّل تطبيق بونا الآن أو احجز خدمتك عبر الموقع لتستمتع بغسيل احترافي وسريع.</p>
                <a href="{{ route('rooms.show') }}" class="btn btn-lg btn-primary text-white mt-3">احجز خدمتك الآن</a>
            </div>
        </div>
    </div>
</div>


	<!-- Back to top button -->
	<button type="button" class="btn btn-primary btn-back-to-top rounded-circle justify-content-center align-items-center p-2 text-white">
		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16"> <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/> </svg>
	</button>



	<!-- Bootstrap JavaScript: Bundle with Popper -->
	<script src="./assets/libraries/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./assets/libraries/glide/glide.min.js"></script>
	<script src="./assets/libraries/aos/aos.js"></script>
	<script src="./assets/js/scripts.js"></script>

@endsection

