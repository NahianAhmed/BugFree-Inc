<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;

class AdminController extends Controller
{

   public function __construct() {
   $this->middleware('IsAdmin');
    
}


public function index(){

    return view('admin.index');
    
   }
}
