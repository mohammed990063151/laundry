<!doctype html>
<html lang="en" dir="rtl" data-bs-theme="auto">
{{-- @title('BONA Laundry - Your Trusted Laundry Service') --}}
<title>@yield('title', '{{ $setting->name }}- مغسلتك الذكية الموثوقة')</title>

<meta name="description" content="@yield('meta_description', 'مغسلة بونا - خدمات غسيل وكي وتعقيم احترافية في المملكة العربية السعودية.')">

@include('frontend.layouts.head')

<body>


    <!-- loader-wrapper -->
    <div class="loader-wrapper">
        <div class="spinner-border text-primary p-5" role="status">
            <span class="visually-hidden" >Loading...</span>
        </div>
    </div>

    @include('frontend.layouts.header')
    @yield('content')
    {{-- ✅ رسالة نجاح --}}
@if(session('success'))
<div id="success-alert" class="alert alert-success text-center shadow-sm"
     style="position: fixed; top: 20px; right: 50%; transform: translateX(50%);
            z-index: 9999; background: #4CAF50; color: #fff; padding: 15px 25px;
            border-radius: 8px; font-size: 1.1rem; font-weight: 600;">
    {{ session('success') }}
</div>

<script>
    // 🔄 إخفاء الرسالة تلقائيًا بعد 3 ثواني
    setTimeout(() => {
        const alert = document.getElementById('success-alert');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }
    }, 3000);
</script>
@endif






@include('frontend.layouts.footer')
@include('frontend.layouts.script')



</body>

</html>
