<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class RegisterStaffController extends Controller
{
    public function registerStaff()
    {
        $role = DB::table('role_type_users')->get();
        $position = DB::table('position_types')->orderBy('position', 'ASC')->get();
        return view('auth.registerstaff',compact('role','position'));
    }
    public function storeStaff(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'phone_number'=> 'required|string|max:255',
            'role_name' => 'required|string|max:255',
            'password'  => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        
        Staff::create([
            'name'          => $request->name,
            'avatar'        => $request->image,
            'email'         => $request->email,
            'phone_number'  => $request->phone_number,
            'join_date'     => $todayDate,
            'role_name'     => $request->role_name,
            'position'      => $request->position,
            'password'      => Hash::make($request->password),
        ]);
        Toastr::success('Create new account successfully :)','Success');
        return redirect('login');
    }
}
