@extends('auth.layout')

@section('title')
    Forget Password &mdash; DimaLuxuryH
@endsection

@section('componet')
<div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-5">
    <div class="card card-primary shadow mt-3">
        <div class="card-header">
                <h4>Forgot Password</h4>
            </div>
            <div class="card-body">
                <p class="text-muted">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>
                 @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST"  action="{{ route('password.email', app('request')->input('ref') ? ['ref' => app('request')->input('ref')] : [] ) }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Forgot Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    <div class="mb-5 text-muted text-center">
        Back to <a href="{{ route('login', app('request')->input('ref') ? ['ref' => app('request')->input('ref')] : [] ) }}">Login</a>
    </div>
</div>
@endsection
