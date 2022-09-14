<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Gallery;
use App\User;

class GalleryPageController extends Controller
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
     * Gallery.
     * Created On : 24-01-2021
     * Author : Aneesh Ajithkumar
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function galleryPage()
    { 
        $gallery = Gallery::get();
        $image_path = 'uploads/gallery/';
        
        return view('gallery', compact('gallery', 'image_path'));
    }

}
