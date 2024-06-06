<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Models\user;
use Illuminate\Validation\Rule;
use function Symfony\Component\String\u;


class UserController extends Controller
{

    public function showLoginForm()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        if (Auth::attempt([
            'email'    => $request->email,
            'password' => $request->password
        ])
        ) {
            // Kiểm tra vai trò của người dùng sau khi đăng nhập thành công
            if (Auth::user()->role == 1) {
                return redirect('/dashboard'); // Điều hướng đến trang CRUD nếu vai trò là 1
            }
            return redirect('/'); // Điều hướng đến trang chủ nếu vai trò  là 0
        }
        return redirect()->back()->with('error', 'Sai tài khoản hoặc mật khẩu');
    }


    public function showRegistrationForm()
    {
        return view('resgister');
    }


    public function postRegister(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validator = $request->validate([
            'name'     => ['required', 'min:3', Rule::unique('users', 'name')],
            //Rule::unique('users', 'name'): Đảm bảo rằng giá trị của 'name' là duy nhất trong bảng 'users'. Điều này ngăn chặn việc người dùng đăng ký với tên đã tồn tại trong hệ thống.
            'email'    => ['required', 'email', Rule::unique('users', 'email')],
            //Rule::unique('users', 'email'): Đảm bảo rằng giá trị của 'email' là duy nhất trong bảng 'users'. Điều này ngăn chặn việc người dùng đăng ký với tên đã tồn tại trong hệ thống.
            'password' => ['required', 'min:2', 'confirmed', 'max:200'],

        ]);
        // Nếu xác thực thất bại, quay lại trang đăng ký với lỗi
//        if ($validator->fails()) {
//            return redirect()->back()
//                ->withErrors($validator)
//                ->withInput();
//        }

        // Mã hóa mật khẩu
        $validator['password'] = Hash::make($validator['password']);
        user::create($validator);

        try {
            // Tạo người dùng mới
            user::create((array)$validator);
        } catch (\Throwable $th) {
            // Xử lý lỗi nếu có
            return redirect()->back()
                ->with('error', 'Đã có lỗi xảy ra. Vui lòng thử lại.');
        }

        // Chuyển hướng đến trang đăng nhập sau khi đăng ký thành công
        return redirect()->route('login')
            ->with('success', 'Đăng ký thành công. Vui lòng đăng nhập.');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


    public function forgetPassword(Request $request)
    {
        $request
            = $request->validate(['email' => 'required|email|exists:users,email']);
        $code = rand(100000, 999999);
        $user = user::where('email', $request['email'])->first();
        $user->verification_code = $code;
        $user->save();

        Mail::send('mail.verificationCode', ['code' => $code],
            function ($message) use ($request) {
                $message->to($request['email']);
                $message->subject('Ma xac nhan dat lai mat khau');
            });
        return redirect()->route('verify-code')
            ->with('email', $request['email']);
    }

    public function verifyCode(request $request)
    {
        $request->validate([
            'verification_code' => 'required|min:6',
            'email'             => 'required|email|exists:users,email',
        ]);
        $user = user::where('email', $request['email'])
            ->where('verification_code', $request['verification_code'])
            ->first();
        if ($user->verification_code == $request['verification_code']) {
            return redirect()->route('reset-password')
                ->with('email', $request['email']);
        } else {
            return redirect()->route('verify-code')
                ->with('error', 'Ma xac nhan khong hop le');
        }
    }

    public function resetPassword(request $request)
    {
        $request->validate([
            'email'    => 'required|email|exists:users,email',
            'password' => 'required|min:3|confirmed',
        ]);
        $user = user::where('email', $request['email'])->first();
        $user->password = Hash::make($request['password']);
        $user->verification_code = null;
        $user->save();
        return redirect()->route('login')
            ->with('success', 'Mat khau da duoc dat lai, vui long dang nhap');
    }

}

