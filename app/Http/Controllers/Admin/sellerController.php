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

    public function verify_user($id)
    {
        $user = User::find($id);
        $user->verify = 1;
        $user->save();

        return back()->with('status','User Status Updated Successfully');
    }

    public function dis_verify_user($id)
    {
        $user = User::find($id);
        $user->verify = 0;
        $user->save();

        return back()->with('status','User Status Updated Successfully');
    }
}
