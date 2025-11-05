@extends('admin.layouts.dashboard.app')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>📬 المشتركين في النشرة البريدية</h1>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">قائمة المشتركين</h3>
            </div>

            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>البريد الإلكتروني</th>
                            <th>تاريخ الاشتراك</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($subscribers as $subscriber)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $subscriber->email }}</td>
                                <td>{{ $subscriber->created_at->format('Y-m-d / H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center text-muted">لا يوجد مشتركين حالياً</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-3">
                    {{ $subscribers->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
