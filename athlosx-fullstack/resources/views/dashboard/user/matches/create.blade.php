@extends('dashboard.user.layouts.app')

@section('user_title', 'إضافة مباراة جديدة - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">إضافة مباراة جديدة</h5>

                                    <form action="{{ route('user.matches.store') }}" method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <label for="team1_id">الفريق الأول</label>
                                            <select id="team1_id" name="team1_id" class="form-control @error('team1_id') is-invalid @enderror" required>
                                                <option value="">اختر الفريق الأول</option>
                                                @foreach ($teams as $team)
                                                    <option value="{{ $team->id }}" {{ old('team1_id') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('team1_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="team2_id">الفريق الثاني</label>
                                            <select id="team2_id" name="team2_id" class="form-control @error('team2_id') is-invalid @enderror" required>
                                                <option value="">اختر الفريق الثاني</option>
                                                @foreach ($teams as $team)
                                                    <option value="{{ $team->id }}" {{ old('team2_id') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('team2_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="match_datetime">تاريخ ووقت المباراة</label>
                                            <input type="datetime-local" id="match_datetime" name="match_datetime" class="form-control @error('match_datetime') is-invalid @enderror" value="{{ old('match_datetime') }}" required>
                                            @error('match_datetime')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="result">النتيجة</label>
                                            <input type="text" id="result" name="result" class="form-control @error('result') is-invalid @enderror" value="{{ old('result') }}">
                                            @error('result')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="type">نوع المباراة</label>
                                            <input type="text" id="type" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}" required>
                                            @error('type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="venue">المكان</label>
                                            <input type="text" id="venue" name="venue" class="form-control @error('venue') is-invalid @enderror" value="{{ old('venue') }}" required>
                                            @error('venue')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="referees">الحكام</label>
                                            <input type="text" id="referees" name="referees" class="form-control @error('referees') is-invalid @enderror" value="{{ old('referees') }}">
                                            @error('referees')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="tournament_id">البطولة</label>
                                            <select id="tournament_id" name="tournament_id" class="form-control @error('tournament_id') is-invalid @enderror">
                                                <option value="">اختر البطولة (اختياري)</option>
                                                @foreach ($tournaments as $tournament)
                                                    <option value="{{ $tournament->id }}" {{ old('tournament_id') == $tournament->id ? 'selected' : '' }}>{{ $tournament->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('tournament_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary">إضافة المباراة</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection