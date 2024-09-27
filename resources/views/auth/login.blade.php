@extends('layouts.app')
@section('title', isset($title) ? $title: 'Login')

@section('content')
<div class="page-content">
    <!-- Login Area Start  -->
        <section>
            <div class="container-fluid">
                <div class="login">
                    <div class="form-area">
                        <div class="content">
                            <h2 class="mb-24">Login</h2>
                            <button class="link-button google mb-24 w-100"><img src="{{asset('assets/media/icons/google.png')}}" alt=""> Login with Google</button>
                            <button class="link-button facebook w-100"><img src="{{asset('assets/media/icons/facebook-2.png')}}" alt=""> Login with Facebook</button>
                            <hr>
                            <form action="{{ route('login') }}" method="POST">
                            @csrf
                                <div class="mb-24">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus required placeholder="Email/Username">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-24">
                                    <input type="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" required placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="mb-24">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="cus-btn dark mb-32 w-100" type="submit">Login</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <h6>Create an account? <a href="{{url('register')}}" class="color-primary">Sign up</a> </h6>
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