@extends('layouts.main-app')

@section('body')

<body class="bg-gradient-primary">
<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Register as a <strong>Vendor</strong></h1>
                    </div>
                    <form class="user" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <input id="name" type="text"
                                class="form-control form-control-user @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="organization" autofocus
                                placeholder="Business Name">

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="exampleInputAddress"
                                placeholder="Address">
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control form-control-user" id="exampleContact"
                                    placeholder="Contact Number">
                            </div>
                            <div class="col-sm-6">
                                <input id="email" type="email"
                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" placeholder="Email Address" required
                                    autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password" type="password"
                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                    name="password" placeholder="Password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control form-control-user"
                                    name="password_confirmation" placeholder="Repeat Password" required
                                    autocomplete="new-password">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            {{ __('Register') }}
                        </button>
                        <br>
                        <small>After registration, you will receive a notification once your account is
                            approved.</small>
                        <hr>
                        <a href="{{route('admin.register')}}" class="btn btn-google btn-user btn-block">
                            Register as <strong>Farmer</strong>
                        </a>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="{{route('admin.login')}}">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</body>
@endsection
