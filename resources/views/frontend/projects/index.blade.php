@extends('frontend.layouts.master')

@section('title', 'مشاريعنا - ' . ($setting->name ?? ''))

@section('content')

<style>
.project-card {
    background:#fff;
    border-radius:16px;
    overflow:hidden;
    box-shadow:0 6px 20px rgba(0,0,0,0.08);
    transition:.3s;
}
.project-card:hover {
    transform: translateY(-6px);
    box-shadow:0 12px 30px rgba(0,0,0,0.12);
}
.project-card img {
    width:100%;
    height:220px;
    object-fit:cover;
}
.project-card .content {
    padding:20px;
    text-align:center;
}
.project-card .content h4 {
    color:#1b3b26;
    font-weight:700;
}
.project-card .content p {
    color:#555;
}
</style>

<section class="py-5" style="background:#f8faf8;">
    <div class="container">

        <h2 class="fw-bold text-center mb-5" style="color:#1b3b26;">
            🌿 مشاريعنا
        </h2>

        <div class="row g-4">
            @foreach($projects as $project)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="{{ route('projects.show', $project->id) }}" class="text-decoration-none">
                    <div class="project-card">
                        <img src="{{ asset('storage/app/public/' . $project->image) }}" alt="{{ $project->title }}">

                        <div class="content">
                            <h4>{{ $project->title }}</h4>
                            <p>{{ Str::limit($project->description, 70) }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $projects->links() }}
        </div>

    </div>
</section>

@endsection
