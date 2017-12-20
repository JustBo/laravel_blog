<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Http\Requests\LoginRequest;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout', 'userLogout']]);
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function userLogout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }

    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            return response()
                ->json([
                    'message' => 'Success',
                    'status' => 200
                ], 200);
        } else {
            return response()
                ->json([
                    'message' => 'Incorrect Credentials',
                    'status' => 400
                ], 200);
        }
    }



    // protected function sendLoginResponse(Request $request)
    // {
    //     $request->session()->regenerate();
    //     $this->clearLoginAttempts($request);
    //     if ($request->ajax()) {
    //         return response()->json($this->guard()->user(), 200);
    //     }
    //     return $this->authenticated($request, $this->guard()->user())
    //             ?: redirect()->intended($this->redirectPath());
    // }
    // protected function sendFailedLoginResponse(Request $request)
    // {
    //     if ($request->ajax()) {
    //         return response()->json([
    //             'error' => Lang::get('auth.failed')
    //         ], 401);
    //     }
    //     return redirect()->back()
    //         ->withInput($request->only($this->username(), 'remember'))
    //         ->withErrors([
    //             $this->username() => Lang::get('auth.failed'),
    //         ]);
    // }
}
