
@extends('auth.layout')

@section('title')
    Registration Success &mdash; DimaLuxuryH
@endsection

@section('componet')
<div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-5">
    <div class="login-brand">
        <a href="{{ route('welcome') }}">
            <img src="{{ url('logo2.png') }}" alt="logo" height="35">
        </a>
    </div>
    <div class="card card-primary shadow mt-3">
        <div class="card-header">
                <h4 class="text-success">Registration Successful</h4>
            </div>
            <div class="card-body">
                <p class="text-muted">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? please check your spam folder if you can\'t find the email on your mail box or If you didn\'t receive the email, we will gladly send you another.') }}
                </p>
                 @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success" role="alert">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                <div class="row">
                    <form class="col-5" method="POST"  action="{{ route('verification.send') }}">
                        @csrf
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-sm" tabindex="4">
                            {{ __('Resend Email') }}
                            </button>
                        </div>
                    </form>
                    <div class="col-6">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm">
                            {{ __('Go to Dashboard') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
