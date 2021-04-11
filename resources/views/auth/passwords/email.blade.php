@extends('layouts.app')

@section('content')
<div class="container">
            <h1>{{ __('Zresetuj hasło') }}</h1>
            <div class="card">
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="in">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="in">
                            
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Wyślij link resetujący hasło') }}
                                </button>
                            
                        </div>
                    </form>
              
            
        
            </div>
</div>
@endsection
