<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Service;
use App\Models\ServicesMainContent;
use App\User;

class ServicePageController extends Controller
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
     * Service Page.
     * Created On : 24-01-2021
     * Author : Aneesh Ajithkumar
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function servicePage()
    { 
        $service_main_contents = ServicesMainContent::first();
        $services = Service::get();
        $image_path = 'uploads/services/';
        
        return view('services', compact('service_main_contents', 'services', 'image_path'));
    }


    /**
     * Service Details.
     * Created On : 24-01-2021
     * Author : Aneesh Ajithkumar
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function serviceDetails(Request $request, $id)
    { 
        $service_main_contents = ServicesMainContent::first();
        $service_details = Service::where('id', $id)->first();
        $image_path = 'uploads/services/';
        
        return view('service-details', compact('service_main_contents', 'service_details', 'image_path'));
    }
}
