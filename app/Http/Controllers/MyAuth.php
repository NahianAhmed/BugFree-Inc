<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;
use Hash;
use App\UserTable;
use App\MyAuth_Token;
use App\ResetPassword;

class MyAuth extends Controller
{
    public function ShowLogin(){

        if(Session('UserType')){
            if(Session('UserType')=='user'){
                return redirect('/user-dashbord');
            }
            elseif(Session('UserType')=='admin'){
                return redirect('/admin-dashbord');
            }
    
    
        }
            return view('MyAuth.login');

    }
    public function SentAuthLink(Request $request){
        $this->validation($request);
        $email=strtolower($request->email);
        //Delete token if Request Again
        if($user = MyAuth_Token::where('email',$email)->first()){
        $user = MyAuth_Token::find($user->id);
        $user->delete();
        }
        if($user = UserTable::where('email',$email)->first()){
            return back()->with('msg','Email already used');
            }
        //
        //adding to token table
        $token=rand(100000, 999999);
        $data=new MyAuth_Token();
        $data->name=$request->name;
        $data->email=$email;
        $data->mobile=$request->mobile;
        $data->birthdate=$request->birthdate;
        $data->password=bcrypt($request->password);
        $data->token=$token;
        $data->save();
        //putting in seasion
        Session::put('name',$data->name);
        Session::put('token',$token);

        //mail
        $maildata=$request->toArray();
        Mail::send('MyAuth.AuthMail',$maildata,function($massage) use ($maildata)
        {
        $massage->to($maildata['email']);
        $massage->subject('Email Verification Link');

        });
        //end mail

        return back()->with('msg','We sent you a link Plz Check email');

   }

   public function VerifyLink($name,$token){
       if( $data=MyAuth_Token::where('name',$name)->first()){

        if($data->token==$token){

        $user=new UserTable();
        $user->name=$data->name;
        $user->email=$data->email;
        $user->mobile=$data->mobile;
        $user->birthdate=$data->birthdate;
        $user->user_type='user';
        $user->password=$data->password;
        $user->save();
        return redirect('/login')->with('msg',"Your Account is ready Plz login");
    }

       }
       return redirect('/login')->with('msg',"link Unauthorized");

   }

   public function validation($request){
    return  $this->Validate($request, [
          'name' => 'required|max:100|min:6',
          'email' => 'required|email|max:50',
          'mobile' => 'required|max:14|min:11',
          'birthdate' => 'required|max:25',
          'password' => 'required|confirmed|max:55|min:6',

      ]);
  }

public function VerifyLogin(Request $request){
    if($data = UserTable::where('email',$request->email)->first())
    {
        if($data->email == $request->email && Hash::check($request->password,$data->password)){
            $user_type=$data->user_type;
            Session::put('UserSession',$data->name);
            Session::put('User_email',$data->email);
            Session::put('UserType',$user_type);

                if($user_type=='admin'){

                    return redirect('/admin-dashbord');

                }
                elseif($user_type=='user'){

                    return redirect('/user-dashbord');
                }

        }
        else{
            return redirect('/login')->with('msg','Password Wrong');
        }


    }
     else{
        return redirect('/login')->with('msg','You aren\'t signup yet!');
     }

  }

  public function ShowForgetPasswordPage(){

    return view('MyAuth.forgetpassword');
 }

 public function ResetPasswordLink(Request $req){
    $data = UserTable::where('email',$req->email)->first();
  if($data){

    if($user = ResetPassword::where('email',$req->email)->first()){
        $user = ResetPassword::find($user->id);
        $user->delete(); 
    }
    // making token

       $token=rand(100000, 999999);
        $d=new ResetPassword();
        $d->email=$req->email;
        $d->token=$token;
        $d->save();
        //putting in seasion
        Session::put('email',$d->email);
        Session::put('token',$token);

        //mail
        $maildata=$req->toArray();
        Mail::send('MyAuth.PasswordResetMail',$maildata,function($massage) use ($maildata)
        {
        $massage->to($maildata['email']);
        $massage->subject('Password Reset Mail');
        });

        return back()->with('msg','check your mail inbox and click to the link to reset password');

  }
  else{
    return back()->with('msg','Invalid Email');
  }

 }
public function VelifyResetPasswordLink($email,$token){
    Session()->forget('email');
    Session()->forget('token');
    $data = ResetPassword::where('email',$email)
                        ->where('token',$token)
                        ->first();
    if($data){
       return view("MyAuth.update_password",compact('email','token'));
    }
    else{
        return abort(404);
    }
}
public function UpdateForgetPassword(Request $req){
    $data = ResetPassword::where('email',$req->email)
                        ->where('token',$req->token)
                        ->first();

   if($data){
     $this->Passwordvalidation($req);
     $user = UserTable::where('email',$req->email)->first();
     $user->password=bcrypt($req->password);
     $user->save();
     return redirect('/login')->with('msg','password changed');
   }
   else{
    return abort(404);
   }

}

public function Passwordvalidation($request){
    return  $this->Validate($request, [

          'password' => 'required|confirmed|max:55|min:6',

      ]);
  }

public function Logout_user(){

    Session()->forget('UserSession');
    Session()->forget('User_email');
    Session()->forget('UserType');
    
    return redirect('/');
}

}
