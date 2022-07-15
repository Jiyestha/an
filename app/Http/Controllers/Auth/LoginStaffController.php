<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\Staff;
use Carbon\Carbon;
use Session;
use Brian2694\Toastr\Facades\Toastr;

class LoginStaffController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout',
            'locked',
            'unlock'
        ]);
    }

    public function loginStaff()
    {
        return view('auth.loginStaff');
    }

    public function authenticateStaff(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $email    = $request->email;
        $password = $request->password;

        $dt         = Carbon::now();
        $todayDate  = $dt->toDayDateTimeString();

        $activityLog = [

            'name'        => $email,
            'email'       => $email,
            'description' => 'has log in',
            'date_time'   => $todayDate,
        ];
        if (Auth::attempt(['email'=>$email,'password'=>$password,'status'=>'Active'])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully :)','Success');
            return redirect()->intended('home');
        }elseif (Auth::attempt(['email'=>$email,'password'=>$password,'status'=> null])) {
            DB::table('activity_logs')->insert($activityLog);
            Toastr::success('Login successfully :)','Success');
            return redirect()->intended('home');
        }
        else{
            Toastr::error('fail, WRONG USERNAME OR PASSWORD :)','Error');
            return redirect('loginstaff');
        }

    }

    public function logoutStaff()
    {
        $staff = Auth::Staff();
        Session::put('staff', $staff);
        $staff=Session::get('staff');

        $name       = $staff->name;
        $email      = $staff->email;
        $dt         = Carbon::now();
        $todayDate  = $dt->toDayDateTimeString();

        $activityLog = [

            'name'        => $name,
            'email'       => $email,
            'description' => 'has logged out',
            'date_time'   => $todayDate,
        ];
        DB::table('activity_logs')->insert($activityLog);
        Auth::logout();
        Toastr::success('Logout successfully :)','Success');
        return redirect('loginStaff');
    }

}
