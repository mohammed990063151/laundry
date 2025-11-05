
@extends('frontend.layouts.master')

@section('content')


	<!-- header body -->
	<!-- Hero Section -->
<div class="overflow-hidden py-9 py-xl-10 position-relative">
    <img src="./assets/img/bg/bg1.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover" alt="Bona Laundry">

    <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark"
        style="opacity: 0.85; mix-blend-mode: multiply; filter: contrast(1.15) brightness(0.85);"></div>

    <div class="position-absolute z-0 top-0 h-100 w-100">
        <div class="container h-100 d-flex align-items-center">
            <div class="max-w-2xl mx-auto mx-xl-0 text-center text-xl-start">
                <h1 class="m-0 mt-7 text-white fw-bold display-5" data-aos="fade" data-aos-duration="3000">
                    من نحن
                </h1>
                <p class="m-0 mt-4 text-white fs-5" data-aos-delay="100" data-aos="fade" data-aos-duration="3000">
                    في <strong>بونا</strong> نعيد تعريف مفهوم الغسيل بخدمات ذكية وسريعة توفر وقتك وجهدك.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- About Bona -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
    <div class="container">
        <div class="row gy-5 align-items-center justify-content-between">
            <div class="col-12 col-xl-5 order-first order-xl-last">
                <div class="mx-auto max-w-2xl">
                    <h2 class="m-0 text-primary-emphasis text-base fw-semibold">عن بونا</h2>
                    <p class="m-0 mt-2 text-body-emphasis display-6 fw-bold">
                        غسيل عصري.. بخدمة راقية وجودة استثنائية
                    </p>
                    <p class="m-0 mt-4 text-body-secondary fs-5">
                        تأسست <strong>بونا</strong> لتكون الخيار الأول للأفراد والعائلات الباحثين عن الراحة والنظافة في كل تفاصيل حياتهم.
                        نقدم خدمات غسيل متكاملة تشمل الغسيل، التنشيف، الكي، والتوصيل إلى باب المنزل.
                    </p>
                    <p class="m-0 mt-4 text-body-secondary fs-5">
                        نعمل بفريق محترف وتجهيزات حديثة تضمن لك نظافة فائقة، حماية كاملة للأقمشة، وتجربة خالية من المتاعب.
                        بونا... الغسيل أصبح أذكى.
                    </p>
                </div>
            </div>

            <div class="col-12 col-xl-6">
                <div class="ratio ratio-4x3" data-aos-delay="200" data-aos="fade" data-aos-duration="3000">
                    <img src="./assets/img/bg/bg7.jpg" class="object-fit-cover rounded-3" alt="Bona Laundry Process">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Vision & Values -->
<div class="overflow-hidden py-6 py-sm-7 py-xl-8 bg-body-tertiary">
    <div class="container">
        <div class="row gy-5 row-cols-1 row-cols-lg-3">
            <div class="col" data-aos="fade-left" data-aos-duration="3000">
                <div class="bg-primary rounded-3 d-inline-flex align-items-center justify-content-center" style="width:2.5rem; height:2.5rem;">
                    <i class="fa-solid fa-bullseye text-white"></i>
                </div>
                <h3 class="m-0 mt-3 text-body-emphasis fw-semibold">رؤيتنا</h3>
                <p class="m-0 mt-2 text-body-secondary">
                    أن نكون المغسلة الأكثر ثقة في المملكة، بخدمة توازن بين الجودة، السرعة، والاستدامة.
                </p>
            </div>

            <div class="col" data-aos-delay="100" data-aos="fade-left" data-aos-duration="3000">
                <div class="bg-primary rounded-3 d-inline-flex align-items-center justify-content-center" style="width:2.5rem; height:2.5rem;">
                    <i class="fa-solid fa-seedling text-white"></i>
                </div>
                <h3 class="m-0 mt-3 text-body-emphasis fw-semibold">مهمتنا</h3>
                <p class="m-0 mt-2 text-body-secondary">
                    تقديم تجربة غسيل متطورة تدمج التكنولوجيا مع الخدمة الراقية لتلائم نمط الحياة الحديث.
                </p>
            </div>

            <div class="col" data-aos-delay="200" data-aos="fade-left" data-aos-duration="3000">
                <div class="bg-primary rounded-3 d-inline-flex align-items-center justify-content-center" style="width:2.5rem; height:2.5rem;">
                    <i class="fa-solid fa-handshake text-white"></i>
                </div>
                <h3 class="m-0 mt-3 text-body-emphasis fw-semibold">قيمنا</h3>
                <p class="m-0 mt-2 text-body-secondary">
                    <strong>الثقة</strong> في الخدمة،
                    <strong>الجودة</strong> في الأداء،
                    <strong>الابتكار</strong> في الحلول،
                    <strong>الاهتمام</strong> براحة العميل.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Gallery -->
<div class="overflow-hidden pt-6 pt-sm-7 pt-xl-8 pb-7 pb-sm-8 pb-xl-9">
    <div class="container">
        <div class="row gx-lg-4 row-cols-1 row-cols-lg-2">
            <div class="col">
                <div class="ratio ratio-1x1" data-aos="fade" data-aos-duration="1000">
                    <img src="./assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="Laundry Machine" loading="lazy">
                </div>
            </div>
            <div class="col d-none d-lg-block">
                <div class="ratio ratio-1x1" data-aos-delay="100" data-aos="fade" data-aos-duration="1000">
                    <img src="./assets/img/bg/bg4.jpg" class="object-fit-cover rounded-3" alt="Laundry Service" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Story -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
    <div class="container">
        <div class="row gy-5 justify-content-between align-items-center">
            <div class="col-12 col-xl-6 col-xxl-5">
                <div class="mx-auto max-w-2xl">
                    <h2 class="text-primary-emphasis fw-semibold">قصتنا</h2>
                    <p class="mt-2 text-body-emphasis display-6 fw-bold">من فكرة صغيرة إلى علامة نظافة كبرى</p>
                    <p class="mt-4 text-body fs-5">
                        بدأت <strong>بونا</strong> برؤية بسيطة: جعل الغسيل تجربة سهلة ومريحة في حياة كل شخص.
                        انطلقت من فريق صغير يسعى لتغيير مفهوم المغسلة التقليدية إلى خدمة حديثة متكاملة.
                    </p>
                    <p class="mt-4 text-body fs-5">
                        اليوم، نفخر بخدمة آلاف العملاء الذين يثقون بنا يوميًا.
                        ومع كل غسلة جديدة، نقترب أكثر من تحقيق هدفنا: **الراحة والنظافة في كل بيت سعودي**.
                    </p>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="ratio ratio-4x3" data-aos="fade" data-aos-duration="3000">
                    <img src="./assets/img/bg/bg2.jpg" class="object-fit-cover rounded-3" alt="Bona Story" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9">
    <div class="container">
        <div class="row gy-5">
            <div class="col-12 col-xl-4">
                <div class="max-w-2xl">
                    <h2 class="text-body-emphasis fw-bold display-6">فريق بونا</h2>
                    <p class="mt-3 text-body-secondary fs-5">
                        خلف كل قطعة ملابس نظيفة فريق مخلص من المحترفين يعمل بتفانٍ لضمان الجودة والسرعة والرضا.
                    </p>
                </div>
            </div>

            <div class="col-12 col-xl-8">
                <div class="row gy-4">
                    <div class="col-6 col-md-4 text-center">
                        <img class="rounded-circle mb-3" src="./assets/img/small-team/st1.jpg" width="90" height="90" alt="team">
                        <h6 class="fw-semibold text-body-emphasis">أحمد الغامدي</h6>
                        <p class="text-primary-emphasis small">المدير التنفيذي</p>
                    </div>
                    <div class="col-6 col-md-4 text-center">
                        <img class="rounded-circle mb-3" src="./assets/img/small-team/st2.jpg" width="90" height="90" alt="team">
                        <h6 class="fw-semibold text-body-emphasis">سارة المطيري</h6>
                        <p class="text-primary-emphasis small">إدارة العمليات</p>
                    </div>
                    <div class="col-6 col-md-4 text-center">
                        <img class="rounded-circle mb-3" src="./assets/img/small-team/st3.jpg" width="90" height="90" alt="team">
                        <h6 class="fw-semibold text-body-emphasis">محمد الحربي</h6>
                        <p class="text-primary-emphasis small">خدمة العملاء</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Partners -->
<div class="overflow-hidden py-6 py-sm-7 py-xl-8 bg-body-tertiary">
    <div class="container text-center">
        <h2 class="text-primary-emphasis fw-semibold">شركاؤنا</h2>
        <h3 class="fw-bold text-body-emphasis mt-2">نفخر بثقة أبرز العلامات في المملكة</h3>
        <div class="mt-4 d-flex flex-wrap justify-content-center align-items-center gap-4">
            <img src="./assets/img/partners/logo1.png" class="img-fluid" alt="Partner 1" style="max-height:60px;">
            <img src="./assets/img/partners/logo2.png" class="img-fluid" alt="Partner 2" style="max-height:60px;">
            <img src="./assets/img/partners/logo3.png" class="img-fluid" alt="Partner 3" style="max-height:60px;">
            <img src="./assets/img/partners/logo4.png" class="img-fluid" alt="Partner 4" style="max-height:60px;">
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="pb-9 pt-7">
    <div class="container">
        <div class="py-6 position-relative text-white rounded-3">
            <img src="./assets/img/bg/bg10.jpg" class="position-absolute z-n1 top-0 h-100 w-100 object-fit-cover rounded-3" loading="lazy" alt="Bona CTA">
            <div class="position-absolute z-n1 top-0 h-100 w-100 bg-dark rounded-3" style="opacity: 0.85; mix-blend-mode: multiply;"></div>

            <div class="px-5 text-center">
                <h2 class="fw-bold display-6">وفّر وقتك... واترك الغسيل علينا</h2>
                <p class="mt-3 fs-5">خدمة توصيل ذكية وسريعة، لأننا في بونا نهتم بتفاصيل راحتك.</p>
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


