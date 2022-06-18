<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class buyerController extends Controller
{
    //List of Buyer
    public function index()
    {
        $users = User::where('role','buyer')->get();
        return view('admin.providers')->with('users',$users);
    }
}
