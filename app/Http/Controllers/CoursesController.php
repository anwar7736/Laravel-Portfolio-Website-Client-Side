<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class CoursesController extends Controller
{
    function CoursesPage()
    {
        $courses = Course::orderBy('id', 'desc')->limit(6)->get();
        return view('Courses', compact('courses'));
    }
}
