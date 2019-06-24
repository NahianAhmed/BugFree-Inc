<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Contact;
use App\UserQuery;
use App\OurProject;
use App\Testimonial;
use App\Setting;
use App\Experts;
use App\Services;

class AdminController extends Controller
{
   public function __construct() {
   $this->middleware('IsAdmin');

}

public function index(){

    return view('admin.index');
    
   }
   public function contact(){

      $data = Contact::first();
      return view('admin.pages.contact_info',compact('data',$data));
      
     }


     public function save_contact(Request $req){

      $data = Contact::first();
      if($data)
      {
         $data->addresss=$req->addresss;
         $data->email=$req->email;
         $data->office_time=$req->office_time;
         $data->office_day=$req->office_day;
         $data->off_day=$req->off_day;
         $data->get_in_touch=$req->get_in_touch;
         $data->phone=$req->phone;
         $data->map=$req->map;
         $data->save();

      }

      else{
      $data = new Contact;
      $data->addresss=$req->addresss;
      $data->email=$req->email;
      $data->office_time=$req->office_time;
      $data->office_day=$req->office_day;
      $data->off_day=$req->off_day;
      $data->get_in_touch=$req->get_in_touch;
      $data->phone=$req->phone;
      $data->map=$req->map;
      $data->save();
   }
     
      
      return back()->with('msg','Data Changed');
     }

   public function ShowUserQuery(){
      $data = UserQuery::where('read',0)->get();
      return view('admin.pages.user_query',compact('data',$data));
   }

   public function ReadUserQuery($id){
      $data = UserQuery::find($id);
      $data->read=true;
      $data->save();
      return redirect('admin/user-query');
   }

   public function AddOurProject(){
    return view('admin.pages.add_project');
   }


   public function SaveOurProject(Request $req){
    $this->ProjectValidation($req);
    $image=$req->file('image');
    $name=$req->title.$image->getClientOriginalName();
    $path='public/asset/images/project/';
    $image->move($path,$name);
    $imageUrl=$path.$name;

    if(substr( $req->link,0, 4 ) === "http")
    {$link = $req->link;
   }
    else{
      $link = "http://".$req->link;
   }   
    $data =new OurProject();
    $data->title=$req->title;
    $data->link=$link;
    $data->client=$req->client;
    $data->technology=$req->technology;
    $data->description=$req->description;
    $data->image=$imageUrl;
    $data->save();
    return back()->with('msg','Project Added');
}


public function ProjectValidation($request){
    return  $this->Validate($request, [
        "image"  => "required|dimensions:width=500,height=500",
      ]);
  }

public function OurProjectList(){
      $data = OurProject::all();
      return view('admin.pages.ShowOurProject',compact('data',$data));
   }
public function project_deletion($id){
      $data= OurProject::where('id',$id)->delete();
      return back()->with('msg',"Project Successfully Deleted");
  }

  public function AddTestimonial(){
     return view('admin.pages.add_testimonial');
  }

public function SaveTestimonial(Request $req){
   
   $this->TValidation($req);
   $image=$req->file('image');
   $name=$req->title.$image->getClientOriginalName();
   $path='public/asset/images/testimonial/';
   $image->move($path,$name);
   $imageUrl=$path.$name;

   $data =new Testimonial();
   $data->name=$req->name;
   $data->testimonial=$req->testimonial;
   $data->image=$imageUrl;
   $data->save();
   return back()->with('msg','Data Added');

}

public function TValidation($request){
   return  $this->Validate($request, [
       "image"  => "required|dimensions:width=120,height=120",
     ]);
}

public function TestimonialList(){
   $data = Testimonial::all();
   return view('admin.pages.testimonial_list',compact('data',$data));
 }

public function TestimonialDeletion($id){
   $data= Testimonial::where('id',$id)->delete();
   return back()->with('msg',"Testimonial Successfully Deleted");
 }
public function ShowSiteSetting(){
   $title = Setting::where('field','title')->first();
   $logo = Setting::where('field','logo')->first();
   $counting = Setting::where('field','counting')->first();
   return view('admin.pages.site_setting',compact('title','logo','counting'));
}

public function SaveSiteSetting(Request $req){

   $this->LogoValidation($req);
   if($req->logo){
      $image=$req->file('logo');
      $name=$req->title.$image->getClientOriginalName();
      $path='public/asset/images/logo/';
      $image->move($path,$name);
      $imageUrl=$path.$name;
      $logo = Setting::where('field','logo')->first();
      $logo->values=$imageUrl;
      $logo->save();
   }
   
      $count=implode(',',$req->count);
      $title = Setting::where('field','title')->first();
      $title->values=$req->title;
      $title->save();
     
      $counting = Setting::where('field','counting')->first();
      $counting->values=$count;
      $counting->save();

      return back()->with('msg','Data Updated');

}
public function LogoValidation($request){
   return  $this->Validate($request, [
       "logo"  => "dimensions:width=222,height=108",
     ]);
}

public function ShowAddExpert(){
   return view('admin.pages.add_expert');
}
public function SaveExpert(Request $req){

   $this->ImgValidation($req,800,800,'required');
   $image=$req->file('image');
   $name=$req->title.$image->getClientOriginalName();
   $path='public/asset/images/experts/';
   $image->move($path,$name);
   $imageUrl=$path.$name;

   $data = new Experts();
   $data->name=$req->name; 
   $data->exprience =$req->exprience ; 
   $data->designation=$req->designation; 
   $data->description=$req->description; 
   $data->image=$imageUrl; 
   $data->save();
   return back()->with('msg','Data Added'); 

}

public function ImgValidation($request,$w,$h,$r){
   return  $this->Validate($request, [
       "image"  => "$r|dimensions:width=$w,height=$h",
     ]);
}

public function ExpertList(){
   $data = Experts::all();
   return view('admin.pages.expert_list',compact('data'));
}
public function ExpertDeletion($id){

   $data= Experts::where('id',$id)->delete();
   return back()->with('msg',"Expert Successfully Deleted");

}

public function AddServices(){

   return view('admin.pages.add_services');

}
public function SaveServices(Request $req){

   $this->ImgValidation($req,800,800,'required');
   $image=$req->file('image');
   $name=$req->title.$image->getClientOriginalName();
   $path='public/asset/images/services/';
   $image->move($path,$name);
   $imageUrl=$path.$name;


   $data = new Services();
   $data->name = $req->name;
   $data->short_description = $req->short_description;
   $data->long_description = $req->long_description;
   $data->image = $imageUrl;
   $data->save();

   return back()->with('msg','Data Saved');

}

public function ListOfServices(){
   $data = Services::all();
   return view('admin.pages.list_of_services',compact('data'));
}

public function ServiceDeletion($id){

   $data= Services::where('id',$id)->delete();
   return back()->with('msg',"Record Successfully Deleted");

}

   
}
