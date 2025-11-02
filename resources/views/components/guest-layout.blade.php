<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>مضياف - لوحة العميل</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-light">

    <div class="container py-5">
        {{ $slot }}
    </div>

</body>
</html>
