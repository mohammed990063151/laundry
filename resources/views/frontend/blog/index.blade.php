@extends('frontend.layouts.master')

@section('content')
<style>
    body {
        font-family: 'Cairo', sans-serif;
        background-color: #fafafa;
    }

    .blog-header {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                    url('../img/hotel-1749602_1280.jpg') center/cover;
        text-align: center;
        color: #fff;
        padding: 100px 20px;
    }

    .blog-header h1 {
        font-size: 2.8rem;
        color: #D9EF82;
        margin-bottom: 10px;
    }

    .breadcrumb {
        color: #ddd;
        font-size: 1rem;
    }

    .blog-section {
        max-width: 1200px;
        margin: 60px auto;
        padding: 0 20px;
    }

    .blog-article {
        background: #fff;
        border-radius: 16px;
        margin-bottom: 40px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: 0.3s;
    }

    .blog-article:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    }

    .blog-img {
        width: 100%;
        height: 380px;
        object-fit: cover;
    }

    .blog-content {
        padding: 30px;
    }

    .blog-content h2 {
        color: #222;
        font-size: 1.8rem;
        margin-bottom: 10px;
    }

    .blog-meta {
        color: #888;
        font-size: 0.9rem;
        margin-bottom: 15px;
    }

    .blog-text {
        color: #444;
        line-height: 1.9;
        font-size: 1rem;
    }

    @media (max-width: 768px) {
        .blog-header {
            padding: 70px 15px;
        }
        .blog-header h1 {
            font-size: 2rem;
        }
        .blog-img {
            height: 240px;
        }
    }
</style>

<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/blog-2355684_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 15px;">
       المدونة
    </h1>
    <p style="max-width: 800px; margin: auto; font-size: 1.1rem; line-height: 1.8; color: #eee;">
        مدونة إنالة: اكتشف كل جديد حول فنادقنا وخدماتنا
    </p>
</section>


<!-- 🔹 المقالات -->
<section class="blog-section">

    <article class="blog-article">
        <img src="../img/downloadwebp.webp" alt="فالح الفالح" class="blog-img">
        <div class="blog-content">
            <h2>أ. فالح الفالح يتحدث عن تطلعات لجنة السياحة والترفيه</h2>
            <div class="blog-meta">Enala انالة | March 04,2025 | 0 تعليقات</div>
            <p class="blog-text">
                أ. فالح الفالح رئيس لجنة السياحة والترفيه والفعاليات بـ #غرفة_الرياض متحدثاً عن تطلعات اللجنة نحو خدمة القطاع السياحي،
                مبينًا أهمية تطوير البرامج والمبادرات التي تخدم السياحة الداخلية وتعزز مكانة المملكة كوجهة مميزة للسياح المحليين والعالميين.
            </p>
        </div>
    </article>

    <article class="blog-article">
        <img src="../img/download.jpeg" alt="فوزر الرئيس التنفيذي" class="blog-img">
        <div class="blog-content">
            <h2>فوزر الرئيس التنفيذي لمجموعة إناله للفنادق والمنتجعات</h2>
            <div class="blog-meta">Enala انالة | March 04,2025 | 0 تعليقات</div>
            <p class="blog-text">
                أعلن فوزر الرئيس التنفيذي لمجموعة إناله للفنادق والمنتجعات عن انطلاق مبادرات جديدة لدعم السياحة المحلية،
                مؤكدًا أهمية رفع جودة الخدمات السياحية وتوسيع نطاق المنتجعات الفاخرة التي تقدم تجارب راقية ومتكاملة للزوار.
            </p>
        </div>
    </article>

    <article class="blog-article">
        <img src="../img/673c451c83232_yom-alrgl-lynkd-an-otoytrjpg.jpg" alt="اليوم العالمي للرجل" class="blog-img">
        <div class="blog-content">
            <h2>اليوم العالمي للرجل ومنتجعات إناله السياحية في الرياض</h2>
            <div class="blog-meta">Enala انالة | November 19,2024 | 0 تعليقات</div>
            <p class="blog-text">
                يجسد اليوم العالمي للرجل فرصة لتقدير دور الرجال في المجتمع، بينما يمثل منتجع إناله الترفيهي في الرياض مكانًا مثاليًا
                للاحتفاء بهذه المناسبة من خلال الأنشطة الترفيهية التي تعزز التفاعل الاجتماعي وتدعم الصحة النفسية والبدنية.
            </p>
        </div>
    </article>

    <article class="blog-article">
        <img src="../img/673c451c83232_yom-alrgl-lynkd-an-otoytrjpg.jpg" alt="اليوم العالمي للتأتأة" class="blog-img">
        <div class="blog-content">
            <h2>اليوم العالمي للتأتأة: صوت الإرادة وقوة الكلمة</h2>
            <div class="blog-meta">Enala انالة | October 22,2023 | 0 تعليقات</div>
            <p class="blog-text">
                نحتفل باليوم العالمي للتأتأة لتسليط الضوء على التحديات التي يواجهها الأفراد الذين يعانون من اضطرابات النطق،
                وتقدير عزيمتهم في التواصل والتعبير عن أفكارهم رغم الصعوبات، مما يبرز جمال التنوع في قدراتنا الإنسانية.
            </p>
        </div>
    </article>

    <article class="blog-article">
        <img src="../img/673c451c83232_yom-alrgl-lynkd-an-otoytrjpg.jpg" alt="اليوم العالمي للصحة النفسية" class="blog-img">
        <div class="blog-content">
            <h2>اليوم العالمي للصحة النفسية: استثمار في رفاهيتك</h2>
            <div class="blog-meta">Enala انالة | October 10,2023 | 0 تعليقات</div>
            <p class="blog-text">
                يوماً بعد يوم، تتزايد الضغوط النفسية في حياتنا. يأتي اليوم العالمي للصحة النفسية كفرصة لتخصيص وقت للهدوء والاسترخاء،
                ومنتجعات إناله تقدم بيئة مثالية للاستجمام والعناية بالصحة النفسية من خلال أجواء مريحة وخدمات راقية.
            </p>
        </div>
    </article>

</section>
@endsection
