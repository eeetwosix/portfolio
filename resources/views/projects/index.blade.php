{{-- projects --}}
@extends('layouts/app')

@include('inc/navbar')

@section('content')
<div class="container">
  <h1 class="text-warning text-center font-weight-bolder" style="margin-bottom: 2rem;">MY PROJECTS</h1>
  <div class="container pb-3" style="margin-bottom: 2rem;">
    <div class="border border-light card bg-light rounded-0">
      <div class="rounded-0 card-header bg-dark text-center text-light font-weight-bolder">
        PROJECT CATEGORY 
      </div>
      <div class="card-body">
        <h5 class="card-title">An Embedded System Solution for Asia Pacific College's Air Conditioner Management System</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <div class="row">
          <div class="col container pb-2">
            <a class="rounded-0 border border-dark btn btn-dark btn-lg text-light col-sm-12" href="https://www.github.com/jayemfonacier" role="button">Github</a>
          </div>
          <div class="col container pb-2">
            <a class="rounded-0 border border-dark btn btn-warning btn-lg text-dark col-sm-12" href="#" role="button" disabled>Live Page  
               <i class="material-icons align-top">
                cloud_queue
                </i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3" style="margin-bottom: 2rem;">
    <div class="border border-light card bg-light rounded-0">
      <div class="rounded-0 card-header bg-dark text-center text-light font-weight-bolder">
        PROJECT CATEGORY
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <div class="row">
          <div class="col container pb-2">
            <a class="rounded-0 border border-dark btn btn-dark btn-lg text-light col-sm-12" href="https://www.github.com/jayemfonacier" role="button">Github</a>
          </div>
          <div class="col container pb-2">
            <a class="rounded-0 border border-dark btn btn-warning btn-lg text-dark col-sm-12" href="#" role="button">Live Page
              <i class="material-icons align-top">
                cloud_queue
              </i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3" style="margin-bottom: 2rem;">
    <div class="border border-light card bg-light rounded-0">
      <div class="rounded-0 card-header bg-dark text-center text-light font-weight-bolder">
        PROJECT CATEGORY
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <div class="row">
          <div class="col container pb-2">
            <a class="rounded-0 border border-dark btn btn-dark btn-lg text-light col-sm-12" href="https://www.github.com/jayemfonacier" role="button">Github</a>
          </div>
          <div class="col container pb-2">
            <a class="rounded-0 border border-dark btn btn-warning btn-lg text-dark col-sm-12" href="#" role="button">Live Page   
              <i class="material-icons align-top">
                cloud_queue
              </i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@include('inc/footer')