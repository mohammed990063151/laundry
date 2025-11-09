@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <h1>خدمات بونا</h1>
  </section>

  <section class="content">
    <a href="{{ route('dashboard.services.create') }}" class="btn btn-success mb-3">إضافة خدمة جديدة</a>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>الصورة</th>
          <th>العنوان</th>
          <th>الترتيب</th>
          <th>التحكم</th>
        </tr>
      </thead>
      <tbody>
        @foreach($hero as $service)
        <tr>
          <td><img src="{{ asset($service->image) }}" width="80"></td>
          <td>{{ $service->title }}</td>
          <td>{{ $service->sort_order }}</td>
          <td>
            <a href="{{ route('dashboard.bona.services.edit',$service->id) }}" class="btn btn-sm btn-primary">تعديل</a>
            <form action="{{ route('dashboard.bona.services.destroy',$service->id) }}" method="POST" style="display:inline">
              @csrf @method('DELETE')
              <button class="btn btn-sm btn-danger" onclick="return confirm('تأكيد الحذف؟')">حذف</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </section>
</div>
@endsection
