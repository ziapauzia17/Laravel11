@extends('layouts.guest')

@section('title', 'Register')

@section('content')
    <div class="auth-form-box">
        <div class="text-center mb-7">
            <a class="d-flex flex-center text-decoration-none mb-4" href="#!">
                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                    <img src="/assets/backend/img/icons/logo-rsud-removebg.png" alt="phoenix" width="58" />
                </div>
            </a>
            <h3 class="text-body-highlight">Sign Up</h3>
            <p class="text-body-tertiary">Create your account today</p>
        </div>

        <!-- Social Sign Up Buttons -->
        <button class="btn btn-phoenix-secondary w-100 mb-3">
            <span class="fab fa-google text-danger me-2 fs-9"></span>Sign up with google
        </button>
        <button class="btn btn-phoenix-secondary w-100">
            <span class="fab fa-facebook text-primary me-2 fs-9"></span>Sign up with facebook
        </button>

        <!-- Divider -->
        <div class="position-relative mt-4">
            <hr class="bg-body-secondary" />
            <div class="divider-content-center bg-body-emphasis">or use email</div>
        </div>

        <!-- Register Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-3 text-start">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" id="name" type="text" name="name" :value="old('name')" required
                    autofocus placeholder="Name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mb-3 text-start">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" id="email" type="email" name="email" :value="old('email')" required
                    placeholder="name@example.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="row g-3 mb-3">
                <div class="col-sm-6">
                    <label class="form-label" for="password">Password</label>
                    <div class="position-relative" data-password="data-password">
                        <input class="form-control form-icon-input pe-6" id="password" type="password" name="password"
                            required placeholder="Password" data-password-input="data-password-input" />
                        <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                            data-password-toggle="data-password-toggle">
                            <span class="uil uil-eye show"></span>
                            <span class="uil uil-eye-slash hide"></span>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="col-sm-6">
                    <label class="form-label" for="confirmPassword">Confirm Password</label>
                    <div class="position-relative" data-password="data-password">
                        <input class="form-control form-icon-input pe-6" id="confirmPassword" type="password"
                            name="password_confirmation" required placeholder="Confirm Password"
                            data-password-input="data-password-input" />
                        <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                            data-password-toggle="data-password-toggle">
                            <span class="uil uil-eye show"></span>
                            <span class="uil uil-eye-slash hide"></span>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>

            <!-- Terms and Privacy Policy -->
            <div class="form-check mb-3">
                <input class="form-check-input" id="termsService" type="checkbox" name="terms" />
                <label class="form-label fs-9 text-transform-none" for="termsService">
                    I accept the <a href="#!">terms</a> and <a href="#!">privacy policy</a>
                </label>
                <x-input-error :messages="$errors->get('terms')" class="mt-2" />
            </div>

            <!-- Sign Up Button -->
            <button class="btn btn-primary w-100 mb-3" type="submit">Sign up</button>
        </form>

        <!-- Sign In Link -->
        <div class="text-center">
            <a class="fs-9 fw-bold" href="{{ route('login') }}">Sign in to an existing
                account</a>
        </div>
    </div>


@endsection
