<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visitor;
use App\Models\Service;
use App\Models\Course;
use App\Models\Project;
use App\Models\Contact;
use App\Models\Review;

class HomeController extends Controller
{
    function HomeIndex()
    {
    	$userIP = $_SERVER['REMOTE_ADDR'];
    	date_default_timezone_set('Asia/Dhaka');
    	$time = date('Y-m-d h:i:sa');
    	$visitor = new Visitor();
    	$visitor->ip_address = $userIP;
    	$visitor->visit_time = $time;
    	$visitor->save();

        $services = Service::all();

        $courses = Course::orderBy('id', 'desc')->limit(6)->get();
        $projects = Project::all();
        $reviews = Review::all();

    	
    	return view('Home', compact('services', 'courses', 'projects', 'reviews'));
    }
    function sendMessage(Request $req)
    {
       $data = array(
         'contact_name'    => $req->name,
         'contact_number'  => $req->contact,
         'contact_email'   => $req->email,
         'contact_message' => $req->message,
         'created_at'      => now(),
         'updated_at'      => now()
       );
       $result = Contact::insert($data);
       if($result==true)
       {
        return 1;
       }
       else{
        return 0;
       }
    }
}
