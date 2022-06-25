<?php

namespace App\Http\Controllers\Buyer;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserInfo;

class AccountController extends Controller
{
    public function update(Request $req)
    {

        $user = User::find(Auth::user()->id);

        // $validatedData = $req->validate([
        //     'profile_photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //     'cover_photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);

        $user->phone = $req->input('phone');
        $user->gender = $req->input('gender');



        if($req->hasfile('profile_photo'))
        {
            $destination = $user->photo;
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
            $destination = $user->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('cover_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/images/user/', $filename);

            $user->cover_photo = 'uploads/images/user/'.$filename;
        }


        $user->save();

        $info = UserInfo::where('user_id', $user->id)->first();

        if(empty($info))
        {
            $info = new UserInfo();
        }
        else{
            $info->address = $req->input(('info'));
            $info->state = $req->input(('state'));
            $info->zip_code = $req->input(('zip_code'));
            $info->country = $req->input(('country'));
        }


        return redirect()->back()->with('status','Profile Updated Successfully!');
    }
}
