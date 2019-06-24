<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\UserQuery;
use App\OurProject;
use App\Experts;
use App\Services;

class HomeController extends Controller
{
   public function index(){
       return view('pages.home');
   }

 public function contact() {
    $data = Contact::first();
    return view('pages.contact_with_us',compact('data'));
}
public function SaveUserQuery(Request $req){

   $data = new UserQuery();
   $data->name = $req->name;
   $data->email = $req->email;
   $data->subject = $req->subject;
   $data->message = $req->message;
   $data->read = false;
   $data->save();
   return back()->with('msg','Your message has been sent to us.');
}

public function OurProjectByID($id){

    $data = OurProject::find($id);
    return view('pages.project_by_id',compact('data'));

}

public function AboutUs(){
    return view('pages.about_us');
}

public function OurExpertsList(){
    
    $data = Experts::all();
    return view('pages.our_experts',compact('data'));
}

public function OurServiceByID($id){
   $data = Services::where('id',$id)->first();
   return view('pages.our_service_by_id',compact('data'));
}
public function AboutExpert($id){
  
    $data = Experts::where('id',$id)->first();
    return view('pages.about_expert',compact('data'));
 }

}
