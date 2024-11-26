@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <div class="auth-form-box">
        <div class="text-center mb-7"> <a class="d-flex flex-center text-decoration-none mb-4" href="#!">
                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"> <img
                        src="/assets/backend/img/icons/logo-rsud-removebg.png" alt="phoenix" width="58" /> </div>
            </a>
            <h3 class="text-body-highlight">Sign In</h3>
            <p class="text-body-tertiary">Get access to your account</p>
        </div>
        <!-- Social Login Buttons -->
        <button class="btn btn-phoenix-secondary w-100 mb-3"> <span class="fab fa-google text-danger me-2 fs-9"></span>Sign
            in with google </button> <button class="btn btn-phoenix-secondary w-100"> <span
                class="fab fa-facebook text-primary me-2 fs-9"></span>Sign in
            with facebook </button>
        <!-- Divider -->
        <div class="position-relative">
            <hr class="bg-body-secondary mt-5 mb-4" />
            <div class="divider-content-center bg-body-emphasis">or use email</div>
        </div>
        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div class="mb-3 text-start"> <label class="form-label" for="email">Email address</label>
                <div class="form-icon-container"> <input class="form-control form-icon-input typewriter" id="email"
                        type="email" name="email" :value="old('email')" required autofocus placeholder="" /> <span
                        class="fas fa-user text-body fs-9 form-icon"></span> </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mb-3 text-start"> <label class="form-label" for="password">Password</label>
                <div class="form-icon-container" data-password="data-password"> <input
                        class="form-control form-icon-input pe-6 typewriter" id="password" type="password" name="password"
                        required placeholder="" data-password-input="data-password-input" /> <span
                        class="fas fa-key text-body fs-9 form-icon"></span> <button type="button"
                        class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                        data-password-toggle="data-password-toggle"> <span class="uil uil-eye show"></span> <span
                            class="uil uil-eye-slash hide"></span> </button> </div> <x-input-error :messages="$errors->get('password')"
                    class="mt-2" />
            </div>
            <!-- Remember Me -->
            <div class="row flex-between-center mb-7">
                <div class="col-auto">
                    <div class="form-check mb-0"> <input class="form-check-input" id="remember_me" type="checkbox"
                            name="remember" /> <label class="form-check-label mb-0" for="remember_me">Remember me</label>
                    </div>
                </div>
                @if (Route::has('password.request'))
                    <div class="col-auto"> <a class="fs-9 fw-semibold" href="{{ route('password.request') }}">Forgot
                            Password?</a> </div>
                @endif
            </div>
            <!-- Sign In Button --> <button class="btn btn-primary w-100 mb-3" type="submit">Sign In</button>
        </form>
        <!-- Create Account Link -->
        <div class="text-center"> <a class="fs-9 fw-bold" href="{{ route('register') }}">Create an account</a> </div>
    </div>
    <!-- Typed.js Effect -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var emailTypingEffect = new Typed("#email", {
                strings: ["Enter your email"],
                typeSpeed: 100,
                backSpeed: 50,
                loop: true,
                attr: 'placeholder'
            });
            var passwordTypingEffect = new Typed("#password", {
                strings: ["Enter your password"],
                typeSpeed: 100,
                backSpeed: 50,
                loop: true,
                attr: 'placeholder'
            });
            // Stop typing effect on focus for email 
            document.getElementById('email').addEventListener('focus', function() {
                emailTypingEffect.stop();
                this.setAttribute('placeholder', '');
            });
            // Restart typing effect if input is empty on blur for email 
            document.getElementById('email').addEventListener('blur', function() {
                if (this.value === '') {
                    emailTypingEffect.start();
                }
            });
            // Stop typing effect on focus for password 
            document.getElementById('password').addEventListener('focus', function() {
                passwordTypingEffect.stop();
                this.setAttribute('placeholder', '');
            });
            // Restart typing effect if input is empty on blur for password 
            document.getElementById('password').addEventListener('blur', function() {
                if (this.value === '') {
                    passwordTypingEffect.start();
                }
            });
        });
    </script>
@endsection
