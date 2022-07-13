<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\PortFolio;
use App\Models\PricingType;
use App\Models\Project;
use App\Models\ProjectProposal;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $designers = User::where('role','seller')->latest()->get();
        $employers = User::where('role','buyer')->latest()->get();
        $pricing_types = PricingType::all();
        $projects = Project::all();
        $countries = Country::all();
        // return $designers;

        return view('index',compact('categories','designers','employers','projects','pricing_types','countries'));
    }

    public function seller_details($slug)
    {
        $user = User::where('name',$slug)->first();
        $portfolios = PortFolio::where('seller_id',$user->id)->latest()->get();
        $hired_number = Project::where('hired_user',$user->id)->count();
        $reviews = Review::where('receiver_id',$user->id)->get();

        return view('developer-details',compact('user','portfolios','hired_number','reviews'));
    }

    public function designer()
    {
        $users = User::where('role','seller')->get();

        return view('developer',compact('users'));
    }

    public function project()
    {
        $projects = Project::where('hired_user',null)->latest()->get();
        $category = Category::all();
        $countries = Country::all();
        $pricings = PricingType::all();

        return view('project',compact('projects','category','countries','pricings'));
    }

    public function seller_project_details($id)
    {
        $project = Project::find($id);

        return view('view-project-detail',compact('project'));

    }

    public function project_details($id)
    {
        $project = Project::find($id);
        $employer = User::find($project->created_by);
        $total_proposals = ProjectProposal::where('project_id',$id)->get();
        $proposals = ProjectProposal::where('project_id',$id)->paginate(10);
        if(Auth::user())
        $applied = ProjectProposal::where([['seller_id',Auth::user()->id],['project_id',$id]])->first();
        else
        $applied = null;
        $hire_rate = Project::where([['created_by', $project->created_by],['hired_user','<>',null]])->count();

        return view('project-details',compact('project','employer','total_proposals','proposals','applied','hire_rate'));
    }



}
