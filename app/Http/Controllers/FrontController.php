<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Hardskill;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request) 
    {   
        // // Ambil kategori yang dipilih dari parameter query
        // $categoryId = $request->input('category_id');
        
        // // Filter proyek berdasarkan kategori jika ada
        // $latest_project = $categoryId 
        //     ? Project::where('project_category_id', $categoryId)->get()
        //     : Project::inRandomOrder()->get();

        $latest_project = Project::inRandomOrder()->get();
        $project_category = ProjectCategory::all();
        $hardskill = Hardskill::all();
        $experience = WorkExperience::all();
        $education = Education::all();

        return view('front.home', compact('latest_project', 'project_category', 'hardskill', 'experience', 'education'));
    }
}
