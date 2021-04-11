@extends('layouts.app')

@section('content')
<div class="container">
                <h1>{{ __('Zaloguj się') }}</h1>
                <div class="card">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="in">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="in">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Hasło') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="in">
                            
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    
                                
                           
                        </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a id="reset" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </form>
                </div>
</div>
@endsection
