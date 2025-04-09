@extends('dashboard.user.layouts.app')

@section('user_title', 'تفاصيل النادي - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">تفاصيل النادي: {{ $club->name }}</h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>اسم النادي:</strong> {{ $club->name }}</p>
                                            <p><strong>تاريخ التأسيس:</strong> {{ $club->founded_date ?? 'غير محدد' }}</p>
                                            <p><strong>المدينة:</strong> {{ $club->city }}</p>
                                            <p><strong>الدولة:</strong> {{ $club->country }}</p>
                                            <p><strong>الملعب الرئيسي:</strong> {{ $club->stadium }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>المدرب الحالي:</strong> {{ $club->current_coach }}</p>
                                            <p><strong>البطولات:</strong> {{ $club->titles ?? 'غير محددة' }}</p>
                                            <p><strong>الموقع الإلكتروني:</strong> 
                                                @if($club->website)
                                                    <a href="{{ $club->website }}" target="_blank">{{ $club->website }}</a>
                                                @else
                                                    غير محدد
                                                @endif
                                            </p>
                                            <p><strong>شعار النادي:</strong></p>
                                            @if($club->logo)
                                                <img src="{{ asset('storage/' . $club->logo) }}" alt="{{ $club->name }}" width="150" class="img-fluid">
                                            @else
                                                <span>لا يوجد شعار</span>
                                            @endif
                                        </div>
                                    </div>

                                    <a href="{{ route('user.clubs.index') }}" class="btn btn-primary mt-3">رجوع إلى القائمة</a>
                                    <a href="{{ route('user.clubs.edit', $club) }}" class="btn btn-warning mt-3">تعديل النادي</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection