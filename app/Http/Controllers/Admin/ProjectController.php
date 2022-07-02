<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function all_projects()
    {
        $projects = Project::latest()->get();
        return view('admin.projects',compact('projects'));
    }
}
