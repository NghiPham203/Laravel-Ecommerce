@extends('layout')

@section('title', 'NghiFruit | Sign Up')

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger py-2">{{ $error }}</div>
        @endforeach
    @endif
    <div class="tab-content">
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <form class="container" style="width: 300px; margin-top: 160px" method="POST" action="{{ route('postRegister') }}">
                @csrf
                <div class="text-center mb-3">
                    <p>Sign Up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>

                <p class="text-center">or:</p>

                <!-- Fullname input -->
                <div class="form-outline mb-4">
                    <input class="form-control" type="text" id="name" name="name" required />
                    <label class="form-label" for="name">Fullname</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input class="form-control" type="email" id="email" name="email" required />
                    <label class="form-label" for="email">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" required />
                    <label class="form-label" for="password">Password</label>
                </div>

                <!-- Confirm Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required />
                    <label class="form-label" for="password_confirmation">Re-Password</label>
                </div>

                <!-- 2 column grid layout -->
                <div class="row mb-4">
                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-3 mb-md-0">
                            <input class="form-check-input" type="checkbox" value="" id="registerCheck" checked />
                            <label class="form-check-label" for="registerCheck"> Remember me </label>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>

                <!-- Login link -->
                <div class="text-center">
                    <p>Already a member? <a href="{{ route('login') }}">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection
