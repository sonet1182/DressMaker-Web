<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use RealRashid\SweetAlert\Facades\Alert;

class BaseController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request,$next){
            if (session('success')) {
                Alert::success(session('success'));
            }

            if (session('error')) {
                Alert::error(session('error'));
            }

            return $next($request);
        });
    }
}
