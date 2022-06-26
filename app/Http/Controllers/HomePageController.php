<?php

namespace App\Http\Controllers;

use App\Models\Category;
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



}
