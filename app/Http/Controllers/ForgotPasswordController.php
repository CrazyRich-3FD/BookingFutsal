<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use DB; 
use Carbon\Carbon; 
use App\Models\User; 
use Mail; 
use Hash;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use MigrationCartalystSentinel;

class ForgotPasswordController extends Controller
{
    /**
       * Write code on Method
       *
       * @return response()
       */
      public function showForgetPassword()
      {
         return view('Auth.forget-password');
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitForgetPassword(Request $request)
      {
        //   $request = User::whereEmail($request->email)->first();

        //   if(count($user) == 0){
        //       return redirect()->back()->with(['error' => 'Email not exists']);
        //   }

        //   $user = Sentinel::findById($user->id);
        //   $reminder = Reminder::exists($user) ? : Reminder::create($user);
          

          $request->validate([
              'email' => 'required|email|exists:user',
          ]);
  
          $token = Str::random(64);
  
        //   FacadesDB::table('user')->updateOrInsert([
        //       'email' => $request->email, 
        //       'token' => $token, 
        //       'created_at' => Carbon::now(),
        //     //   'nama'=> $request->nama,
        //     //   'username'=> $user->username,
        //     //   'password'=> $user->password,
        //     ]);
  
        //   FacadesMail::send('Auth.passwordLink', ['token' => $token], function($message) use($request){
        //       $message->to($request->email);
        //       $message->subject('Reset Password');
        //   });
  
        //   return redirect()->back()->with('success', 'We have e-mailed your password reset link!');

          try {
            FacadesMail::send('Auth.passwordLink', ['token' => $token], function($message) use($request){
                $message->to($request->email);
                $message->subject('Reset Password');
            });

            return redirect()->back()
                ->with('success', 'We have e-mailed your password reset link!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
      }

      public function submitForgetPasswordd(Request $request)
      {
        $request->validate(['email' => 'required|email']);
 
        $status = User::sendPasswordResetNotification(
            $request->only('email')
        );
     
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
      }
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showResetPassword($token) { 
         return view('Auth.reset-password', ['token' => $token]);
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitResetPassword(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:user',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);
  
          $updatePassword = FacadesDB::table('user')
                              ->where([
                                'email' => $request->email
                              ])
                              ->first();
  
          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }
  
          $user = User::where('email', $request->email)
                      ->update(['password' => FacadesHash::make($request->password)]);
 
          FacadesDB::table('user')->where(['email'=> $request->email])->delete();
  
          return redirect('/login')->with('message', 'Your password has been changed!');
      }
}
