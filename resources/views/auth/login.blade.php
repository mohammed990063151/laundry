<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول | شركة مُضياف الزراعية</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    *{
        margin:0; padding:0; box-sizing:border-box;
        font-family:'Cairo', sans-serif;
    }
    body {
        background:#f9fdf7;
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
        position:relative;
        overflow:hidden;
    }
    /* خلفية أوراق نبات */
    .bg-leaf {
        position:absolute; z-index:-1;
        width:120%; opacity:.08;
        top:-100px; right:-50px;
        animation: leafMove 9s infinite alternate;
    }
    @keyframes leafMove {
        to { transform: translateY(40px) rotate(3deg); }
    }

    .login-box {
        width:92%; max-width:950px;
        background:#fff;
        border-radius:18px;
        display:flex;
        overflow:hidden;
        box-shadow:0px 10px 45px rgba(0,0,0,0.08);
        animation:fadeUp .7s;
    }
    @keyframes fadeUp {
        from { opacity:0; transform: translateY(40px); }
        to {opacity:1; transform: translateY(0); }
    }

    .left {
        flex:1;
        background:linear-gradient(135deg,#bfe88d,#9ad776);
        padding:40px 25px;
        color:#1b3615;
        text-align:center;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }
    .left img {
        width:170px;
        margin:10px auto 25px;
        border-radius:15px;
        background:#fff;
        padding:10px;
        box-shadow:0 6px 12px rgba(0,0,0,.12);
    }
    .left h2 {
        font-size:2rem; margin-bottom:10px;
        font-weight:700;
    }
    .left p {
        font-size:1.1rem;
        opacity:.9;
    }

    .right {
        flex:1;
        padding:45px 35px;
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        text-align:right;
    }
    .right h3 {
        color:#2b4b24;
        margin-bottom:25px;
        font-size:1.8rem;
        font-weight:700;
    }

    .form-group { width:100%; max-width:330px; margin-bottom:20px; position:relative; }
    .form-group input {
        width:100%;
        padding:12px 45px 12px 15px;
        border-radius:30px;
        border:1px solid #d4e3c8;
        font-size:1rem;
        outline:none;
        transition:.3s;
    }
    .form-group input:focus { border-color:#7bb452; box-shadow:0 0 8px rgba(98,158,60,0.4); }

    .form-group i {
        position:absolute; top:50%; right:15px;
        transform:translateY(-50%);
        color:#6daa35;
    }

    .btn {
        margin-top:10px;
        width:100%;
        max-width:330px;
        padding:11px;
        font-size:1.1rem;
        border:none;
        border-radius:30px;
        background:#8fc44e;
        color:white;
        font-weight:bold;
        cursor:pointer;
        transition:.3s;
    }
    .btn:hover {
        background:#79b23f;
        transform: scale(1.03);
    }

    @media(max-width:900px){
        .login-box{
            flex-direction:column;
            height:auto;
        }
        .left img{ width:130px; }
    }
</style>
</head>
<body>

<img class="bg-leaf" src="https://i.postimg.cc/YSKb6JTk/leaf-bg.png">

<div class="login-box">

    {{-- الجزء الأيسر --}}
    <div class="left">
        <img src="{{ asset($setting->logo) }}" alt="Logo">
        <h2>شركة مُضياف الزراعية</h2>
        <p>حلول زراعية متكاملة، مشاتل، ري، مكافحة آفات والمزيد...</p>
    </div>

    {{-- الجزء الأيمن --}}
    <div class="right">
        <h3>تسجيل الدخول للنظام</h3>

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

            <div style="width:100%; max-width:330px; margin-bottom:10px; display:flex; gap:7px;">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">تذكرني</label>
            </div>

            <button class="btn">دخول 🔐</button>
        </form>
    </div>
</div>

</body>
</html>
