@extends('layouts.app')

@section('content')
<div class="container" id="">
    <div class="row justify-content-center">
     
             <div class="col-md-8">
                    <div class="card mb-5">
                        <div class="card-header">Dashboard</div>
        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                            You are logged in!
                        </div>
                    </div>
                </div>
    </div>
</div>

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                         alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg"
                         alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(17).jpg"
                         alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

@endsection
