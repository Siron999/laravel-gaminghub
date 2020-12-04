@extends('layouts.mainlayout')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide abc " style="margin-top:50px" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/img/slide2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/slide1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/img/slide3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container my-5">
    <div class="container container-custom mb-4" style="color:#353535;"> <h2><b>FREE GAMES</b></h2><hr> </div>
    <div class="row mb-4">
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card mb-4" style="height:310px;" >
                <img src="/img/c1.jpg" style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body">
                    <a href="/gamedetails/{{1}}" class="btn btn-custom btn-danger" >GET NOW</a>
                </div>
                </div>

         </div>
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card  mb-4" style="height:310px;" >
                <img src="/img/c2.jpg" style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body my-0">
                    <a href="/gamedetails/{{2}}" class="btn btn-custom btn-danger">GET NOW</a>
                </div>
                </div>

         </div>
        
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card  mb-4" style="height:310px;">
                <img src="/img/c3.jpg"style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body my-0">
                    <a href="/gamedetails/{{3}}" class="btn btn-custom btn-danger">GET NOW</a>
                </div>
                </div>

           
            </div>
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card  mb-4" style="height:310px;" >
                <img src="/img/c4.jpg" style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body my-0">
                    <a href="/gamedetails/{{4}}" class="btn btn-custom btn-danger">GET NOW</a>
                </div>
                </div>

            
            </div>
    </div>
    <div class="container container-custom mb-4" style="color:#353535;"> <h2><b>BEST SELLERS</b></h2><hr> </div>
 <div class="row">
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card my-0" style="height:3010x;" >
                <img src="/img/c5.jpg" style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body">
                    <a href="/gamedetails/{{5}}" class="btn btn-custom btn-danger " >BUY</a>
                </div>
                </div>

         </div>
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card  my-0" style="height:310px;" >
                <img src="/img/c6.jpg" style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body my-0">
                    <a href="/gamedetails/{{6}}" class="btn btn-custom btn-danger">BUY</a>
                </div>
                </div>

         </div>
        
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card  my-0" style="height:310px;">
                <img src="/img/c7.jpg"style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body my-0">
                    <a href="/gamedetails/{{7}}" class="btn btn-custom btn-danger">BUY</a>
                </div>
                </div>

           
            </div>
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card  my-0" style="height:310px;" >
                <img src="/img/c8.jpg" style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body my-0">
                    <a href="/gamedetails/{{8}}" class="btn btn-custom btn-danger">BUY</a>
                </div>
                </div>

            
            </div>
</div>

<div class="container container-custom mt-5 mb-4" style="color:#353535;"> <h2><b>ELECTRONIC PRODUCTS</b></h2><hr> </div>
 <div class="row">
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card my-0" style="height:3010x;" >
                <img src="/img/p1.jpg" style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body">
                    <a href="/productdetails/{{1001}}" class="btn btn-custom btn-danger " >BUY</a>
                </div>
                </div>

         </div>
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card  my-0" style="height:310px;" >
                <img src="/img/p2.jpg" style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body my-0">
                    <a href="/productdetails/{{1002}}" class="btn btn-custom btn-danger">BUY</a>
                </div>
                </div>

         </div>
        
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card  my-0" style="height:310px;">
                <img src="/img/p3.jpg"style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body my-0">
                    <a href="/productdetails/{{1003}}" class="btn btn-custom btn-danger">BUY</a>
                </div>
                </div>

           
            </div>
        <div class="col-md-6 col-lg-3 my-0">
            <div class="card  my-0" style="height:310px;" >
                <img src="/img/p4.jpg" style="height:260px;" class="card-img-top-img-fluid">
                <div class="card-body my-0">
                    <a href="/productdetails/{{1004}}" class="btn btn-custom btn-danger">BUY</a>
                </div>
                </div>

            
            </div>
</div>






</div>









@endsection
