<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\HomePageBannerImage;
use App\Models\HomePageAboutSection;
use App\Models\HomePageProjectSection;
use App\Models\HomePageTestimonial;
use App\Models\Project;
use App\Models\HomePageContactBannerSection;
use App\User;

class HomePageController extends Controller
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
     * Home Page Settings - Main.
     * Created On : 08-01-2021
     * Author : Aneesh Ajithkumar
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function homePageBannerImage()
    {
        $banner_images = HomePageBannerImage::first();
        $about_contents = HomePageAboutSection::first();
        $project_contents = HomePageProjectSection::first();
        $testimonials = HomePageTestimonial::get();
        $projects = Project::get();
        $contact_banner_contents = HomePageContactBannerSection::first();

        $banner_image_path = 'uploads/home/banners/';
        $about_image_path = 'uploads/home/about/';
        $project_image_path = 'uploads/projects/';
 
        return view('home', compact('banner_images', 'banner_image_path', 'about_image_path', 'about_contents', 'testimonials', 'projects', 'project_contents', 'project_image_path', 'contact_banner_contents'));
    }


    /**
     * Home Page Settings - About.
     * Created On : 06-01-2021
     * Author : Aneesh Ajithkumar
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('modules/home/home_about_section_contents');
    }
}
