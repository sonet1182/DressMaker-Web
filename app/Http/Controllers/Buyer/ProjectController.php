<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PricingType;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function project_page()
    {
        $categories = Category::all();
        $pricing_types = PricingType::all();
        return view('post-project',compact('categories','pricing_types'));
    }

    public function index()
    {
        $projects = Project::where('created_by',Auth::user()->id)->get();
        return view('manage-projects',compact('projects'));
    }





    public function add(Request $req)
    {
        // $validatedData = $req->validate([
        //     'profile_photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //     'cover_photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);

        $project = new Project();

        $project->title = $req->input('title');
        $project->created_by = Auth::user()->id;
        $project->category_id = $req->input('category_id');
        $project->pricing_type_id = $req->input('pricing_type_id');
        $project->price = $req->input('price');
        $project->area = $req->input('area');
        $project->start_date = $req->input('start_date');
        $project->link = $req->input('links');
        $project->description = $req->input('description');

        if($req->hasfile('document'))
        {
            $file = $req->file('document');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/project/document/', $filename);

            $project->document = 'uploads/project/document/'.$filename;
        }

        $project->save();


        return redirect()->back()->with('status','PProject Added Successfully!');
    }
}
