<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\models\Category;
use App\Models\Catalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.products.index', [
            // untuk menampilkan produk sesuai user
            // 'products' => Product::where('user_id', auth()->user()->id)->get()

            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create', [
            'categories' => Category::all(),
            'catalogues' => Catalogue::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_produk' => 'required|max:255',
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            'catalogue_id' => 'required',
            'image' => 'image|file|max:1024',
            'deskripsi_produk' => 'required|max:1000',
            'harga_produk' => 'required|min:3|max:20'
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('product-images');
        }

        Product::create($validateData);

        return redirect('/dashboard/products')->with('success', 'Produk Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', [
            'product' => $product,
            'categories' => Category::all(),
            'catalogues' => Catalogue::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'nama_produk' => 'required|max:255',
            'category_id' => 'required',
            'catalogue_id' => 'required',
            'image' => 'image|file|max:1024',
            'deskripsi_produk' => 'required|max:1000',
            'harga_produk' => 'required|min:3|max:20'
        ];

        if($request->slug != $product->slug){
            $rules['slug'] = 'required|unique:products';
        }

        $validateData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('product-images');
        }

        Product::where('id', $product->id)
            ->update($validateData);

        return redirect('/dashboard/products')->with('success', 'Product Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->image){
            Storage::delete($product->image);
        }

        Product::destroy($product->id);

        return redirect('/dashboard/products')->with('success', 'Produk Berhasil Dihapus');
    }
}