<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\PortFolio;
use App\Models\Project;
use App\Models\Review;
use App\Models\SellerInfo;
use App\Models\SocialLink;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\JsonDecoder;

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
        $user->language = $req->input('language');
        $user->overview = $req->input('overview');



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

        $seller = SellerInfo::where('user_id',Auth::user()->id)->first();

        if(!isset($seller))
        {
            $seller = new SellerInfo();

        }

        $seller->user_id = Auth::user()->id;
        $seller->type = $req->input('type');
        $seller->skills = $req->input('skills');
        $seller->awards = $req->input('awards');
        $seller->languages = $req->input('languages');
        $seller->experience = $req->input('experience');


        $seller->save();

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

    public function dashboard()
    {
        $hired = Project::where('hired_user',Auth::user()->id)->get();
        $completed = Project::where([['hired_user',Auth::user()->id],['status',5]])->latest()->get();
        $reviews = Review::where([['receiver_id',Auth::user()->id]])->count();

        return view('freelancer-dashboard', compact('hired','completed','reviews'));
    }


    public function portfolio()
    {
        $portfolios = PortFolio::where('seller_id',Auth::user()->id)->latest()->paginate(9);
        return view('freelancer-portfolio',compact('portfolios'));
    }


    public function add_portfolio(Request $req)
    {
        $portfolio = new PortFolio();
        $portfolio->seller_id = Auth::user()->id;
        $portfolio->title = $req->title;
        $portfolio->link = $req->link;

        if($req->hasfile('image'))
        {
            $destination = $portfolio->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/images/user/portfolio/', $filename);

            $portfolio->image = 'uploads/images/user/portfolio/'.$filename;
        }

        $portfolio->save();

        return back()->with('status','Portfolio Added Successfully!');
    }
}
