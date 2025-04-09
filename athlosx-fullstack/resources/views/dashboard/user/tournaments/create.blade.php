@extends('dashboard.user.layouts.app')

@section('user_title', 'إضافة بطولة جديدة - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">إضافة بطولة جديدة</h5>

                                    <form action="{{ route('user.tournaments.store') }}" method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <label for="name">اسم البطولة</label>
                                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="start_date">تاريخ البداية</label>
                                            <input type="date" id="start_date" name="start_date" class="form-control @error('start_date') is-invalid @enderror" value="{{ old('start_date') }}" required>
                                            @error('start_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="end_date">تاريخ النهاية</label>
                                            <input type="date" id="end_date" name="end_date" class="form-control @error('end_date') is-invalid @enderror" value="{{ old('end_date') }}" required>
                                            @error('end_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="type">نوع البطولة</label>
                                            <input type="text" id="type" name="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}" required>
                                            @error('type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="description">الوصف</label>
                                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="clubs">الأندية المشاركة</label>
                                            <select id="clubs" name="clubs[]" class="form-control @error('clubs') is-invalid @enderror" multiple>
                                                @foreach ($clubs as $club)
                                                    <option value="{{ $club->id }}" {{ in_array($club->id, old('clubs', [])) ? 'selected' : '' }}>{{ $club->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('clubs')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">اضغط على Ctrl أو Cmd لتحديد أكثر من نادٍ</small>
                                        </div>

                                        <button type="submit" class="btn btn-primary">إضافة البطولة</button>
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