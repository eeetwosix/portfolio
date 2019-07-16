<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        //katumbas na query nito sa SQL
        //$projects = DB::select('SELECT * FROM projects');
        // $projects = Project::orderBy('created_at', 'asc')->get();
        $projects = Project::orderBy('created_at', 'asc')->paginate(2);

        //if gagamit ng ganito
        //kailangan lang talaga gumamit ng
        //to get a specific post using where clause
        //$project = Project::where('project_title','2')->get();
        return view('projects/index')->with('projects', $projects);
    }

    public function create()
    {
        $projects = Project::orderBy('created_at', 'desc')->take(2)->get();

        return view('projects/create')->with('projects', $projects);
    }

    public function store(Request $request)
    {
        $project = new Project();
        $project->project_title=request('project_title');
        $project->project_description=request('project_description');
        $project->github_link=request('github_link');
        $project->live_preview_link=request('live_preview_link');
        $project->category=request('category');

        $project->save();
        
        return back();
    }
}
