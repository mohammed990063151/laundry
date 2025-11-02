@extends('admin.layouts.dashboard.app')

@section('title','إدارة المشاريع')

@section('content')
<style>
.box-wrapper {
    background: #f8fafb;
    border-radius: 12px;
    padding: 25px;
    border: 1px solid #e9ecef;
    transition: .3s;
}
.box-wrapper:hover {
    box-shadow: 0 0 25px rgba(0,0,0,.07);
}

.page-title {
    font-size: 26px;
    font-weight: bold;
    color: #1C5036;
    margin-bottom: 20px;
}
.btn-add {
    background: #27ae60;
    color: #fff !important;
    border-radius: 50px;
    padding: 10px 18px;
    font-weight: bold;
    transition: .3s;
}
.btn-add:hover {
    background: #1e8f4c;
}
.table thead {
    background: #ecfff1;
}
.table thead th {
    color: #1c5530;
    font-weight: bold;
}
.project-img {
    width: 70px;
    height: 70px;
    border-radius: 8px;
    object-fit: cover;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}
.action-btn {
    border-radius: 8px !important;
    font-size: 13px;
    padding: 6px 12px !important;
}
</style>

<div class="content-wrapper">
<section class="content-header">
    <h2 class="page-title"><i class="fa fa-briefcase"></i> إدارة المشاريع</h2>
</section>

<section class="content">
<div class="box-wrapper">

@if(session('success'))
    <div class="alert alert-success"><i class="fa fa-check"></i> {{ session('success') }}</div>
@endif

<a href="{{ route('dashboard.projects.create') }}" class="btn btn-add mb-3">
    <i class="fa fa-plus-circle"></i> إضافة مشروع جديد
</a>

<table class="table table-bordered text-center align-middle">
    <thead>
        <tr>
            <th>#</th>
            <th>الصورة</th>
            <th>العنوان</th>
            <th>الموقع</th>
            <th>تاريخ الإنجاز</th>
            <th>التحكم</th>
        </tr>
    </thead>
    <tbody>
        @forelse($projects as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
                <img src="{{ asset($p->image ?? 'img/noimage.jpg') }}" class="project-img" alt="{{ $p->title }}">
            </td>
            <td>{{ $p->title }}</td>
            <td>{{ $p->location }}</td>
            <td>{{ $p->completion_date }}</td>
            <td>
                <a href="{{ route('dashboard.projects.edit',$p) }}" class="btn btn-sm btn-primary action-btn">
                    <i class="fa fa-edit"></i> تعديل
                </a>
                <form action="{{ route('dashboard.projects.destroy',$p) }}" method="POST" style="display:inline-block;">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger action-btn"
                            onclick="return confirm('⚠️ هل تريد حذف هذا المشروع؟')">
                        <i class="fa fa-trash"></i> حذف
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6"><p class="text-muted">لا توجد مشاريع حالياً</p></td>
        </tr>
        @endforelse
    </tbody>
</table>

{{ $projects->links() }}

</div>
</section>
</div>
@endsection
