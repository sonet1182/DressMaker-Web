<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectProposal;
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
    public function proposal()
    {
        $projects = Project::latest()->get();
        return view('freelancer-project-proposals',compact('projects'));
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
}
