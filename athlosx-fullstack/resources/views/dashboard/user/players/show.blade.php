@extends('dashboard.user.layouts.app')

@section('user_title', 'تفاصيل اللاعب - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">تفاصيل اللاعب: {{ $player->full_name }}</h5>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>الاسم الكامل:</strong> {{ $player->full_name }}</p>
                                            <p><strong>تاريخ الميلاد:</strong> {{ $player->birth_date }}</p>
                                            <p><strong>الجنسية:</strong> {{ $player->nationality }}</p>
                                            <p><strong>الرقم:</strong> {{ $player->number ?? 'غير محدد' }}</p>
                                            <p><strong>المركز:</strong> {{ $player->position }}</p>
                                            <p><strong>الطول:</strong> {{ $player->height ? $player->height . ' سم' : 'غير محدد' }}</p>
                                            <p><strong>الوزن:</strong> {{ $player->weight ? $player->weight . ' كجم' : 'غير محدد' }}</p>
                                            <p><strong>القدم المفضلة:</strong> {{ $player->preferred_foot ?? 'غير محددة' }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>عدد المباريات:</strong> {{ $player->matches_played ?? '0' }}</p>
                                            <p><strong>عدد الأهداف:</strong> {{ $player->goals ?? '0' }}</p>
                                            <p><strong>عدد التمريرات الحاسمة:</strong> {{ $player->assists ?? '0' }}</p>
                                            <p><strong>تاريخ الانضمام:</strong> {{ $player->join_date }}</p>
                                            <p><strong>الحالة:</strong> {{ $player->status }}</p>
                                            <p><strong>بداية العقد:</strong> {{ $player->contract_start ?? 'غير محدد' }}</p>
                                            <p><strong>نهاية العقد:</strong> {{ $player->contract_end ?? 'غير محدد' }}</p>
                                            <p><strong>الفريق:</strong> {{ $player->team->name }}</p>
                                            <p><strong>الصورة الشخصية:</strong></p>
                                            @if($player->photo)
                                                <img src="{{ asset('storage/' . $player->photo) }}" alt="{{ $player->full_name }}" width="150" class="img-fluid">
                                            @else
                                                <span>لا توجد صورة</span>
                                            @endif
                                        </div>
                                    </div>

                                    <a href="{{ route('user.players.index') }}" class="btn btn-primary mt-3">رجوع إلى القائمة</a>
                                    <a href="{{ route('user.players.edit', $player) }}" class="btn btn-warning mt-3">تعديل اللاعب</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection