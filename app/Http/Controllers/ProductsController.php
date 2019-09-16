<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('created_at','asc')->paginate(10);
        return view('products.index')->with('products', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'title' => 'required',
            'price' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Product
        $product = new Product;
        $product->category = $request->input('category');
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->body = $request->input('body');
        $product->user_id = auth()->user()->id;
        $product->cover_image = $fileNameToStore;
        $product->save();

        return redirect('/products')->with('success', 'New Product Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('products', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        
        //Check if product exists before deleting
        if (!isset($product)){
            return redirect('/products')->with('error', 'No Post Found');
        }

        // Check for correct user
        if(auth()->user()->id !==$product->user_id){
            return redirect('/products')->with('error', 'Unauthorized Page');
        }

        return view('products.edit')->with('products', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category' => 'required',
            'title' => 'required',
            'price' => 'required',
            'body' => 'required'
        ]);

         // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        // Create Post
        $product = Product::find($id);
        $product->category = $request->input('category');
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $product->cover_image = $fileNameToStore;
        }
        $product->save();

        return redirect('/products')->with('success', 'Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        
        //Check if post exists before deleting
        if (!isset($product)){
            return redirect('/products')->with('error', 'No Post Found');
        }

        // Check for correct user
        if(auth()->user()->id !==$product->user_id){
            return redirect('/products')->with('error', 'Unauthorized Page');
        }

        if($product->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$product->cover_image);
        }
        
        $product->delete();
        return redirect('/products')->with('success', 'Post Removed');
    }
}
