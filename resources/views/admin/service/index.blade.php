@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
        <h1>خدمات شركة مضياف</h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-header"><h3 class="box-title">تحديث البيانات</h3></div>
            <div class="box-body">

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('dashboard.services.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <label>عنوان القسم</label>
                    <input type="text" name="title" class="form-control" value="{{ $service->title }}">
                            <label> الوصف</label>
                    {{-- <input type="text" name="description" class="form-control" value="{{ $service->description }}"> --}}
 <textarea name="description" class="form-control" rows="4">{{ old('description', $service->description ?? '') }}</textarea>
                    <hr>

                    <div class="row">

                        @foreach([1,2,3,4,5,6] as $i)
                        <div class="col-md-4 mb-3">
                            <label>صورة {{ $i }}</label>
                            <input type="file" name="image{{ $i }}" class="form-control">

                            @php $img = 'image'.$i; @endphp
                            @if($service->$img)
                            <img src="{{ asset($service->$img) }}" width="100" class="mt-2">
                            @endif

                            <label class="mt-2">عنوان الخدمة</label>
                            <input type="text" name="caption{{ $i }}" class="form-control" value="{{ $service->{'caption'.$i} }}">
                        </div>
                        @endforeach

                    </div>

                    <button class="btn btn-success mt-3">حفظ</button>
                </form>

            </div>
        </div>
    </section>
</div>
@endsection
