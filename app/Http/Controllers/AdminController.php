<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Product;





class AdminController extends Controller
{
    public function index(){
        
        $all=Game::all();

        return view('admin');
    
    }

     public function index2(){
        
     $all=Game::all();
        
        return view('games',['id'=>$all]);
            
      } 
      public function index3(){
        
        $all=Product::all();

        return view('products',['id'=>$all]);
    
            }   
    
   
   
   
    public function createGame(){
        


        return view('addgame');
    
            }

        
    public function createProduct(){
        


        return view('addproduct');
    
            }
//inserting game into db
    public function store(Request $request){

        $gg=new Game();
        

        
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv,jpeg,png,jpg|max:2048',
        ]);
  
        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);
        $gg->file=$fileName;
        $gg->name=$request->input('name');
        $gg->price=$request->input('price');

    //converting array into json
     
        $genreData=$request->input('genre');
        $jsonGenre=json_encode($genreData);
        
        $gg->genre=$jsonGenre;
        
        $gg->details=$request->input('details');
        

        $gg->save();
   
        return redirect('/admin')
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
   
    }



//inserting product into db
    public function store2(Request $request){

        $gg=new Product();
        

        
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv,jpeg,png,jpg|max:2048',
        ]);
  
        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);
        $gg->file=$fileName;
        $gg->name=$request->input('name');
        $gg->price=$request->input('price');

    //converting array into json
     
        $typeData=$request->input('type');
        $jsonType=json_encode($typeData);
        
        $gg->type=$jsonType;
        
        $gg->details=$request->input('details');
        

        $gg->save();
   
        return redirect('/admin')
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
   
    }


//to delete game
    public function destroy($id){
        
        $item=Game::findOrFail($id);
        $item->delete();



        return redirect('/admin');
    
            }


            //to delete product
    public function destroy2($id){
        
        $item=Product::findOrFail($id);
        $item->delete();



        return redirect('/admin');
    
            }
    
        
    public function editGame($id){
        return view('editgame') ->with('data',Game::find($id));


    }
//updating the game
    public function updateGame(Request $request,$id){
        $gg=new Game();
        

        
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv,jpeg,png,jpg|max:2048',
        ]);
  
        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);
        $file=$fileName;
        $name=$request->input('name');
        $price=$request->input('price');

    //converting array into json
     
        $genreData=$request->input('genre');
        $jsonGenre=json_encode($genreData);
        
        $genre=$jsonGenre;
        
        $details=$request->input('details');
        

        Game::where('id',$id)
            ->update(
                    ['name' => $name, 
                    'price' => $price,
                    'genre' => $genre,
                    'details'=>$details,
                    'file'=>$file,
                    ]

                    
                );
   
        return redirect('/admin')
            ->with('success','You have successfully updated data.')
            ->with('file',$fileName);    

     


    }

        
    public function editProduct($id){
        return view('editproduct') ->with('data',Product::find($id));


    }
//updating the product
    public function updateProduct(Request $request,$id){
        $gg=new Product();
        

        
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv,jpeg,png,jpg|max:2048',
        ]);
  
        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('uploads'), $fileName);
        $file=$fileName;
        $name=$request->input('name');
        $price=$request->input('price');

    //converting array into json
     
        $typeData=$request->input('type');
        $jsonType=json_encode($typeData);
        
        $type=$jsonType;
        
        $details=$request->input('details');
        

        Product::where('id',$id)
            ->update(
                    ['name' => $name, 
                    'price' => $price,
                    'type' => $type,
                    'details'=>$details,
                    'file'=>$file,
                    ]

                    
                );
   
        return redirect('/admin')
            ->with('success','You have successfully updated data.')
            ->with('file',$fileName);    

     


    }
        


}
