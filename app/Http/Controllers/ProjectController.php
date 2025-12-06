<?php
namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'nullable|string',
            'image'=>'nullable|image|max:2048',
            'live_link'=>'nullable|url',
            'github_link'=>'nullable|url',
        ]);

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        Project::create($data);
        return redirect()->route('projects.index')->with('success','Project created.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'nullable|string',
            'image'=>'nullable|image|max:2048',
            'live_link'=>'nullable|url',
            'github_link'=>'nullable|url',
        ]);

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);
        return redirect()->route('projects.index')->with('success','Project updated.');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('success','Project deleted.');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
