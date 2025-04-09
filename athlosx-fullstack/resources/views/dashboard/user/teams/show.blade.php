@extends('dashboard.user.layouts.app')

@section('user_title', 'تفاصيل الفريق - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">تفاصيل الفريق: {{ $team->name }}</h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>اسم الفريق:</strong> {{ $team->name }}</p>
                                            <p><strong>الفئة العمرية:</strong> {{ $team->age_group ?? 'غير محددة' }}</p>
                                            <p><strong>النادي:</strong> {{ $team->club->name }}</p>
                                            <p><strong>المدرب:</strong> {{ $team->coach }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>التشكيلة الأساسية:</strong> {{ $team->starting_lineup ?? 'غير محددة' }}</p>
                                            <p><strong>الخطة التكتيكية:</strong> {{ $team->tactic ?? 'غير محددة' }}</p>
                                            <p><strong>عدد اللاعبين:</strong> {{ $team->player_count ?? '0' }}</p>
                                        </div>
                                    </div>

                                    <a href="{{ route('user.teams.index') }}" class="btn btn-primary mt-3">رجوع إلى القائمة</a>
                                    <a href="{{ route('user.teams.edit', $team) }}" class="btn btn-warning mt-3">تعديل الفريق</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection