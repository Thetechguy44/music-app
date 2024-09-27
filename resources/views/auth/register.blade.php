@extends('layouts.app')
@section('title', isset($title) ? $title: 'Register')

@section('content')
<div class="page-content">
    <!-- Login Area Start  -->
        <section>
            <div class="container-fluid">
                <div class="signup">
                    <div class="form-area">
                        <div class="content">
                            <h2 class="mb-24">Create Your Account.</h2>
                            <button class="link-button google mb-24 w-100"><img src="{{asset('assets/media/icons/google.png')}}" alt=""> Login with Google</button>
                            <button class="link-button facebook mb-24 w-100"><img src="{{asset('assets/media/icons/facebook-2.png')}}" alt=""> Login with Facebook</button>
                            <h6 class="or mb-16">or</h6>
                            <h6 class="mb-24">Sign up with your email address</h6>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-24">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-24">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-24">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-24">
                                    <input type="password" name="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">

                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <h6 class="mb-4p text-start">What’s your gender?</h6> 
                                <div class="gender mb-24">
                                    <label for="male"><input id="male" type="radio" name="radio" class="radio" value="male">Male</label>
                                    <label for="female"><input id="female" type="radio" name="radio" class="radio" value="female">Female</label>
                                    <label for="other"><input id="other" type="radio" name="radio" class="radio" value="other">Prefer not to say</label>
                                </div>
                                <div class="text-center">
                                    <button class="cus-btn dark mb-32 w-100" type="submit">Sign up</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <h6>Already have an Account? <a href="{{url('login')}}" class="color-primary">Log in</a> </h6>
                            </div>
                        </div>
                    </div>
                    <img src="{{asset('assets/media/banner/login-signup.png')}}" alt="" class="side-img">
                </div>
            </div>
        </section>
    <!-- Login Area End  -->
</div>
@endsection