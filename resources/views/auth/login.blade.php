@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="card login-card">
            <h2>Login</h2>

            <div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <label for="email">Email Address</label>

                        <div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                            <input id="password" type="password" name="password" required autocomplete="current-password">

                            @error('password')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        {{-- <div>
                            <div>
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label for="remember">Remember Me</label>
                            </div>
                        </div> --}}
                    </div>

                    <div>
                        <div>
                            <button class="button" type="submit">Login</button>

                            {{-- @if (Route::has('password.request'))
                                <a class="link-sm" href="{{ route('password.request') }}">Forgot Your Password?</a>
                            @endif --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
