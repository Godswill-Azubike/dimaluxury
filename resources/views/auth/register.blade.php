@extends('auth.layout')

@section('title')
    Register &mdash; DimaLuxuryH
@endsection

@section('componet')
<div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-6">
    <div class="card card-primary shadow mt-3">
        <div class="card-header">
            <h4>Register</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register', app('request')->input('ref') ? ['ref' => app('request')->input('ref')] : [] ) }}">
                @csrf
                <div class="row">
                    <div class="form-group col-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus required />
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="password" class="d-block">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="password confirmation" class="d-block">Repeat Password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required />
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <input type="text" name="ref_by" value="{{ app('request')->input('ref') }}" hidden>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="agree" class="custom-control-input" id="agree" required />
                        <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                </div>
            </form>
        </div>
    </div>
    <div class="mb-5 text-muted text-center">
        Already have an account? <a href="{{ route('login', app('request')->input('ref') ? ['ref' => app('request')->input('ref')] : [] ) }}">Login Now</a>
    </div>
</div>
@endsection
