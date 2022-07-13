<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectProposal;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::latest()->get();
        return view('project_list',compact('projects'));
    }


    public function submit_proposal(Request $req, $id)
    {
        $proposal = new ProjectProposal();
        $proposal->seller_id = Auth::user()->id;
        $proposal->project_id = $id;
        $proposal->budget = $req->budget;
        $proposal->delivery_date = $req->delivery_date;
        $proposal->cover_letter = $req->cover_letter;
        $proposal->save();

        return back()->with('status','Proposal Submitter Successfully!');
    }

    public function delete_proposal($id)
    {
        $projects = ProjectProposal::find($id);
        $projects->delete();

        return back()->with('status','Proposal Removed Successfully!');
    }

    public function proposal()
    {
        $projects = ProjectProposal::where('seller_id',Auth::user()->id)->latest()->get();
        return view('freelancer-project-proposals',compact('projects'));
    }

    public function ongoing_projects()
    {
        $projects = Project::where('hired_user',Auth::user()->id)->latest()->get();
        $type = 'ongoing';
        return view('freelancer-ongoing-projects',compact('projects','type'));
    }
    public function completed_projects()
    {
        $projects = Project::where([['hired_user',Auth::user()->id],['status',5]])->latest()->get();
        $type = 'completed';
        return view('freelancer-ongoing-projects',compact('projects','type'));
    }
    public function cancelled_projects()
    {
        $projects = Project::where([['hired_user',Auth::user()->id],['status',6]])->latest()->get();
        $type = 'cancelled';
        return view('freelancer-ongoing-projects',compact('projects','type'));
    }


    public function ongoing_project_details($id)
    {
        $project = Project::find($id);
        return view('freelancer-view-project-detail',compact('project'));
    }


    public function submit_project($id)
    {
        $project = Project::find($id);
        return view('submit_project',compact('project'));
    }

    public function review()
    {
        $reviews = Review::where('receiver_id', Auth::user()->id)->get();
        return view('freelancer-review', compact('reviews'));
    }


}
