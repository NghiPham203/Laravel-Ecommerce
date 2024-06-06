@extends('layout')
@section('title', 'Xác nhận mật khẩu')
@section('content')
    <div class="container " style="margin-bottom: 100px;margin-top: 150px">
        <!-- Nội dung trang quên mật khẩu -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Hiển thị thông báo lỗi nếu có -->
                @if (session('error'))
                    <div class="alert alert-danger text-center">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="card shadow">
                    <div class="card-header text-white text-center" style="background-color: #F28123">
                        <h4>Nhập Mã Xác Nhận</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('verify-code') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="verification_code" class="form-label">Mã xác nhận</label>
                                <input type="text" id="verification_code" name="verification_code" class="form-control" placeholder="Nhập mã xác nhận" required autofocus>
                            </div>
                            <input type="hidden" name="email" value="{{ session('email') }}">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block">Xác minh</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
