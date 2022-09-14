<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Illuminate\Support\Facades\Hash;
use App\Models\Project;
use App\Models\ProjectPageContent;
use App\User;

class ProjectPageController extends Controller
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
     * Projects.
     * Created On : 24-01-2021
     * Author : Aneesh Ajithkumar
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function projectPage()
    { 
        $projects = Project::get();
        $project_contents = ProjectPageContent::first();

        $image_path = 'uploads/projects/';
        
        return view('projects', compact('projects', 'project_contents', 'image_path'));
    }


    /**
     * Project Details.
     * Created On : 24-01-2021
     * Author : Aneesh Ajithkumar
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function projectDetails(Request $request, $id)
    { 
        $project_details = Project::where('id', $id)->first();
        $image_path = 'uploads/projects/';
        
        return view('project-details', compact('project_details', 'image_path'));
    }
}
