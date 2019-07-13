@extends('layouts/app')

@include('inc/navbar')

@section('content')

<div class="jumbotron jumbotron-fluid bg-dark">
    <form class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="font-weight-bold text-warning text-center" 
                    style="font-family: 'Open Sans', sans-serif;">CONTACT FORM</h1>
                <p class="text-light text-center">Let us know how we can talk to you!</p>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group col-sm-12">
                    {{-- <label for="toName" class="text-warning">Name</label> --}}
                    <input type="text" class="form-control rounded-0 border-warning" id="toName" placeholder="Name" required>
                </div>
                <div class="form-group col-sm-12">
                    {{-- <label for="toPhoneNumber" class="text-warning">Phone Number</label> --}}
                    <input type="text" class="form-control rounded-0 border-warning" id="toPhoneNumber" placeholder="Phone number (optional)">
                </div>
                <div class="form-group col-sm-12">
                    {{-- <label for="toEmailAddress" class="text-warning">Email Address</label> --}}
                    <input type="email" class="form-control rounded-0 border-warning" id="toEmailAddress" placeholder="Email address" aria-describedby="confidential" required>
                    <small id="confidential" class="form-text text-light">
                        Your information will not be shared with anyone.
                    </small>
                </div>
                <div class="form-group col-sm-12">
                    <label for="toMessage" class="text-warning font-weight-bold">What's this about?</label>
                    <textarea class="form-control rounded-0 border-warning" style="resize:none;" id="toMessage" rows="5" aria-describedby="textAreaDesc" placeholder="Your message..." required></textarea>
                    <small id="textAreaDesc" class="form-text text-light">
                        Expect a message from us within 1-3 days, we appreciate your patience!
                    </small>
                </div>
                <div class="text-center col-sm-12">
                    <button type="submit" class="btn btn-warning btn-lg btn-block rounded-0">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@include('inc/footer')