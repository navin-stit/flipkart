@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">
            <!-- Card -->
            <div class="card booking-card">

                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/8-col/img (5).jpg" alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title font-weight-bold"><a>La Sirena restaurant</a></h4>
                    <!-- Data -->
                    <ul class="list-unstyled list-inline rating mb-0">
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                        <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                        <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                    </ul>
                    <p class="mb-2">$ • American, Restaurant</p>
                    <!-- Text -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <hr class="my-4">
                    <p class="lead"><strong>Tonight's availability</strong></p>
                    <ul class="list-unstyled list-inline d-flex justify-content-between mb-0">
                        <li class="list-inline-item mr-0">
                            <div class="chip mr-0">5:30PM</div>
                        </li>
                        <li class="list-inline-item mr-0">
                            <div class="chip deep-purple white-text mr-0">7:30PM</div>
                        </li>
                        <li class="list-inline-item mr-0">
                            <div class="chip mr-0">8:00PM</div>
                        </li>
                        <li class="list-inline-item mr-0">
                            <div class="chip mr-0">9:00PM</div>
                        </li>
                    </ul>
                    <!-- Button -->
                    <a href="#" class="btn btn-flat deep-purple-text p-1 mx-0 mb-0">Button</a>

                </div>

            </div>
            <!-- Card -->
        </div>
        <div class="col-4"><!-- Card -->
            <div class="card promoting-card" style="height:93vh;">

                <!-- Card content -->
                <div class="card-body d-flex flex-row">

                    <!-- Avatar -->
                    <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">

                    <!-- Content -->
                    <div>

                        <!-- Title -->
                        <h4 class="card-title font-weight-bold mb-2">New spicy meals</h4>
                        <!-- Subtitle -->
                        <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>

                    </div>

                </div>

                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top rounded-0" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/full page/2.jpg" alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Card content -->
                <div class="card-body">

                    <div class="collapse-content">

                        <!-- Text -->
                        <p class="card-text collapse" id="collapseContent">Recently, we added several exotic new dishes to the menu of our restaurant. They come from countries such as Mexico, Argentina, and Spain. Come to us, have a delicious wine and enjoy the juicy meals from around the world.</p>
                        <!-- Button -->
                        <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 collapsed" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent"></a>
                        <i class="fas fa-share-alt text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
                        <i class="fas fa-heart text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>

                    </div>

                </div>

            </div>
            <!-- Card -->
        </div>
        <div class="col-4">
            <!-- Card -->
            <div class="card" style="height:93vh;">

                <!-- Card image -->
                <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="Card image cap">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!-- Button -->
                <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3"><i class="fas fa-chevron-right pl-1"></i></a>

                <!-- Card content -->
                <div class="card-body">

                    <!-- Title -->
                    <h4 class="card-title">Card title</h4>
                    <hr>
                    <!-- Text -->
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>

                <!-- Card footer -->
                <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                    <ul class="list-unstyled list-inline font-small">
                        <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i>05/10/2015</li>
                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="far fa-comments pr-1"></i>12</a></li>
                        <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fab fa-facebook-f pr-1"> </i>21</a></li>
                        <li class="list-inline-item"><a href="#" class="white-text"><i class="fab fa-twitter pr-1"> </i>5</a></li>
                    </ul>
                </div>

            </div>
            <!-- Card -->
        </div>
    </div>
</div>


@endsection