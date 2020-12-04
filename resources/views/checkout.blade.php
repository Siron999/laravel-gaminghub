@extends('layouts.mainlayout')


@section('content')

<div class="container" style="color:#353535;margin-top:80px;">
<div class="container container-custom mb-2"> <h2><b>Checkout</b></h2><hr> </div>
        @if(Session::has('cart'))
      
        <div class="row" >
        <div class="col" >
       
              <ul class="list-group">
              @foreach($games as $game)
                <li class="list-group-item">
                   <strong>{{$game['item']['name']}}</strong> <br>
                   <strong>Price: {{$game['price']}}</strong> 
                   
                   <span class="badge badge-secondary" style="float:right;">{{$game['qty']}}</span>
                   <form action="/removefromcart/{{$game['item']['id']}}" method="POST">
                   @csrf
                    @method('DELETE')
                   <button class="btn btn-custom3 btn-danger " >Remove by 1</button>
                  </form>
                  <form action="/removeallfromcart/{{$game['item']['id']}}" method="POST">
                   @csrf
                    @method('DELETE')
                   <button class="btn btn-custom3 btn-danger " >Remove All</button>
                  </form>
                  </li> 
             
                  @endforeach
               </ul>   
    <div class="mt-5">
    <div class="row p-0 "  >
        <div class="col-9" >
       <strong> <label class="col-2 p-0" >Total Quantity:</label> {{$totalQty}}<strong>
        </div>
    </div>
  
    <div class="row p-0">
        <div class="col-9" >
        <strong><label class="col-2 p-0">Total Price:</label>{{$totalPrice}}</strong>
        </div>
    </div>
    <div class="row p-0 "  >
        <div class="col-9" >
        <a href="#" class="btn btn-custom btn-danger " >Checkout</a>
        </div>
    </div>
<div>
  
        




       
       
       
       
       
     

        @endif




</div>
@endsection