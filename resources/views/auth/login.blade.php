<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول | بونا Bona</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    * {margin:0; padding:0; box-sizing:border-box; font-family:'Cairo',sans-serif;}

    body {
        height:100vh;
        background: linear-gradient(135deg, #eaf0ff, #f5f7ff);
        display:flex;
        align-items:center;
        justify-content:center;
        position:relative;
        overflow:hidden;
    }

    /* خلفية بشكل موجي */
    .wave {
        position:absolute;
        bottom:0; left:0;
        width:100%;
        height:220px;
        background-size:cover;
        opacity:.8;
    }

    .login-container {
        background:#fff;
        width:90%; max-width:950px;
        display:flex;
        border-radius:20px;
        overflow:hidden;
        box-shadow:0 8px 40px rgba(0,0,0,0.1);
        animation:fadeIn .7s ease-in-out;
    }

    @keyframes fadeIn {
        from {opacity:0; transform:translateY(40px);}
        to {opacity:1; transform:translateY(0);}
    }

    /* الجزء الأيسر */
    .login-image {
        flex:1;
        background:linear-gradient(135deg,#1226AA,#3c57ff);
        color:white;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        text-align:center;
        padding:40px 25px;
    }
    .login-image img {
        width:170px;
        height:auto;
        margin-bottom:20px;
        border-radius:12px;
        background:#fff;
        padding:10px;
    }
    .login-image h2 {
        font-size:2rem;
        font-weight:700;
        margin-bottom:10px;
    }
    .login-image p {
        font-size:1rem;
        opacity:.9;
        line-height:1.8;
    }

    /* الجزء الأيمن */
    .login-form {
        flex:1;
        padding:45px 35px;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
    }

    .login-form h3 {
        color:#1226AA;
        font-weight:700;
        margin-bottom:25px;
        font-size:1.7rem;
    }

    .form-group {
        width:100%; max-width:320px; position:relative; margin-bottom:20px;
    }
    .form-group input {
        width:100%;
        padding:12px 45px 12px 15px;
        border-radius:30px;
        border:1px solid #cfd8f3;
        background:#f9faff;
        font-size:1rem;
        outline:none;
        transition:.3s;
    }
    .form-group input:focus {
        border-color:#1226AA;
        box-shadow:0 0 8px rgba(18,38,170,0.3);
        background:white;
    }
    .form-group i {
        position:absolute;
        top:50%; right:15px;
        transform:translateY(-50%);
        color:#1226AA;
        opacity:.8;
    }

    .btn-login {
        width:100%; max-width:320px;
        background:#1226AA;
        color:#fff;
        font-size:1.1rem;
        padding:12px;
        border:none;
        border-radius:30px;
        cursor:pointer;
        font-weight:600;
        transition:.3s;
    }
    .btn-login:hover {
        background:#1b33d3;
        transform:scale(1.03);
    }

    .remember {
        width:100%; max-width:320px;
        display:flex;
        align-items:center;
        gap:8px;
        margin-bottom:10px;
        font-size:.95rem;
        color:#555;
    }

    @media(max-width:900px){
        .login-container {flex-direction:column;}
        .login-image {padding:30px 20px;}
    }
</style>
</head>
<body>

<div class="login-container">
    {{-- الجزء الأيسر --}}
    <div class="login-image">
        <img src="{{ $setting->logo}}" alt="Bona Logo">
        <h2>بونا Bona</h2>
        <p>تطبيق الغسيل الذكي الذي يصل إليك أينما كنت — نظافة، سرعة، وراحة.</p>
    </div>

    {{-- الجزء الأيمن --}}
    <div class="login-form">
        <h3>تسجيل الدخول إلى بونا</h3>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <i class="fa fa-envelope"></i>
                <input type="email" name="email" placeholder="البريد الإلكتروني" required>
            </div>

            <div class="form-group">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" placeholder="كلمة المرور" required>
            </div>

            <div class="remember">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">تذكرني</label>
            </div>

            <button class="btn-login">دخول 🔐</button>
        </form>
    </div>
</div>

<div class="wave"></div>

</body>
</html>
