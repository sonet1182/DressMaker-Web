<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Project;
use App\Models\User;
use App\Models\WebInfo;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class webInfoController extends Controller
{
    //
    public function index()
    {
        $web = WebInfo::find(1);
        $countries = Country::all();
        return view('admin.settings', compact('web','countries'));
    }

    public function update_web_info(Request $req)
    {
        $web = WebInfo::find(1);

        if (empty($web)) {
            $web = new WebInfo();
        }

            $web->name = $req->name;

            if ($req->hasfile('logo')) {
                $destination = $web->logo;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $req->file('logo');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/images/', $filename);

                $web->logo = 'uploads/images/' . $filename;
            }

            $web->save();

            return back()->with('status','Web Info Updated Successfully!');
    }

    public function update_web_address(Request $req)
    {
        $web = WebInfo::find(1);

        if (empty($web)) {
            $web = new WebInfo();
        }

        $web->address1 = $req->address1;
        $web->address2 = $req->address2;
        $web->city = $req->city;
        $web->state = $req->state;
        $web->zip = $req->zip;
        $web->country = $req->country;

        $web->save();

        return back()->with('status','Web Address Updated Successfully!');
    }

    public function dashboard()
    {
        $employer = User::all()->count();
        $designer = User::all()->count();
        $project = Project::all()->count();

        return view('admin.index_admin',compact('employer','designer','project'));
    }
}
