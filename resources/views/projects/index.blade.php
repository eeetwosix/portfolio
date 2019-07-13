{{-- projects --}}
@extends('layouts/app')

@include('inc/navbar')

@section('content')
<div class="jumbotron jumbotron-fluid bg-light" style="margin-top:-2rem">
  <h1 class="text-dark text-center font-weight-bolder h2" style="margin-bottom: 1rem;">MY PROJECTS</h1>
  <div class="container pb-3">
    <div class="border border-dark card bg-light rounded-0" style="margin-top:-0.75rem">
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
            <a class="rounded-0 border border-dark btn btn-warning btn-lg text-dark col-sm-12" href="#" role="button" disabled>Live Preview  
               <i class="material-icons align-top">
                cloud_queue
                </i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
    <div class="border border-light card bg-light rounded-0">
      <div class="rounded-0 card-header bg-dark text-center text-light font-weight-bolder">
        PROJECT CATEGORY
      </div>
      <div class="card-body border border-dark">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <div class="row">
          <div class="col container pb-2">
            <a class="rounded-0 border border-dark btn btn-dark btn-lg text-light col-sm-12" href="https://www.github.com/jayemfonacier" role="button">Github</a>
          </div>
          <div class="col container pb-2">
            <a class="rounded-0 border border-dark btn btn-warning btn-lg text-dark col-sm-12" href="#" role="button">Live Preview
              <i class="material-icons align-top">
                cloud_queue
              </i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center" style="margin-top:-0.5rem;margin-bottom:-1.5rem">
      <li class="page-item">
        <a class="page-link rounded-0 text-dark border border-dark" href="#">Previous</a>
      </li>
      <li class="page-item"><a class="page-link text-dark border-dark" href="#">1</a></li>
      <li class="page-item"><a class="page-link text-dark border-dark" href="#">2</a></li>
      <li class="page-item"><a class="page-link text-dark border-dark" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link text-dark rounded-0 border border-dark" href="#">Next</a>
      </li>
    </ul>
  </nav>
</div>
<div class="jumbotron jumbotron-fluid bg-dark">
    <div class="container pt-1">
        <h2 class="display-4 text-warning" style="margin-top:-4rem">Interested in working with me?</h2>
        <p class="lead text-light">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        {{-- <hr class="my-4 bg-secondary">
        <p class="text-light">It uses utility classes for typography and spacing to space content out within the larger container.</p> --}}
        <a class="btn btn-warning btn-lg text-dark rounded-0" href="/contact" role="button">Contact me    
            <i class="material-icons align-middle">
                arrow_forward
            </i>
        </a>
    </div>
</div>

@endsection

@include('inc/footer')