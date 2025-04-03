<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::paginate(10);
        return view('products.index',compact('products'));
        // return view('products.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create()
    {
        //
        return view('products.create');
    }
    public function store(Request $request)
    {
        //
        // $dataValidates = $request -> validate([
        //     'message' => ['required','min:8','max:255'],
        // ]);

          
            $data=$request->all();//Pasamos todos los datos
        if(isset($data["image"])){//Si imagen es diferente de vacio
            //Cambiar nombre al archivo a ugardar
            //Variable de imagen  se le asiagna un nuevo nombre(el nombre del archivo.tiempo/fecha/hora. tipo(jpeg,jpg,png))
            $data["image"]=$filename=time().".".$data["image"]->extension();
            //Guardar imagen en la carpeta publica
            $request->image->move(public_path("image/products"),$filename);
        }
        Product::create($data);
            // $request->user()->products()->create($dataValidates);

            return to_route('products.index') -> with('status',__('Product created successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // if(auth()->user()->id != $post->user_id){
        //     abort(403);
        // }

    // $this->authorize('update',$product);

        // return view('posts.edit',compact('post'));
        return view('products/edit',['product' => $product]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
    //     if(auth()->user()->id != $post->user_id){
    //         abort(403);
    //     }
        //
        // $this->authorize('update',$product);
        // $dataValidates = $request -> validate([
        //     'message' => ['required','min:8','max:255'],
        // ]);

        // $post->update($dataValidates);
        // return to_route('posts.index') -> with('status',__('Post updated successfully!'));
        $data=$request->all();//Pasamos todos los datos
        if(isset($data["image"])){//Si imagen es diferente de vacio
            //Cambiar nombre al archivo a ugardar
            //Variable de imagen  se le asiagna un nuevo nombre(el nombre del archivo.tiempo/fecha/hora. tipo(jpeg,jpg,png))
            $data["image"]=$filename=time().".".$data["image"]->extension();
            //Guardar imagen en la carpeta publica
            $request->image->move(public_path("image/producs"),$filename);
        }
        $product->update($data); //Actualizamos los datos en la base de datos
        return to_route('products.index')->with ('status','Producto Actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Product $product){
        echo view('products.delete',compact('product'));
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return to_route('products.index')->with('status','Producto Eliminado');
        //
        // $this->authorize('delete',$post);
        // $post->delete();
        // return to_route('posts.index') -> with('status',__('Post deleted successfully!'));
    }
}
