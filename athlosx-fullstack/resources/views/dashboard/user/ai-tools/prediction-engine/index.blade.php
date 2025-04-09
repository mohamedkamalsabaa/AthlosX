@extends('dashboard.user.layouts.app')

@section('user_title', 'محرك التنبؤ - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-primary text-white text-center">
                            <h4 class="mb-0">محرك التنبؤ</h4>
                        </div>
                        <div class="card-body p-4">
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                            @endif

                            <form action="{{ route('user.ai-tools.prediction-engine.predict') }}" method="POST">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-md-5 text-center">
                                        <div class="form-group">
                                            <label for="team_id" class="font-weight-bold">اختر الفريق</label>
                                            <select id="team_id" name="team_id"
                                                class="form-control @error('team_id') is-invalid @enderror"
                                                onchange="updateLogo('team', this.value)" required>
                                                <option value="">-- اختر فريق --</option>
                                                @foreach ($teams as $teamOption)
                                                    <option value="{{ $teamOption->id }}"
                                                        {{ old('team_id', $team->id ?? '') == $teamOption->id ? 'selected' : '' }}
                                                        data-logo="{{ $teamOption->club->logo ? asset('public/storage/' . $teamOption->club->logo) : asset('public/images/default-logo.png') }}">
                                                        {{ $teamOption->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('team_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div id="team-logo" class="mt-3">
                                            @if (old('team_id') && $team)
                                                <img src="{{ $team->club->logo ? asset('public/storage/' . $team->club->logo) : asset('public/images/default-logo.png') }}"
                                                    alt="{{ $team->name }}" class="img-fluid" style="max-height: 100px;">
                                            @else
                                                <img src="{{ asset('public/images/default-logo.png') }}" alt="شعار افتراضي"
                                                    class="img-fluid" style="max-height: 100px;">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-2 text-center">
                                        <h3 class="font-weight-bold text-primary">VS</h3>
                                    </div>

                                    <div class="col-md-5 text-center">
                                        <div class="form-group">
                                            <label for="opponent_id" class="font-weight-bold">اختر الخصم</label>
                                            <select id="opponent_id" name="opponent_id"
                                                class="form-control @error('opponent_id') is-invalid @enderror"
                                                onchange="updateLogo('opponent', this.value)" required>
                                                <option value="">-- اختر خصم --</option>
                                                @foreach ($teams as $teamOption)
                                                    <option value="{{ $teamOption->id }}"
                                                        {{ old('opponent_id', $opponent->id ?? '') == $teamOption->id ? 'selected' : '' }}
                                                        data-logo="{{ $teamOption->club->logo ? asset('public/storage/' . $teamOption->club->logo) : asset('public/images/default-logo.png') }}">
                                                        {{ $teamOption->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('opponent_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div id="opponent-logo" class="mt-3">
                                            @if (old('opponent_id') && $opponent)
                                                <img src="{{ $opponent->club->logo ? asset('public/storage/' . $opponent->club->logo) : asset('public/images/default-logo.png') }}"
                                                    alt="{{ $opponent->name }}" class="img-fluid"
                                                    style="max-height: 100px;">
                                            @else
                                                <img src="{{ asset('public/images/default-logo.png') }}" alt="شعار افتراضي"
                                                    class="img-fluid" style="max-height: 100px;">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center mt-4">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="date" class="font-weight-bold">تاريخ المباراة</label>
                                            <input type="date" id="date" name="date"
                                                class="form-control @error('date') is-invalid @enderror"
                                                value="{{ old('date') }}" required>
                                            @error('date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">احصل على التوقع</button>
                                </div>
                            </form>

                            <!-- عرض النتيجة -->
                            @if (isset($prediction) && !isset($prediction['error']))
                                <div class="mt-5 text-center">
                                    <h5 class="font-weight-bold mb-3">نتيجة التوقع</h5>
                                    <div class="progress rounded" style="height: 25px;">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: {{ $prediction['win_probability'] }}%;"
                                            aria-valuenow="{{ $prediction['win_probability'] }}" aria-valuemin="0"
                                            aria-valuemax="100">
                                            {{ $team->name }} ({{ $prediction['win_probability'] }}%)
                                        </div>
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            style="width: {{ $prediction['draw_probability'] }}%;"
                                            aria-valuenow="{{ $prediction['draw_probability'] }}" aria-valuemin="0"
                                            aria-valuemax="100">
                                            تعادل ({{ $prediction['draw_probability'] }}%)
                                        </div>
                                        <div class="progress-bar bg-danger" role="progressbar"
                                            style="width: {{ $prediction['loss_probability'] }}%;"
                                            aria-valuenow="{{ $prediction['loss_probability'] }}" aria-valuemin="0"
                                            aria-valuemax="100">
                                            {{ $opponent->name }} ({{ $prediction['loss_probability'] }}%)
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted">
                                            <strong>{{ $team->name }}:</strong> نسبة الفوز
                                            {{ $prediction['win_probability'] }}%<br>
                                            <strong>تعادل:</strong> {{ $prediction['draw_probability'] }}%<br>
                                            <strong>{{ $opponent->name }}:</strong> نسبة الفوز
                                            {{ $prediction['loss_probability'] }}%
                                        </p>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <h6 class="font-weight-bold text-white text-center mb-3">{{ $team->name }}
                                            </h6>
                                            <div class="row">
                                                <div class="col-12 mb-3">
                                                    <div class="card border-success shadow-sm">
                                                        <div
                                                            class="card-header text-white d-flex align-items-center">
                                                            <i class="fas fa-shield-alt mr-2"></i>
                                                            <h6 class="mb-0">نقاط القوة</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="text-muted">
                                                                {{ $prediction['team_strengths'] ?? 'سيتم تحديث نقاط القوة قريبًا' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- نقاط الضعف -->
                                                <div class="col-12 mb-3">
                                                    <div class="card border-danger shadow-sm">
                                                        <div
                                                            class="card-header text-white d-flex align-items-center">
                                                            <i class="fas fa-exclamation-triangle mr-2"></i>
                                                            <h6 class="mb-0">نقاط الضعف</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="text-muted">
                                                                {{ $prediction['team_weaknesses'] ?? 'سيتم تحديث نقاط الضعف قريبًا' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- التكتيك الأمثل -->
                                                <div class="col-12 mb-3">
                                                    <div class="card border-primary shadow-sm">
                                                        <div
                                                            class="card-header text-white d-flex align-items-center">
                                                            <i class="fas fa-chess mr-2"></i>
                                                            <h6 class="mb-0">التكتيك الأمثل</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="text-muted">
                                                                {{ $prediction['team_optimal_tactic'] ?? 'سيتم تحديث التكتيك الأمثل قريبًا' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- تفاصيل الخصم -->
                                        <div class="col-md-6">
                                            <h6 class="font-weight-bold text-white text-center mb-3">
                                                {{ $opponent->name }}</h6>
                                            <div class="row">
                                                <!-- نقاط القوة -->
                                                <div class="col-12 mb-3">
                                                    <div class="card border-success shadow-sm">
                                                        <div
                                                            class="card-header text-white d-flex align-items-center">
                                                            <i class="fas fa-shield-alt mr-2"></i>
                                                            <h6 class="mb-0">نقاط القوة</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="text-muted">
                                                                {{ $prediction['opponent_strengths'] ?? 'سيتم تحديث نقاط القوة قريبًا' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- نقاط الضعف -->
                                                <div class="col-12 mb-3">
                                                    <div class="card border-danger shadow-sm">
                                                        <div
                                                            class="card-header text-white d-flex align-items-center">
                                                            <i class="fas fa-exclamation-triangle mr-2"></i>
                                                            <h6 class="mb-0">نقاط الضعف</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="text-muted">
                                                                {{ $prediction['opponent_weaknesses'] ?? 'سيتم تحديث نقاط الضعف قريبًا' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- التكتيك الأمثل -->
                                                <div class="col-12 mb-3">
                                                    <div class="card border-primary shadow-sm">
                                                        <div
                                                            class="card-header text-white d-flex align-items-center">
                                                            <i class="fas fa-chess mr-2"></i>
                                                            <h6 class="mb-0">التكتيك الأمثل</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="text-muted">
                                                                {{ $prediction['opponent_optimal_tactic'] ?? 'سيتم تحديث التكتيك الأمثل قريبًا' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function updateLogo(type, teamId) {
            const select = document.querySelector(`#${type}_id`);
            const logoDiv = document.querySelector(`#${type}-logo`);
            const selectedOption = select.options[select.selectedIndex];
            const logoUrl = selectedOption.getAttribute('data-logo');

            logoDiv.innerHTML = `<img src="${logoUrl}" alt="شعار الفريق" class="img-fluid" style="max-height: 100px;">`;
        }

        document.addEventListener('DOMContentLoaded', function() {
            const teamId = document.querySelector('#team_id').value;
            const opponentId = document.querySelector('#opponent_id').value;
            if (teamId) updateLogo('team', teamId);
            if (opponentId) updateLogo('opponent', opponentId);
        });
    </script>
@endsection
