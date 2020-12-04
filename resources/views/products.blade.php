@extends('layouts.mainlayout')

@section('content')

<div class="container" style="margin-top:80px;padding:0px;" >
<div class="container container-custom mb-2"> <h2><b>All Products</b></h2><hr> </div>
   
   @foreach($id as $all)
   <div class="row  mx-0" style="border:1px groove #353535;background:#FFFFFF;margin-bottom:50px">
    <div class="col-md-6 col-lg-3 my-0 mx-0" style="padding:0px;">
        <div class="card mb-0" style="height:390px;border:none;" >
                <img src="/uploads/{{$all->file}}" style="height:260px;border-radius:5px;" class="card-img-top-img-fluid">
                <div class="card-body">
                    <h4 class="card-title"> {{$all->name}}  </h4>
                    <h5 class="card-title"> Price: Rs.{{$all->price}}  </h5>
                    <form action="/admin/edit/product/{{$all -> id}}" method="GET" style="positiotn:relative;float:left;">
                    @csrf
                    <button class="btn btn-custom2 btn-danger" >Edit</button>
                    </form>
                    
                    <form action="/admin/products/{{$all->id}}" method="POST" style="positiotn:relative;float:left;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-custom2 btn-danger" >Delete</button>
                    </form>
                   
                </div>
        </div>
        

     </div>

     <div class="col " style="color:black; font-size:14px;">
        <div class="container mt-3"><p>{!! nl2br(e($all->details)) !!}</p></div>


     </div>

    </div>
    @endforeach

   
</div>






@endsection