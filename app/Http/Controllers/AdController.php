<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Product;
use App\Image;

class AdController extends Controller
{
    

   public function newad(){

   	// $products=Product::join('category','category.id','=','products.cat_id')->select(['products.*','category.name as category_name'])->get();

   	$cats = Category::all();
   	return view('front.newad', compact('cats'));
   }

   public function newadins(Request $request){
 //	dd($request->all());

   	// $this->validate($request, [
   			
    //         'name' => 'required',
    //         'cat_id' => 'required',
    //         'text' => 'required',
    //         'user' => 'required',
    //         'email' => 'required|email|unique:products,email',
    //         'phone' => 'required',
    //         'file' => 'required',
            
            
    //         ],
    //         [
            
    //         'name' => 'الإسم بالكامل مطلوب',
    //         'cat_id' => 'إسم القسم مطلوب',
    //         'text' => 'الوصف مطلوب',
    //         'user' => 'إسم المستخدم مطلوب',
    //         'email.required' => 'الإيميل مطلوب',
    //         'phone' => 'الهاتف مطلوب',
    //         'file.required' => 'الصورة مطلوبة'
            
    //         ]);
   		// 
		   	$product = new Product;
		   	$images = new Image;

		
		$product=Product::create($request->except('otherImages'));

		//$images->file = $request->file;
		

    	// $product->fill($request->all());

    	if($request->hasFile('otherImages')){
        	$images=$request->otherImages;
        	foreach($images as $key=>$img){
        	$path = public_path();
            $destinationPath = $path.'/uploads/products/album'; // upload path
            $img= $request->file('otherImages')[$key];
            $extension = $img->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $img->move($destinationPath, $name); // uploading file to given path
            $otherImage = 'uploads/products/album/'.$name ;
   $saveImage=Image::create(['name'=>$product->name,'file'=>$otherImage,'product_id'=>$product->id]);
        	}

        if($request->hasFile('file')){
            $destinationPath = public_path().'/uploads/products'; // upload path
            $image= $request->file('file');
            $extension = $image->getClientOriginalExtension(); // getting image extension
            $name = time().''.rand(11111,99999).'.'.$extension; // renameing image
            $image->move($destinationPath, $name); // uploading file to given path

            $product->file  = 'uploads/products/'.$name ;
            }
        
            
           // $product->file  = 'uploads/products/'.$name ;
            $addCover=Product::find($product->id)->fill(['file'=>$image]);

            }
         

		

		 if($product->save())
        {   
        
            return redirect('/product/'.$product->id);
        }else{
            
            return ('error');
        }
   }



   public function proddisplay($id){

   	$prods = Product::with('image')->find($id);
   	
   //	$images = Image::where('product_id','=',$id);
   	return view('front.product', compact('prods'));
   }



}
