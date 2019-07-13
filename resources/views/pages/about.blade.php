@extends('layouts/app')

@include('inc/navbar')

@section('content')

<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container">
        <h2 class="display-4">About</h2>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>
</div>

<div class="jumbotron jumbotron-fluid bg-dark" style="margin-top: -2rem;">
    <div class="container">
        <h2 class="display-4 text-light">Projects</h2>
        <p class="lead text-light">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p class="text-light">It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>
</div>

<div class="jumbotron jumbotron-fluid bg-light" style="margin-top:-2rem;">
    <div class="container">
        <h2 class="display-4">Contact</h2>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-dark btn-lg text-light rounded-0" href="/projects" role="button">Learn more 
            <i class="material-icons align-middle">
                arrow_forward
            </i>
        </a>
    </div>
</div>
@endsection

@include('inc/footer')