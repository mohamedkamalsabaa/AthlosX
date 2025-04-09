@extends('dashboard.user.layouts.app')

@section('user_title', 'تعديل الفريق - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">تعديل الفريق: {{ $team->name }}</h5>

                                    <form action="{{ route('user.teams.update', $team) }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="name">اسم الفريق</label>
                                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $team->name) }}" required>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="age_group">الفئة العمرية</label>
                                            <input type="text" id="age_group" name="age_group" class="form-control @error('age_group') is-invalid @enderror" value="{{ old('age_group', $team->age_group) }}">
                                            @error('age_group')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="club_id">النادي</label>
                                            <select id="club_id" name="club_id" class="form-control @error('club_id') is-invalid @enderror" required>
                                                <option value="">اختر النادي</option>
                                                @foreach ($clubs as $club)
                                                    <option value="{{ $club->id }}" {{ old('club_id', $team->club_id) == $club->id ? 'selected' : '' }}>{{ $club->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('club_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="coach">المدرب</label>
                                            <input type="text" id="coach" name="coach" class="form-control @error('coach') is-invalid @enderror" value="{{ old('coach', $team->coach) }}" required>
                                            @error('coach')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="starting_lineup">التشكيلة الأساسية</label>
                                            <textarea id="starting_lineup" name="starting_lineup" class="form-control @error('starting_lineup') is-invalid @enderror">{{ old('starting_lineup', $team->starting_lineup) }}</textarea>
                                            @error('starting_lineup')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="tactic">الخطة التكتيكية</label>
                                            <input type="text" id="tactic" name="tactic" class="form-control @error('tactic') is-invalid @enderror" value="{{ old('tactic', $team->tactic) }}">
                                            @error('tactic')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="player_count">عدد اللاعبين</label>
                                            <input type="number" id="player_count" name="player_count" class="form-control @error('player_count') is-invalid @enderror" value="{{ old('player_count', $team->player_count) }}" min="0">
                                            @error('player_count')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
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