<?php
//
//namespace App\Http\Controllers\Auth;
//
//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;
//use Illuminate\Support\Facades\Hash;
//use App\Models\user;
//use Illuminate\Support\Facades\Session;
//
//
//class ForgotPasswordController extends Controller
//{
//    public function showEmailForm()
//    {
//        return view('email');
//    }
//
//    public function sendVerificationCode(Request $request)
//    {
//        $request->validate(['email' => 'required|email|exists:users,email']);
//
//        $user = user::where('email', $request->email)->first();
//        $code = rand(100000, 999999);
//        $user->verification_code = $code;
//        $user->save();
//
//        Mail::send('verification', ['code' => $code], function ($message) use ($user) {
//            $message->to($user->email);
//            $message->subject('Mã xác nhận đặt lại mật khẩu');
//        });
//
//        return redirect()->route('verify')->with('email', $request->email);
//    }
//
//    public function showVerificationForm()
//    {
//        return view('verify');
//    }
//
//    public function verifyCode(Request $request)
//    {
//        $request->validate([
//            'email' => 'required|email|exists:users,email',
//            'verification_code' => 'required',
//        ]);
//
//        $user = user::where('email', $request->email)
//            ->where('verification_code', $request->verification_code)
//            ->first();
//
//        if (!$user) {
//            return back()->withErrors(['verification_code' => 'Mã xác nhận không hợp lệ.']);
//        }
//
//        Session::put('email', $request->email);
//        Session::put('verification_code', $request->verification_code);
//
//        return redirect()->route('reset');
//    }
//
////    public function showResetForm()
////    {
////        if (!Session::has('email') || !Session::has('verification_code')) {
////            return redirect()->route('request');
////        }
////
////        return view('reset');
////    }
//
//    public function resetPassword(Request $request)
//    {
//        $request->validate([
//            'email' => 'required|email|exists:users,email',
//            'verification_code' => 'required',
//            'password' => 'required|confirmed|min:6',
//        ]);
//
//        $user = user::where('email', $request->email)
//            ->where('verification_code', $request->verification_code)
//            ->first();
//
//        if (!$user) {
//            return back()->withErrors(['verification_code' => 'Mã xác nhận không hợp lệ.']);
//        }
//
//        $user->password = Hash::make($request->password);
//        $user->verification_code = null;
//        $user->save();
//
//        Session::forget('email');
//        Session::forget('verification_code');
//
//        return redirect()->route('login')->with('status', 'Mật khẩu của bạn đã được đặt lại thành công!');
//    }
//}
