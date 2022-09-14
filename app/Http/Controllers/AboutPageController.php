<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\AboutPageContent;
use App\Models\AboutPagePartner;
use App\User;

class AboutPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }


    /**
     * About Page Settings.
     * Created On : 24-01-2021
     * Author : Aneesh Ajithkumar
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutPage()
    { 
        $about_contents = AboutPageContent::first();
        $about_partners = AboutPagePartner::first();
        $image_path = 'uploads/about/';
        
        return view('about-us', compact('about_contents', 'about_partners', 'image_path'));
    }
}
