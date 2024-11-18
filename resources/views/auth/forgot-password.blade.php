@extends('layouts.guest')

@section('title', 'Forgot Password')

@section('content')
    <div class="auth-form-box">
        <div class="text-center">
            <a class="d-flex flex-center text-decoration-none mb-4" href="#!">
                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                    <img src="/assets/backend/img/icons/logo-rsud-removebg.png" alt="phoenix" width="58" />
                </div>
            </a>
            <h4 class="text-body-highlight">Forgot your password?</h4>
            <p class="text-body-tertiary mb-5">Enter your email below and we will send you a reset link</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Forgot Password Form -->
        <form method="POST" action="{{ route('password.email') }}" class="d-flex align-items-center mb-5">
            @csrf

            <!-- Email Address -->
            <div class="form-group flex-1">
                <label for="email" class="form-label">Email address</label>
                <input class="form-control" id="email" type="email" name="email" :value="old('email')" required
                    autofocus placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <button class="btn btn-primary ms-2" type="submit">Send<span class="fas fa-chevron-right ms-2"></span></button>
        </form>
        <div class="text-center">
            <a class="fs-9 fw-bold" href="#!">Still having problems?</a>
        </div>
    </div>
@endsection
