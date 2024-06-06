@extends('layout')
@section('title', 'Quên mật khẩu')
@section('content')
    <div class="container mt-5 password-reset-container">
        <!-- Nội dung trang quên mật khẩu -->


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-white" style="background-color: #F28123">
                        <h4 class="mb-0">{{ __('Quên mật khẩu') }}</h4>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('form-forget-password') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input type="email" class="form-control" name="email" id="email" required autofocus placeholder="Nhập email của bạn" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">{{ __('Gửi mã xác nhận') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
