<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Web\ChangePassword;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\User;
use Hash;
use Mail;
use Auth;



class AuthController extends Controller
{
	public function loginForm() {
		return auth()->check() ? redirect('dashboard') : view('login');
	}

	public function login(Request $request) {
		$data = [
			'email'=> $request->email, 
			'password'=> $request->password
		];
		if (Auth::attempt($data)){
			return redirect('dashboard');             
		}else{
			return redirect(route('login.form'))->with('error', 'Incorrect email or password.');
		}
	}

	function logout(){
		Auth::logout();
		return redirect(route('login.form'));
	}

	function  dashboard() {
		$user_count = User::where('role', 'customer')->count();
		return view('admin.dashboard', compact('user_count'));
	}

	function forgotPasswordForm(){
		return view('forgot-password');   
	}

	function forgotPassword(ForgetPassword $request){
		$user= User::where('email' ,$request->email)->first();
		
		if (is_null($user)){
			 return redirect()->back()->with('error' ,'Email address not exist.');
				 
		}

		$token = $user->createToken('auth_token')->plainTextToken;
		$user->update([
					'token' => $token
		]);
		Mail::to($request->email)->send(new ChangePassword($token));
		return redirect()->back()->with('success' ,'We will send a link to reset your password in your mail.');
	}

	function changePasswordForm($token){
			return view('change-password',compact('token'));  
	}

	function changePassword(ChangePasswordRequest $request , $token){
		 $user= User::where('token' ,$token)->first();

		 if (is_null($user)){
				 return redirect()->back()->with('error' , 'Something went wrong.'); 
			}
			
		 $user->update([
				 'password' => Hash::make($request->password),
				 'token' => null  
		 ]);

		 return redirect('/')->with('success' ,'Password change successfully.');

	}

	function profile(){
		$user = Auth::user();
		return view('admin.profile', compact('user'));
	}

	function profileStore(Request $request){
		$user = Auth::user();
		if($request->hasFile('profile_image')) {
			unlink(public_path('admin/assets/images/'. $user->profile_image));
			$profile_image_name = time() . '_' . $request->file('profile_image')->getClientOriginalName();
			$request->file('profile_image')->move('admin/assets/images', $profile_image_name);
			$user['profile_image'] = $profile_image_name;
		}
		$user->email = strtolower(trim($request->email));
		$user->name = $request->name;
		$user->mobile_number = $request->mobile_number;
		$user->save();

		return redirect()->back()->with('success' , 'Profile update successfully.');  
	}
}