<?php

namespace App\Http\Controllers;

use \App\Http\Controllers\HelperController;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function reloginFunction($user_id, $re_login) {
        //\App\User::where('id', $user_id);
    }

    public function getLogin()
    {
        return view('frontend.login');
    }

    public function postLogin()
    {
        $input = request()->all();
        $check_if_user_active = \App\User::where('email', $input['email'])->first();

        if($check_if_user_active) {
            if($check_if_user_active->is_active != 'yes') {
                session()->flash('friendly-error-msg', 'User not activated!');
                return redirect()->back();
            }
        }



        if(\Auth::attempt([
            'email' =>  $input['email'],
            'password'  =>  $input['password'],
            'is_active' =>  'yes'
        ]))
        {
            //$this->reloginFunction(auth()->user()->id, 0);
            session()->flash('success-msg', 'You have successfully logged in!');
            return redirect()->intended(route('home'));
        }
        else
        {
            session()->flash('friendly-error-msg', 'Invalid user credentials or user not activated!');
            return redirect()->back();
        }
    }

    public function postLogout()
    {
        //$this->reloginFunction(auth()->user()->id, 1);
        \Auth::logout();
        session()->flash('friendly-error-msg', 'You have successfully logged out!');
        return redirect()->route('login');
    }

    public function getForgotPassword() {
        return view('frontend.'.$this->theme.'.forgot-password');
    }

    public function postForgotPassword() {
        $user = \App\User::where('email', request()->get('recovery_email'))->first();
        $input = request()->all();
        $password = str_random(6);
        if($user) {
            $user->password = bcrypt($password);
            $user->save();
            $input['password'] = $password;
            $input['user_id'] = $user->id;
            $this->reloginFunction($user->id, 1);
            session()->flash('success-msg', 'Password successfully changed');
            
            //send email
            \Mail::to($input['recovery_email'])
                 ->send((new \App\Mail\PasswordChange($input)));

            return view('frontend.'.$this->theme.'.password-changed')
                    ->with('input', $input);
        } else {
            session()->flash('friendly-error-msg', 'We could not find the email');
            return redirect()->back();
        }
    }

    public function getHome()
    {
        if(HelperController::isSuperadmin())
            return view('backend.home');
        if(HelperController::isAdmin())
            return view('backend.admin-home');
        if(HelperController::isUser())
            return view('backend.user-home');
    }
}
