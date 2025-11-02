@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

<a href="{{ route('modyaf_services.create') }}" class="btn btn-success mb-3">إضافة فرع</a>

<table class="table table-bordered text-center">
    <tr>
        <th>صورة</th>
        <th>الاسم</th>
        <th>العنوان</th>
        <th>هاتف</th>
        <th>خيارات</th>
    </tr>

    @foreach($services as $s)
    <tr>
        <td><img src="{{ asset($s->image) }}" width="60"></td>
        <td>{{ $s->title }}</td>
        <td>{{ $s->address }}</td>
        <td>{{ $s->phone }}</td>
        <td>
            <a href="{{ route('modyaf_services.edit',$s) }}" class="btn btn-primary btn-sm">تعديل</a>
            <form action="{{ route('modyaf_services.destroy',$s) }}" method="POST" style="display:inline-block">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">حذف</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</div>
@endsection
