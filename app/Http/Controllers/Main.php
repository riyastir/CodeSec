<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class Main extends Controller
{
    public function index(){
		$data = DB::table("cases")->select('*')->get();
        return view('welcome')->with(array('data'=>$data));
	}
}
