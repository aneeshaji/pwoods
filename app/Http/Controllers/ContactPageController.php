<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\ContactPageContent;
use App\User;

class ContactPageController extends Controller
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
     * Contact Page Settings.
     * Created On : 24-01-2021
     * Author : Aneesh Ajithkumar
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contactPage()
    { 
        $contact_contents = ContactPageContent::first();
        $image_path = 'uploads/contact/';
        
        return view('contact', compact('contact_contents', 'image_path'));
    }
}
