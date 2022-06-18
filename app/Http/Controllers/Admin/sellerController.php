<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class sellerController extends Controller
{
    //List of Seller
    public function index()
    {
        $users = User::where('role','seller')->get();
        return view('admin.users')->with('users',$users);
    }
}
