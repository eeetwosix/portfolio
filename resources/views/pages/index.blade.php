@extends('layouts/app')

@include('inc/navbar')

@section('content')

    <div class="jumbotron jumbotron-fluid bg-warning">
        <div class="container">
            <h1 class="display-4">About</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4 bg-dark">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-dark btn-lg text-warning rounded-0" href="#" role="button">Learn more</a>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-dark" style="margin-top: -2rem;">
        <div class="container">
            <h1 class="display-4 text-warning">Projects</h1>
            <p class="lead text-warning">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4 bg-warning">
            <p class="text-warning">It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-warning btn-lg rounded-0" href="#" role="button">Learn more</a>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid bg-warning" style="margin-top:-2rem;">
        <div class="container">
            <h1 class="display-4">Contact</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4 bg-dark">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-dark btn-lg text-warning rounded-0" href="#" role="button">Learn more</a>
        </div>
    </div>

    @include('inc/footer')
@endsection