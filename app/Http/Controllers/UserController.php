<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Session;

class UserController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        else{
            return view('user_login');
        }
    }

    public function login_logic(Request $request){

        $remember = $request->has('remember')?true:false;

        $auth = Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $remember);

        if($auth){
            Cookie::queue('user', Auth::user(), 60);
            return redirect()->route('home');
        } else{
            $request->session()->flash('error', 'Wrong email or password');
            return redirect()->route('login_user');
        }
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $request)
        {
            try {
                $user_google    = Socialite::driver('google')->user();
                $user           = User::where('email', $user_google->getEmail())->first();

                if($user != null){
                    auth()->login($user, true);
                    return redirect()->route('index');
                }else{
                    $create = User::Create([
                        'email'             => $user_google->getEmail(),
                        'first_name'              => $user_google->getName(),
                        'last_name'              => $user_google->getName(),
                        'password'          => 0,
                        'role'              => 'registered',
                        'gender'            => 'male',
                        'email_verified_at' => now(),
                    ]);


                    auth()->login($create, true);
                    return redirect()->route('home');
                }

            } catch (\Exception $e) {
                return redirect()->route('login_user');
            }


        }

    public function logout_logic(){
        Auth::logout();
        Cookie::queue(Cookie::forget('user'));
        return redirect()->route('index');
    }

    public function register_logic(Request $request){
        $request->validate([
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'email' => 'required|unique:users,email',
            'password' => 'required|alpha_num|confirmed|min:8',
            'gender' => 'required',
            'role' => 'required',
            'photo' => 'image|mimes:jpeg,jpg,png'
        ]);

        $original_name = $request->file('photo')->getClientOriginalName();
        $original_ext = $request->file('photo')->getClientOriginalExtension();
        $profile_filename = $original_name . '_' . time() . '.' . $original_ext;
        $request->file('photo')->storeAs('public/images', $profile_filename);

        DB::table('users')->insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'gender' => $request->gender,
            'photo' => $profile_filename
        ]);

        $request->session()->flash('message', 'Successfully registered your account. Please Login using Email and Password');
        echo "<script>
                alert('Successfully registered your account. Please Login using Email and Password!');
                window.location.href='/login';
               </script>";
        // return redirect()->route('login_user');
    }

    public function register_form(){
        return view('user_register');
    }

    public function profile_index(){
        return view('profile');
    }
}
