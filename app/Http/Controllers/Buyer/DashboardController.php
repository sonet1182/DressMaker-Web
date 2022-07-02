<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        $total_project_number = Project::where([['created_by', Auth::user()->id]])->count();
        return view('employer-dashboard',compact('total_project_number'));
    }
}
