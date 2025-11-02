<!doctype html>
<html lang="en" dir="rtl" data-bs-theme="auto">



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
