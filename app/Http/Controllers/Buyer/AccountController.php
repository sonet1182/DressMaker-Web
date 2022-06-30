<?php

namespace App\Http\Controllers\Buyer;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserInfo;
use Faker\Provider\ar_JO\Address;

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
        $user->overview = $req->input('overview');



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

        $address = UserAddress::where('user_id',Auth::user()->id)->first();

        if(!isset($address))
        {
            $address = new UserAddress();

        }

        $address->user_id = Auth::user()->id;
        $address->address = $req->input('address');
        $address->state = $req->input('state');
        $address->zip_code = $req->input('zip_code');
        $address->state = $req->input('state');
        $address->country = $req->input('country');

        $address->save();



        $social_link = SocialLink::where('user_id',Auth::user()->id)->first();

        if(!isset($social_link))
        {
            $social_link = new SocialLink();
        }

        $social_link->user_id = Auth::user()->id;
        $social_link->facebook = $req->input('facebook');
        $social_link->dribble = $req->input('dribble');
        $social_link->twitter = $req->input('twitter');
        $social_link->linkedin = $req->input('linkedin');
        $social_link->behance = $req->input('behance');
        $social_link->instragram = $req->input('instragram');

        $social_link->save();


        return redirect()->back()->with('status','Profile Updated Successfully!');
    }

    public function profile(){
        return view('user-account-details');
    }
}
