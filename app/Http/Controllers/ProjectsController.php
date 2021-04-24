<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectsController extends Controller
{
    function ProjectsPage()
    {
        $projects = Project::all();
        return view('Projects', compact('projects'));
    }
}
