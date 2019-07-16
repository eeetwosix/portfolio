@extends('layouts/app')

@include('inc/navbar')

@section('content')
<div class="jumbotron jumbotron-fluid bg-dark" style="margin-top:-2.5rem">
    <div class="jumbotron jumbotron-fluid bg-dark">
        <form action="projects" method="POST" class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="font-weight-bold text-warning text-center" >PROJECT FORM</h1>
                    <p class="text-light text-center">Add your project here!</p>
                    <div class="form-group col-sm-12">
                        {{-- <label for="toName" class="text-warning">Name</label> --}}
                        <textarea maxlength="200" class="form-control rounded-0 border-warning" style="resize:none;" id="toMessage" rows="4" aria-describedby="projectTitle" placeholder="Project Title" name="project_title" required></textarea>
                        <small id="textAreaDesc" class="form-text text-light">
                            Maximum of 200 characters
                        </small>
                    </div>
                    <div class="form-group col-sm-12">
                        {{-- <label for="toProjectDescription" class="text-warning font-italic">Optional</label> --}}
                        <textarea maxlength="250" class="form-control rounded-0 border-warning" style="resize:none;" id="toMessage" rows="4" aria-describedby="projDescription" placeholder="Project Description"  name="project_description" required></textarea>
                        <small id="textAreaDesc" class="form-text text-light">
                            Maximum of 250 characters
                        </small>
                    </div>
                    <div class="form-group col-sm-12">
                        {{-- <label for="toLivePreviewLink" class="text-warning">Email Address</label> --}}
                        <input maxlength="205" type="text" class="form-control rounded-0 border-warning" id="toGithubLink" placeholder="Github Link" aria-describedby="githubLink" name="github_link" required>
                    </div>
                    <div class="form-group col-sm-12">
                        {{-- <label for="toGithubLink" class="text-warning">Email Address</label> --}}
                        <input maxlength="200" type="text" class="form-control rounded-0 border-warning" id="toLivePreviewLink" placeholder="Live Preview Link" name="live_preview_link" aria-describedby="livePreviewLink" required>
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="form-group">
                            <label for="toProjectCategory" class="text-warning font-weight-bolder text-uppercase d-flex justify-content-center">Project Category</label>
                            <select class="form-control border border-warning rounded-0 text-center" id="toProjectCategory"  name="category" required>
                            <option value="Internet of Things">Internet of Things</option>
                            <option value="Embedded System">Embedded System</option>
                            <option value="Web Application">Web Application</option>
                            <option value="Mobile Application">Mobile Application</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center col-sm-12">
                        <button type="submit" class="btn btn-warning btn-lg btn-block rounded-0" style="margin-bottom:3rem">Submit</button>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                <h1 class="font-weight-bold text-warning text-center" style="margin-bottom:2.9rem">MOST RECENT PROJECTS</h1> 
                @if(count($projects) > 0) 
                    @foreach($projects as $project)
                    <div class="card border border-warning rounded-0" style="margin-bottom:3rem">
                        <h5 class="card-header bg-dark rounded-0 text-warning text-uppercase text-center font-weight-bolder">{{$project->category}}</h5>
                        <div class="card-body bg-warning">
                            <h5 class="card-title">{{$project->project_title}}</h5>
                            <p class="card-text">{{$project->project_description}}</p>
                            <div class="row">
                                <div class="col container pb-1">
                                    <a class="rounded-0 border border-dark btn btn-dark btn-lg text-light col-sm-12" href="{{$project->github_link}}" role="button">Github</a>
                                </div>
                                <div class="col container pb-1">
                                <a class="rounded-0 border border-dark btn btn-light btn-lg text-dark col-sm-12 font-weight-bolder" href="{{$project->live_preview_link}}" role="button">LIVE PREVIEW
                                    <i class="material-icons align-middle">
                                        cloud
                                    </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                </div>
                        <h2 class="text-warning text-uppercase">Nothing to show</h2>
                    @endif
            </div>
            @csrf
        </form>
    </div>
</div>
@endsection

@include('inc/footer')
