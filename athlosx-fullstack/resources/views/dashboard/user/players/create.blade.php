@extends('dashboard.user.layouts.app')

@section('user_title', 'إضافة لاعب جديد - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">إضافة لاعب جديد</h5>

                                    <form action="{{ route('user.players.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">
                                            <label for="full_name">الاسم الكامل</label>
                                            <input type="text" id="full_name" name="full_name" class="form-control @error('full_name') is-invalid @enderror" value="{{ old('full_name') }}" required>
                                            @error('full_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="birth_date">تاريخ الميلاد</label>
                                            <input type="date" id="birth_date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}" required>
                                            @error('birth_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="nationality">الجنسية</label>
                                            <input type="text" id="nationality" name="nationality" class="form-control @error('nationality') is-invalid @enderror" value="{{ old('nationality') }}" required>
                                            @error('nationality')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="number">الرقم</label>
                                            <input type="number" id="number" name="number" class="form-control @error('number') is-invalid @enderror" value="{{ old('number') }}" min="1">
                                            @error('number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="position">المركز</label>
                                            <input type="text" id="position" name="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}" required>
                                            @error('position')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="height">الطول (سم)</label>
                                            <input type="number" id="height" name="height" class="form-control @error('height') is-invalid @enderror" value="{{ old('height') }}" step="0.1" min="0">
                                            @error('height')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="weight">الوزن (كجم)</label>
                                            <input type="number" id="weight" name="weight" class="form-control @error('weight') is-invalid @enderror" value="{{ old('weight') }}" step="0.1" min="0">
                                            @error('weight')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="preferred_foot">القدم المفضلة</label>
                                            <input type="text" id="preferred_foot" name="preferred_foot" class="form-control @error('preferred_foot') is-invalid @enderror" value="{{ old('preferred_foot') }}">
                                            @error('preferred_foot')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="matches_played">عدد المباريات</label>
                                            <input type="number" id="matches_played" name="matches_played" class="form-control @error('matches_played') is-invalid @enderror" value="{{ old('matches_played') }}" min="0">
                                            @error('matches_played')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="goals">عدد الأهداف</label>
                                            <input type="number" id="goals" name="goals" class="form-control @error('goals') is-invalid @enderror" value="{{ old('goals') }}" min="0">
                                            @error('goals')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="assists">عدد التمريرات الحاسمة</label>
                                            <input type="number" id="assists" name="assists" class="form-control @error('assists') is-invalid @enderror" value="{{ old('assists') }}" min="0">
                                            @error('assists')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="photo">صورة شخصية</label>
                                            <input type="file" id="photo" name="photo" class="form-control @error('photo') is-invalid @enderror">
                                            @error('photo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="join_date">تاريخ الانضمام</label>
                                            <input type="date" id="join_date" name="join_date" class="form-control @error('join_date') is-invalid @enderror" value="{{ old('join_date') }}" required>
                                            @error('join_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="status">الحالة</label>
                                            <select id="status" name="status" class="form-control @error('status') is-invalid @enderror" required>
                                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>أساسي</option>
                                                <option value="substitute" {{ old('status') == 'substitute' ? 'selected' : '' }}>احتياطي</option>
                                                <option value="injured" {{ old('status') == 'injured' ? 'selected' : '' }}>مصاب</option>
                                                <option value="loaned" {{ old('status') == 'loaned' ? 'selected' : '' }}>معار</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="contract_start">بداية العقد</label>
                                            <input type="date" id="contract_start" name="contract_start" class="form-control @error('contract_start') is-invalid @enderror" value="{{ old('contract_start') }}">
                                            @error('contract_start')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="contract_end">نهاية العقد</label>
                                            <input type="date" id="contract_end" name="contract_end" class="form-control @error('contract_end') is-invalid @enderror" value="{{ old('contract_end') }}">
                                            @error('contract_end')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="team_id">الفريق</label>
                                            <select id="team_id" name="team_id" class="form-control @error('team_id') is-invalid @enderror" required>
                                                <option value="">اختر الفريق</option>
                                                @foreach ($teams as $team)
                                                    <option value="{{ $team->id }}" {{ old('team_id') == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('team_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-primary">إضافة اللاعب</button>
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