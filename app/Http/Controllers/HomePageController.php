<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $designers = User::where('role','seller')->get();

        return view('index',compact('categories','designers'));
    }

    public function seller_details($slug)
    {
        $user = User::where('name',$slug)->first();

        return view('developer-details',compact('user'));
    }

    public function designer()
    {
        $users = User::where('role','seller')->get();

        return view('developer',compact('users'));
    }

    public function project()
    {
        $projects = Project::latest()->get();

        return view('project',compact('projects'));
    }

    public function project_details($id)
    {
        $projects = Project::find($id);

        return view('view-project-detail',compact('project'));
    }



}
