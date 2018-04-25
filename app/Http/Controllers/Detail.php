<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class Detail extends Controller
{
   public function index($id){
	   $data = DB::table("cases")->select('*')->where('unique_code',$id)->get();
	   return view('detail')->with(array('data'=>$data));
   }
}
