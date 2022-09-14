<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Hash;
use App\User;

class CarrerPageController extends Controller
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
     * Carrer Page Settings.
     * Created On : 24-04-2021
     * Author : Aneesh Ajithkumar
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function carrerPage()
    { 
        // $contact_contents = ContactPageContent::first();
        // $image_path = 'uploads/contact/';
        
        return view('carrer');
    }
}
