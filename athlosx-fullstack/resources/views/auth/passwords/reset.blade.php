@extends('auth.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card-auth tw-bg-[#f6f7fb] dark:tw-bg-[#171717] tw-rounded-xl p-4">
                <div class="card-header py-3">إعادة تعيين كلمة السر</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-12 col-form-label text-md-end">البريد الالكتروني</label>

                            <div class="col-12">
                                <input id="email" type="email" class="input tw-h-full tw-w-full !tw-border-gray-600 tw-p-2 tw-outline-none @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-12 col-form-label text-md-end">كلمة السر</label>

                            <div class="col-12">
                                <input id="password" type="password" class="input tw-h-full tw-w-full !tw-border-gray-600 tw-p-2 tw-outline-none @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-12 col-form-label text-md-end">تأكيد كلمة السر</label>

                            <div class="col-12">
                                <input id="password-confirm" type="password" class="input tw-h-full tw-w-full !tw-border-gray-600 tw-p-2 tw-outline-none" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-12 offset-md-4">
                                <button type="submit" class="btn !tw-rounded-full !tw-border-[1px] !tw-text-black !tw-border-solid !tw-border-black  dark:!tw-text-white
                    dark:!tw-border-gray-300 !tw-bg-transparent tw-transition-colors tw-duration-[0.3s] mb-3">
                                    إعادة تعيين كلمة السر
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
