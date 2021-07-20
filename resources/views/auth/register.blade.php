@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="card login-card">
            <h2>Register</h2>

            <div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name">Name</label>

                        <div>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="email">Email Address</label>

                        <div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="password">Password</label>

                        <div>
                            <input id="password" type="password" name="password" required autocomplete="new-password">

                            @error('password')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>

                        <div>
                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div>
                        <div>
                            <button type="submit" class="button">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
