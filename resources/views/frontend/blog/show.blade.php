@extends('frontend.layouts.master')

@section('title', $post['title'] ?? 'مقال')

@section('content')
<section class="page-header" style="
    text-align: center;
    padding: 80px 20px;
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('{{ asset('img/contact-us-6921414_1280.jpg') }}') center/cover no-repeat;
    color: #fff;
">
    <h1 style="font-size: 3rem; color: #D9EF82; margin-bottom: 15px;">
        تواصل معنا
    </h1>
    <p style="max-width: 800px; margin: auto; font-size: 1.1rem; line-height: 1.8; color: #eee;">
        نحن في <strong>فنادق إنالة</strong> نرحب بتواصلكم واستفساراتكم في أي وقت.
    </p>
</section>
<section class="container py-5" style="direction: rtl;">
  <div class="row">
    <div class="col-lg-8 mx-auto">
      <img src="{{ $post['image'] }}" class="img-fluid rounded mb-4" alt="{{ $post['title'] }}">
      <h1 class="fw-bold mb-3">{{ $post['title'] }}</h1>
      <div class="text-muted mb-4">
        بواسطة <strong>{{ $post['author'] }}</strong> — {{ \Carbon\Carbon::parse($post['date'])->format('F d, Y') }}
      </div>
      <div class="post-content fs-5" style="line-height: 1.8;">
        {!! nl2br(e($post['content'] ?? '')) !!}
      </div>

      <div class="mt-5">
        <a href="{{ route('blog.index') }}" class="btn btn-outline-secondary">العودة إلى المدونة</a>
      </div>
    </div>
  </div>
</section>
@endsection
