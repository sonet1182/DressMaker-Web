<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AccountController extends Controller
{

    //update
    public function update(Request $req)
    {

        $user = User::find(Auth::user()->id);

        // $validatedData = $req->validate([
        //     'profile_photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //     'cover_photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);

        $user->phone = $req->input('phone');
        $user->gender = $req->input('gender');
        $user->hourly_rate = $req->input('hourly_rate');


        if($req->hasfile('profile_photo'))
        {
            $destination = $user->profile_photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('profile_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/images/user/', $filename);

            $user->profile_photo = 'uploads/images/user/'.$filename;
        }

        if($req->hasfile('cover_photo'))
        {
            $destination = $user->cover_photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('cover_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/images/user/cover_photo/', $filename);

            $user->cover_photo = 'uploads/images/user/cover_photo/'.$filename;
        }


        $user->save();

        return redirect()->back()->with('status','Profile Updated Successfully!');
    }
}
