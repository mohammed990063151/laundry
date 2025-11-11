@extends('admin.layouts.dashboard.app')
@section('title', ' الصفحة  الشركاء لوحة  التحكم - بونا ')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>الشركاء</h1>
        <a href="{{ route('dashboard.partners.create') }}" class="btn btn-success">➕ إضافة شريك جديد</a>
    </section>

    <section class="content">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="box box-primary">
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>الاسم</th>
                            <th>الشعار</th>
                            <th>الرابط</th>
                            <th>التحكم</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($partners as $partner)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $partner->name }}</td>
                                <td>
                                    @if($partner->logo)
                                        <img src="{{ asset($partner->logo) }}" width="80" style="border-radius:8px;">
                                    @endif
                                </td>
                                <td>
                                    @if($partner->link)
                                        <a href="{{ $partner->link }}" target="_blank">{{ $partner->link }}</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('dashboard.partners.edit', $partner->id) }}" class="btn btn-primary btn-sm">تعديل</a>
                                    <form action="{{ route('dashboard.partners.destroy', $partner->id) }}" method="POST" style="display:inline-block;">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('تأكيد الحذف؟')">حذف</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="5" class="text-center">لا يوجد شركاء بعد</td></tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $partners->links() }}
            </div>
        </div>
    </section>
</div>
@endsection
