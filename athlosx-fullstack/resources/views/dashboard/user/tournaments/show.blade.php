@extends('dashboard.user.layouts.app')

@section('user_title', 'تفاصيل البطولة - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">تفاصيل البطولة: {{ $tournament->name }}</h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>اسم البطولة:</strong> {{ $tournament->name }}</p>
                                            <p><strong>تاريخ البداية:</strong> {{ $tournament->start_date }}</p>
                                            <p><strong>تاريخ النهاية:</strong> {{ $tournament->end_date }}</p>
                                            <p><strong>النوع:</strong> {{ $tournament->type }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>الوصف:</strong> {{ $tournament->description ?? 'غير محدد' }}</p>
                                            <p><strong>الأندية المشاركة:</strong></p>
                                            @if($tournament->clubs->isNotEmpty())
                                                <ul>
                                                    @foreach($tournament->clubs as $club)
                                                        <li>{{ $club->name }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <span>لا توجد أندية مشاركة</span>
                                            @endif
                                        </div>
                                    </div>

                                    <a href="{{ route('user.tournaments.index') }}" class="btn btn-primary mt-3">رجوع إلى القائمة</a>
                                    <a href="{{ route('user.tournaments.edit', $tournament) }}" class="btn btn-warning mt-3">تعديل البطولة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection