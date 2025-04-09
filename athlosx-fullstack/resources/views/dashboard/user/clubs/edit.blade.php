@extends('dashboard.user.layouts.app')

@section('user_title', 'تعديل النادي - لوحة تحكم المستخدم')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">تعديل النادي: {{ $club->name }}</h5>

                                    <form action="{{ route('user.clubs.update', $club) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="name">اسم النادي</label>
                                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $club->name) }}" required>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="founded_date">تاريخ التأسيس</label>
                                            <input type="date" id="founded_date" name="founded_date" class="form-control @error('founded_date') is-invalid @enderror" value="{{ old('founded_date', $club->founded_date) }}">
                                            @error('founded_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="logo">شعار النادي</label>
                                            <input type="file" id="logo" name="logo" class="form-control @error('logo') is-invalid @enderror">
                                            @if($club->logo)
                                                <img src="{{ asset('storage/' . $club->logo) }}" alt="{{ $club->name }}" width="100" class="mt-2">
                                            @endif
                                            @error('logo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="city">المدينة</label>
                                            <input type="text" id="city" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city', $club->city) }}" required>
                                            @error('city')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="country">الدولة</label>
                                            <input type="text" id="country" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ old('country', $club->country) }}" required>
                                            @error('country')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="stadium">الملعب الرئيسي</label>
                                            <input type="text" id="stadium" name="stadium" class="form-control @error('stadium') is-invalid @enderror" value="{{ old('stadium', $club->stadium) }}" required>
                                            @error('stadium')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="current_coach">المدرب الحالي</label>
                                            <input type="text" id="current_coach" name="current_coach" class="form-control @error('current_coach') is-invalid @enderror" value="{{ old('current_coach', $club->current_coach) }}" required>
                                            @error('current_coach')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="titles">البطولات</label>
                                            <textarea id="titles" name="titles" class="form-control @error('titles') is-invalid @enderror">{{ old('titles', $club->titles) }}</textarea>
                                            @error('titles')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="website">الموقع الإلكتروني</label>
                                            <input type="url" id="website" name="website" class="form-control @error('website') is-invalid @enderror" value="{{ old('website', $club->website) }}">
                                            @error('website')
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