<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;
class adminController extends Controller
{
	 

      public function getIndex()
    {
         $products = DB::table('products')->paginate(6);
        return view('user.admin', ['products' => $products]);
    }
    public function getProduct(){
         $products = DB::table('products')->paginate(6);
        return view('shop.index', ['products' => $products]);
    }

    public function addProducts(){
    	return view('user.addProducts');
    }
 //   
     public function store(Request $request){
    $post =$request->all();

  $validator = Validator::make($request->all(), [
            'title' => 'required',
            'price' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
         if ($validator->fails()) {
        return redirect('admin')
            ->withInput()
            ->withErrors($validator);
          }
          else{
  
            $products = new Product();

            $products->title = $post['title'];
            $products->price = $post['price'];
            $products->description = $post['description'];

            $products->save();
            //get the last ID
            $insert_id = $products->id;
          //get file name

         if($request->file('image')){
          //move file
                $img = $request->file('image');
                $img->move('uploads/image/',  $insert_id .'.jpg');
          
         $products->imagePath = $insert_id . '.jpg';               
        }else{
        $products->imagePath = 'defaultProducts.jpg';              
        }

         $products->save();
       
         \Session::flash('message','record has been added');
        return redirect('admin');
        
    }  

  }

    public function delete($id){
        $delete = DB::table('products')->where('id',$id)->delete();
        if($delete){
            echo 'Record have been delete successfuly';
            return redirect('admin');
        }

    }


    public function edit($id){
      $row = DB::table('products')->where('id',$id)->first();
     return view('user.editProducts')->with('row',$row);
    }


     public function update(Request $request){
 
  $post =$request->all();

  $validator = Validator::make($request->all(), [
            'title' => 'required',
            'price' => 'required|max:255',
            'description' => 'required|max:255'
        ]);
         if ($validator->fails()) {
        return redirect('form')
            ->withInput()
            ->withErrors($validator);
          }
          else{
          
        
              //get file name
         if($request->file('image')){
          //move file
                $img = $request->file('image');
                $img->move('uploads/image',  Input::get('id').'.jpg');
        }else{
                     
        }
        
           $data = array(
            'title' => $post['title'],
            'price' => $post['price'],
            'description' => $post['description'],
            'imagePath' => Input::get('id').'.jpg',
        );


           $i = DB::table('products')->where('id', $post['id'])->update($data);
           if($i > 0){
            \Session::flash('message','record has been updated');
            return redirect('admin');
           }
      }

    }  

  
   
}
