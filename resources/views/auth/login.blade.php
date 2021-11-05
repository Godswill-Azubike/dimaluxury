@extends('auth.layout')

@section('title')
    Login &mdash; DimaLuxuryH
@endsection

@section('componet')
<div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-4">
    <div class="card card-primary shadow mt-3">
        <div class="card-header">
            <h3>Welcome Back!</h3>
        </div>
        <div class="card-body">
            @if (session('status'))
                    <div class="alert alert-success mt-1 mb-1" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            <form method="POST" action="{{ route('login', app('request')->input('ref') ? ['ref' => app('request')->input('ref')] : [] ) }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control @error('email') is-invalid @enderror"
                                    type="email" name="email"
                                    value="{{ old('email') }}"
                                    tabindex="1"
                                    required autofocus />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    {{-- <div class="invalid-feedback">
                        Please fill in your email
                    </div> --}}
                </div>
                <div class="form-group">
                    <div class="d-block">
                        <label for="password" class="control-label">Password</label>
                        <div class="float-right">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request', app('request')->input('ref') ? ['ref' => app('request')->input('ref')] : [] ) }}" class="text-small">
                            {{ __('Forgot your password?') }}
                            </a>
                             @endif
                        </div>
                    </div>
                    <input id="password" class="form-control @error('password') is-invalid @enderror"
                                type="password"
                                name="password"
                                required autocomplete="current-password"
                                tabindex="2" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Login
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-muted text-center">
        Don't have an account? <a href="{{ route('register', app('request')->input('ref') ? ['ref' => app('request')->input('ref')] : [] ) }}">Register Now</a>
    </div>
</div>
@endsection
