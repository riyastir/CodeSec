<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cases;
use DB;
use Auth;
class Post extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function cases(Request $request){
		$name = $request->input('name');
		$gender = $request->input('gender');
		$age = $request->input('age');
		$missing_from = $request->input('missing_from');
		$missing_date = $request->input('missing_date');
		$district = $request->input('district');
		$police_station = $request->input('ps');
		$height = $request->input('height');
		$complexion = $request->input('complexion');
		$scar = $request->input('scar');
		$mole = $request->input('mole');
		$tatto = $request->input('tatto');
		$face = $request->input('face');
		$lower_dress = $request->input('lower_dress');
		$lower_dress_color = $request->input('lower_dress_color');
		$upper_dress = $request->input('upper_dress');
		$upper_dress_color = $request->input('upper_dress_color');
		$photo = $request->input('image');
		$contact_number = $request->input('contact_number');
		$notes = $request->input('notes');
		// Available alpha caracters
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

		// generate a pin based on 2 * 7 digits + a random character
		$pin = mt_rand(1000000, 9999999)
		. mt_rand(1000000, 9999999)
		. $characters[rand(0, strlen($characters) - 1)];

		// shuffle the result
		$string = str_shuffle($pin);
		$case = new Cases();
		$case->name = $name;
		$case->gender = $gender;
		$case->age = $age;
		$case->missing_from = $missing_from;
		$case->missing_date = $missing_date;
		$case->district = $district;
		$case->police_station = $police_station;
		$case->height = $height;
		$case->complexion = $complexion;
		$case->scar = $scar;
		$case->mole = $mole;
		$case->tatto  = $tatto;
		$case->face = $face;
		$case->lower_dress = $lower_dress;
		$case->upper_dress = $upper_dress;
		$case->upper_dress_color = $upper_dress;
		$case->lower_dress_color = $lower_dress_color;
		$case->photo = '';
		$case->contact_number = $contact_number;
		$case->notes = $notes;
		$case->created_by = Auth::user()->id;;
		$case->updated_by = Auth::user()->id;;
		//$case->created_at = $created_at;
		//$case->updated_at = $updated_at;
		$case->unique_code = 'KL'.$district.$string;
		$case->save();
		
		$case_id = $case->id;
		//echo json_encode($case_id);
		return back()->withInput();
	}
}
