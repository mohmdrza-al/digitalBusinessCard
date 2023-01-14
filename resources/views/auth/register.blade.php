@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                               placeholder="{{ __('Name') }}">
                        <br>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="email" class="login__input form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email"
                               placeholder="{{ __('Email') }}">
                        <br>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input form-control @error('password') is-invalid @enderror"
                               name="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">
                        <br>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input form-control" name="password_confirmation" required
                               autocomplete="new-password" placeholder="{{ __('Password Confirm') }}">
                    </div>
                    <button class="button login__submit" type="submit">
                        <span class="button__text">{{ __('Register') }}</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                </form>
                {{--                <div class="social-login">--}}
                {{--                    <h3>log in via</h3>--}}
                {{--                    <div class="social-icons">--}}
                {{--                        <a href="#" class="social-login__icon fab fa-instagram"></a>--}}
                {{--                        <a href="#" class="social-login__icon fab fa-facebook"></a>--}}
                {{--                        <a href="#" class="social-login__icon fab fa-twitter"></a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>

@endsection
