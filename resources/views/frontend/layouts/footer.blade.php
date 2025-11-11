
    <footer class="overflow-hidden py-6 py-sm-7 py-xl-8"  >
    <div class="container">
        <div class="row gy-5 align-items-center">

            <!-- قسم الاشتراك -->
            <div class="col-12 col-xl-6">
                <div class="pb-3 max-w-lg position-relative">
                    {{-- <form method="post" target="_blank" novalidate class="newsletter-form">
                        <h2 class="fw-bold text-3xl" style="color:#1226AA;">
                            اشترك في نشرتنا البريدية 📬
                        </h2>
                        <p class="m-0 mt-3 text-muted fs-5">
                            كن أول من يعرف عن العروض الجديدة وخدمات بونا الذكية في الغسيل والتوصيل.
                        </p>

                        <div class="mt-4 mb-2 d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="emailSubscribe" class="visually-hidden">البريد الإلكتروني</label>
                            <input type="email" id="emailSubscribe" name="EMAIL"
                                   class="form-control text-sm py-2" placeholder="أدخل بريدك الإلكتروني" required>
                            <button type="submit" class="btn fw-semibold text-white text-sm"
                                    style="background-color:#1226AA;">اشتراك</button>
                        </div>

                        <!-- رسائل الاستجابة -->
                        <div class="subscribe-response mt-2 text-success small"></div>
                    </form> --}}
                    <form method="POST" novalidate
      class="newsletter-form"
      action="{{ route('newsletter.subscribe') }}">
    @csrf

    <h2 class="fw-bold text-3xl" >
        اشترك في نشرتنا البريدية 📬
    </h2>
    <p class="m-0 mt-3 text-muted fs-5">
        كن أول من يعرف عن العروض الجديدة وخدمات بونا الذكية في الغسيل والتوصيل.
    </p>

    <div class="mt-4 mb-2 d-flex flex-column flex-sm-row w-100 gap-2">
        <label for="emailSubscribe" class="visually-hidden">البريد الإلكتروني</label>
        <input type="email" id="emailSubscribe" name="email"
               class="form-control text-sm py-2"
               placeholder="أدخل بريدك الإلكتروني" required>
        <button type="submit" class="btn fw-semibold text-white text-sm"
                style="background-color:#1226AA;">اشتراك</button>
    </div>

    {{-- رسالة النجاح --}}
    @if(session('newsletter_success'))
        <div class="subscribe-response mt-2 text-success small">
            {{ session('newsletter_success') }}
        </div>
    @endif

    {{-- رسالة الخطأ --}}
    @error('email')
        <div class="subscribe-response mt-2 text-danger small">
            {{ $message }}
        </div>
    @enderror
</form>

                </div>
            </div>

            <!-- روابط وخدمات -->
            <div class="col-12 col-xl-6">
                <div class="row row-cols-1 row-cols-sm-2 gx-3 gy-5">
                    <div class="d-flex flex-column align-items-start">
                        <div class="p-2 bg-white rounded-3 border text-center">
                            <i class="fa-solid fa-shirt text-primary fs-4"></i>
                        </div>
                        <div class="mt-3 fw-semibold text-body-emphasis">خدماتنا</div>
                        <p class="mt-2 text-body-secondary">
                            غسيل، كيّ، وتعقيم بخدمات سريعة واحترافية عبر خزائن ذكية وتوصيل آمن.
                        </p>
                    </div>

                    <div class="d-flex flex-column align-items-start">
                        <div class="p-2 bg-white rounded-3 border text-center">
                            <i class="fa-solid fa-hand-holding-heart text-primary fs-4"></i>
                        </div>
                        <div class="mt-3 fw-semibold text-body-emphasis">ثقة العملاء</div>
                        <p class="mt-2 text-body-secondary">
                            نفتخر بثقة مئات العملاء من الأفراد والفنادق والمجمعات السكنية بخدمات بونا.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- خط فاصل -->
        <hr class="my-5 text-body-emphasis opacity-10">

        <!-- أسفل الفوتر -->
        <div class="d-flex flex-column flex-xl-row justify-content-between align-items-center gap-3">
            <div class="order-3 order-xl-1 text-center text-xl-start">
                <p class="mb-0 text-body-secondary text-sm">
                    © <span class="current-year"></span> <strong>{{ $setting->name }}</strong> — جميع الحقوق محفوظة
                </p>
            </div>

            <div class="order-2 order-xl-2">
                <a href="{{ route('frontend.home') }}" class="d-flex align-items-center text-decoration-none">
                    <img src="{{ asset('img/logo.png') }}" height="30" alt="Bona Logo" loading="lazy">
                </a>
            </div>

            <div class="order-1 order-xl-3">
                <ul class="nav justify-content-center justify-content-xl-end">
                    <li class="nav-item"><a href="{{ route('frontend.about-us') }}" class="nav-link text-body-secondary px-2">من نحن</a></li>
                    <li class="nav-item"><a href="{{ route('bona.services') }}" class="nav-link text-body-secondary px-2">خدماتنا</a></li>
                    <li class="nav-item"><a href="{{  route('contact') }}" class="nav-link text-body-secondary px-2">تواصل معنا</a></li>
                    <li class="nav-item"><a href="{{ route('privacy') }}" class="nav-link text-body-secondary px-2">سياسة الخصوصية</a></li>
                </ul>
            </div>

           <!-- أيقونات التواصل الاجتماعي -->
<div class="social-icons d-flex justify-content-center justify-content-xl-end gap-3 mt-3">
    <a href="{{ $setting->facebook }}" target="_blank" class="text-dark hover-scale" title="Facebook">
        <i class="fa-brands fa-facebook fa-lg"></i>
    </a>
    <a href="{{ $setting->linkedin }}" target="_blank" class="text-dark hover-scale" title="TikTok">
        <i class="fa-brands fa-tiktok fa-lg"></i>
    </a>
    <a href="{{ $setting->twitter }}" target="_blank" class="text-dark hover-scale" title="X">
        <i class="fa-brands fa-x-twitter fa-lg"></i>
    </a>
    <a href="{{ $setting->instagram }}" target="_blank" class="text-dark hover-scale" title="Instagram">
        <i class="fa-brands fa-instagram fa-lg"></i>
    </a>
</div>

        </div>
    </div>


</footer>

<!-- زر الرجوع للأعلى -->
<button type="button" class="btn rounded-circle text-white position-fixed bottom-3 end-3 d-flex justify-content-center align-items-center shadow"
        style="background-color:#1226AA; width:45px; height:45px;" id="backToTopBtn">
    <i class="fa-solid fa-chevron-up"></i>
</button>

<script>
    // تحديث السنة
    document.querySelector('.current-year').textContent = new Date().getFullYear();

    // زر الرجوع للأعلى
    const btn = document.getElementById('backToTopBtn');
    window.addEventListener('scroll', () => {
        btn.style.display = (window.scrollY > 400) ? 'flex' : 'none';
    });
    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>

