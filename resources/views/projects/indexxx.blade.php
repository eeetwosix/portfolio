
@if(count($projects) > 0) 
@foreach($projects as $project)
<div class="jumbotron jumbotron-fluid bg-light">
  <div class="container">
    <div class="card bg-light rounded-0" style="margin-top:-0.75rem">
      <div class="rounded-0 card-header bg-dark text-center text-light font-weight-bolder">
        {{$project->category}} 
      </div>
      <div class="card-body border border-dark">
        <h5 class="card-title">{{$project->project_title}}</h5>
        <p class="card-text">{{$project->project_description}}</p>
        <div class="row">
          <div class="col container pb-2">
            <a class="rounded-0 border border-dark btn btn-dark btn-lg text-light col-sm-12" href="{{$project->github_link}}" role="button">Github</a>
          </div>
          <div class="col container pb-2">
            <a class="rounded-0 border border-dark btn btn-warning btn-lg text-dark col-sm-12" href="{{$project->live_preview_link}}" role="button">Live Preview  
                <i class="material-icons align-top">
                cloud_queue
                </i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  @else
      <p>No posts found</p>
  @endif
</div>
  
<div class="jumbotron jumbotron-fluid bg-dark text-center">
  <div class="container pt-1">
      <h2 class="display-4 text-warning" style="margin-top:-1rem">Interested in working with us?</h2>
      <p class="lead text-light">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      {{-- <hr class="my-4 bg-secondary">
      <p class="text-light">It uses utility classes for typography and spacing to space content out within the larger container.</p> --}}
      <a class="btn btn-warning btn-lg text-dark rounded-0" href="/contact" role="button">Contact us    
          <i class="material-icons align-middle">
              arrow_forward
          </i>
      </a>
  </div>
</div>