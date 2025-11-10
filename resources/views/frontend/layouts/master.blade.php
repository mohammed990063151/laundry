<!doctype html>
<html lang="en" dir="rtl" data-bs-theme="auto">
{{-- @title('BONA Laundry - Your Trusted Laundry Service') --}}

<title>@yield('title', 'BONA Laundry - مغسلتك الذكية الموثوقة')</title>
<meta name="description" content="@yield('meta_description', 'مغسلة بونا - خدمات غسيل وكي وتعقيم احترافية في المملكة العربية السعودية.')">

@include('frontend.layouts.head')

<body>


    <!-- loader-wrapper -->
    <div class="loader-wrapper">
        <div class="spinner-border text-primary p-5" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    @include('frontend.layouts.header')
    @yield('content')





@include('frontend.layouts.footer')
@include('frontend.layouts.script')



</body>

</html>
