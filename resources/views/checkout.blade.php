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
         <form action="https://uat.esewa.com.np/epay/main" method="POST">
                <input value="{{$totalPrice + 10}}" name="tAmt" type="hidden">
                    <input value="{{$totalPrice}}" name="amt" type="hidden">
                    <input value="10" name="txAmt" type="hidden">
                    <input value="0" name="psc" type="hidden">
                    <input value="0" name="pdc" type="hidden">
                    <input value="testmerchant" name="scd" type="hidden">
                    <input value="121234" name="pid" type="hidden">
                    <input value="http://merchantsite.com/success,html?q=su" type="hidden" name="su">
                    <input value="http://merchantsite.com/failure.html?q=fu" type="hidden" name="fu">
                <input value="Checkout" type="submit">
            </form>
        </div>
    </div>
<div>

        @endif

</div>
@endsection
