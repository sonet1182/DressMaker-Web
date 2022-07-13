<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Country;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class categoryController extends Controller
{
    //add category
    public function add(Request $req)
    {
        $category = new Category();
        $category->name = $req->input('name');

        // if($req->hasfile('file'))
        // {
        //     $destination = 'uploads/brand/'.$category->photo;
        //     if(File::exists($destination))
        //     {
        //         File::delete($destination);
        //     }
        //     $file = $req->file('file');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time(). '.' . $extension;

        //     Image::make($file)->resize(500,300)
        //     ->save('uploads/brand/'.$filename, 100);

        //     $category->photo = $filename;
        // }


        $category->save();

        return redirect()->back()->with('status','New Category Added Successfully!');
    }

    public function list()
    {
        $categories = Category::all();

        return view('admin.categories')->with('categories', $categories);
    }

    //update
    public function update(Request $req, $id)
    {
        $category = Category::find($id);

        $category->name = $req->input('name');

        // if($req->hasfile('file'))
        // {
        //     $destination = 'uploads/brand/'.$category->photo;
        //     if(File::exists($destination))
        //     {
        //         File::delete($destination);
        //     }
        //     $file = $req->file('file');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time(). '.' . $extension;

        //     Image::make($file)->resize(500,300)
        //     ->save('uploads/brand/'.$filename, 100);

        //     $category->photo = $filename;
        // }


        $category->update();

        return redirect()->back()->with('status','New Category Updated Successfully!');
    }

    public function country_list()
    {
        $countries = Country::all();

        return view('admin.country')->with('countries', $countries);
    }

    public function add_country(Request $req)
    {
        $country = new Country();
        $country->name = $req->input('name');

        if($req->hasfile('image'))
        {
            $destination = $country->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/images/country/', $filename);

            $country->image = 'uploads/images/country/'.$filename;
        }

        $country->save();

        return redirect()->back()->with('status','New Category Added Successfully!');
    }

    public function update_country(Request $req, $id)
    {
        $country = Country::find($id);
        $country->name = $req->input('name');

        if($req->hasfile('image'))
        {
            $destination = $country->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/images/country/', $filename);

            $country->image = 'uploads/images/country/'.$filename;
        }


        $country->update();

        return redirect()->back()->with('status','Country Updated Successfully!');
    }
}
