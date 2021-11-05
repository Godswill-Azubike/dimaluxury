@extends('auth.layout')

@section('title')
    Reset Password &mdash; DimaLuxuryH
@endsection

@section('componet')
<div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-5">

        <div class="card card-primary shadow mt-3">
            <div class="card-header">
                <h4>Reset Password</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                     <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"" name="email" value="{{ old('email', $request->email) }}"  required>
                         @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autofocus>
                         @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection

