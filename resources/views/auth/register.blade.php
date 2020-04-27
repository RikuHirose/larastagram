@extends('layouts.app')

@section('content')

<div class="card-body">

    <div class="text-center mt-3 mb-3">
        <img src="https://cdn.worldvectorlogo.com/logos/instagram-1.svg" width="25%"/>
        <p class="text-secondary">友達の写真や動画をチェックしよう</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">

            <div class="col-md-12">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">

            <div class="col-md-12">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">

            <div class="col-md-12">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">

            <div class="col-md-12">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="password">
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>

                <div>
                    <span>
                        アカウントをお持ちですか？
                        <a class="btn btn-link" href="{{ route('login') }}">
                            ログインする
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection
