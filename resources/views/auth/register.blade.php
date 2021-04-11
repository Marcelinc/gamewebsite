@extends('layouts.app')

@section('content')
<div class="container">
                
                    <h1>{{ __('Zarejestruj się już teraz') }}</h1>
                    <div class="card">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <div class="in"> 
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Login') }}</label>

                            
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            </div>

                            <div class="in">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                           
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="in">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Hasło') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="in">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Potwierdź hasło') }}</label>

                           
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                        
                            </div>
                        
                                <button type="submit">
                                    {{ __('Zarejestruj') }}
                                </button>
                    </form>
                </div>
</div>

@endsection
