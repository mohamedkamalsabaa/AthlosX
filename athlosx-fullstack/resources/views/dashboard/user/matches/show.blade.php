@extends('dashboard.user.layouts.app')

@section('user_title', 'تفاصيل المباراة - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">تفاصيل المباراة: {{ $match->team1->name }} ضد {{ $match->team2->name }}</h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>الفريق الأول:</strong> {{ $match->team1->name }}</p>
                                            <p><strong>الفريق الثاني:</strong> {{ $match->team2->name }}</p>
                                            <p><strong>تاريخ ووقت المباراة:</strong> {{ $match->match_datetime }}</p>
                                            <p><strong>النتيجة:</strong> {{ $match->result ?? 'غير محددة' }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>نوع المباراة:</strong> {{ $match->type }}</p>
                                            <p><strong>المكان:</strong> {{ $match->venue }}</p>
                                            <p><strong>الحكام:</strong> {{ $match->referees ?? 'غير محددين' }}</p>
                                            <p><strong>البطولة:</strong> {{ $match->tournament ? $match->tournament->name : 'غير مرتبطة ببطولة' }}</p>
                                        </div>
                                    </div>

                                    <a href="{{ route('user.matches.index') }}" class="btn btn-primary mt-3">رجوع إلى القائمة</a>
                                    <a href="{{ route('user.matches.edit', $match) }}" class="btn btn-warning mt-3">تعديل المباراة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection