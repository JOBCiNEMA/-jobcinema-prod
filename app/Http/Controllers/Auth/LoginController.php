<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $maxAttempts = 10;     // ログイン試行回数（回）
    protected $decayMinutes = 10;   // ログインロックタイム（分）

    protected $redirectTo = '/mypage/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('user');  //変更
    }

    public function logout(Request $request)
    {
        $this->guard('user')->logout();
        // $request->session()->flush();
        // $request->session()->regenerate();

        return redirect('members/logout'); // ここを好きな遷移先に変更する。
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('認証に失敗しました。')],
        ]);
    }

    protected function authenticated(\Illuminate\Http\Request $request, $user)
    {
        if ($request->input('redirect_to')){
            return redirect($request->input('redirect_to'));
        }
        return redirect()->intended($this->redirectPath());
    }
    
}
