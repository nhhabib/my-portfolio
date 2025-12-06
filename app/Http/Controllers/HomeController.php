<?php
namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index()
    {
        $projects = Project::latest()->get();
        $skills = Skill::orderBy('category')->get();
        return view('home', compact('projects','skills'));
    }
}
