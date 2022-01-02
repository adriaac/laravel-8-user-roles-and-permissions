@extends('layouts.app')

@section('main_content')
    <div class="card">
        <div class="card-body p-md-5 mx-md-4">

            <div class="text-center">
                <img src="{{ asset('/storage/img/logo.png') }}" style="width: 185px;" alt="Logo">
                <h3 class="mt-1 mb-5 pb-1">Web Design Service</h3>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <p>Please login to your account</p>

                <div class="form-outline mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">{{ __('Login') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
