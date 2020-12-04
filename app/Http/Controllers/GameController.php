<?php

namespace App\Http\Controllers;
use App\Models\Game;
use App\Models\Product;
use App\Models\Cart;
use Session;


use Illuminate\Http\Request;

class GameController extends Controller
{
      
    public function index(){
        


        return view('welcome');
    
            }

    


    public function show($id){
//checking json data representation 
        $all=Game::whereJsonContains('genre', $id)->get();
        


        return view('genre',['id'=>$all],['title'=>strtoupper($id)]);


    }
    public function show2($id){
//checking json data representation 
        $all=Product::whereJsonContains('type', $id)->get();
        


        return view('type',['id'=>$all],['title'=>strtoupper($id)]);


    }

    public function details($id){
                $all=Game::where('id', $id)->get();
                
        
        
                return view('gamedetails',['id'=>$all]);
        
        
            }

            
    public function details2($id){
        $all=Product::where('id', $id)->get();
        


        return view('productdetails',['id'=>$all]);


    }

//searchengine
    public function search(){
       // if(request('search')!=null){
               // $key=request('search');
               // $all=Game::where('name','like', '%'.$key.'%')
                  //  ->orWhere('details','like','%'.$key.'%')
                   // ->orWhere('genre','like','%'.$key.'%')
                   // ->paginate(20);
                   // return view('search',['id'=>$all]);
       // }
       $key=request('search');
       $game=Game::search($key)->get();
       $product=Product::search($key)->get();

       //merging search result of both game and product model
       $all = $game->merge($product);
       return view('search',['id'=>$all]);




        return back();

    }
   

//adding item to the cart

    public function addtocart(Request $request,$id){
        $game= Game::find($id);
        if($game==null){
        $game= Product::find($id);
        }   
        $oldCart=Session::has('cart') ? Session::get('cart') :null;
        $cart= new Cart($oldCart);
        $cart->add($game,$game->id);
        
        
        $request->session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return back();


    }   
    // for the ceckout view
    public function cart(){
        if(!Session::has('cart')){
            return view('checkout');

        }
       
        $oldCart=Session::has('cart') ? Session::get('cart') :null;
        $cart= new Cart($oldCart);
        return view('checkout',['games'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
     
    }

    //deleting single quanity  from item in cart
    public function deletefromcart($id){
        $oldCart=Session::get('cart');
        $cart= new Cart($oldCart);
        $cart->delete($id);
        
        
        Session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return back();


    }
    //deleting all the quanitity from a item in te cart
    public function deleteallfromcart($id){
        $oldCart=Session::get('cart');
        $cart= new Cart($oldCart);
        $cart->deleteall($id);
        
        
        Session()->put('cart',$cart);
        //dd($request->session()->get('cart'));
        return back();


    }

}
