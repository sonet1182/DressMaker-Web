<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PricingType;
use App\Models\Project;
use App\Models\ProjectProposal;
use Carbon\Carbon;
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
        $projects = Project::where('created_by',Auth::user()->id)->latest()->get();
        return view('manage-projects',compact('projects'));
    }

    public function project_details($id){
        $project = Project::find($id);
        return view('view-project-detail',compact('project'));
    }
    public function project_proposals($id){
        $project = Project::find($id);
        $proposals = ProjectProposal::where('project_id',$id)->paginate(10);
        return view('project-proposals', compact('project','proposals'));
    }

    public function hire_designer(Request $req, $id){
        $project = Project::find($id);
        $project->hired_user = $req->seller_id;
        $project->hired_at = Carbon::now()->toDateTimeString();
        $project->save();
        return back()->with('status','Designer Hired Successfully');
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
        $project->end_date = $req->input('end_date');
        $project->link = $req->input('links');
        $project->description = $req->input('description');

        $project->qualification = $req->input('qualification');
        $project->experience = $req->input('experience');
        $project->job_type = $req->input('job_type');

        if($req->hasfile('document'))
        {
            $file = $req->file('document');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/project/document/', $filename);

            $project->document = 'uploads/project/document/'.$filename;
        }

        $project->save();


        return redirect()->back()->with('status','Project Added Successfully!');
    }
}
