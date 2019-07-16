{{-- projects --}}
@extends('layouts/app')

@include('inc/navbar')

@section('content')

<div class="jumbotron jumbotron-fluid bg-dark text-center">
  <div class="container">
      <h2 class="text-warning" style="margin-top:-2rem;">Interested in working with me?</h2>
      <p class="lead text-light">Check my projects down below! See if I'm the perfect one for you!</p>
      <a class="btn btn-warning btn-lg text-dark rounded-0" href="/contact" role="button" style="margin-bottom:4rem">Contact me
          <i class="material-icons align-middle">
              arrow_forward
          </i>
      </a>
  </div>
  <div class="rounded-0 bg-dark" style="margin-top:-3rem">
    @if(count($projects) > 0)
      @foreach($projects as $project)
      <div class="container pb-2">
        <div class="card rounded-0 bg-warning">
          <div class="card-header rounded-0 bg-dark text-warning font-weight-bolder text-center text-uppercase">
            {{$project->category}}
          </div>
          <div class="card-body bg-warning">
            <p class="font-weight-bold" style="margin-top:-1rem">{{$project->project_title}}</p>
            <p class="font-weight-light" style="margin-top:-1rem">{{$project->project_description}}</p>
            <div class="card-body row"  style="margin-bottom:-1rem">
              <div class="col container pb-1" style="margin-top:-1rem">
                <a class="rounded-0 border border-dark btn btn-dark btn-lg text-light col-sm-12" href="{{$project->github_link}}" role="button">Github</a>
              </div>
              <div class="col container pb-1" style="margin-top:-1rem">
                <a class="rounded-0 border border-dark btn btn-light btn-lg text-dark col-sm-12 font-weight-bolder" href="{{$project->live_preview_link}}" role="button">LIVE PREVIEW
                    <i class="material-icons align-middle">
                        cloud
                    </i>
                  </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      {{-- https://mattstauffer.com/blog/customizing-pagination-templates-in-laravel-5-3/ --}}
        <div class="pt-2">
            {{$projects->links("pagination::bootstrap-4")}}
        </div>
    @else
      <h2 class="text-warning text-uppercase">Nothing to show</h2>
    @endif
    @endsection
  </div>
</div>

@include('inc/footer')

