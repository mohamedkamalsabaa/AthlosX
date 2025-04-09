@extends('dashboard.user.layouts.app')

@section('user_title', 'تعديل الملف الشخصي - لوحة تحكم المدير')

@section('user_main')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-12 my-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <h5 class="card-title mb-4">تعديل الملف الشخصي</h5>

                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <form action="{{ route('user.profile.update') }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="name">الاسم</label>
                                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                                                   value="{{ old('name', $user->name) }}" required>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="email">البريد الإلكتروني</label>
                                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                                   value="{{ old('email', $user->email) }}" required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                        

                                        <div class="form-group">
                                            <label for="password">كلمة المرور الجديدة (اختياري)</label>
                                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation">تأكيد كلمة المرور</label>
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
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
