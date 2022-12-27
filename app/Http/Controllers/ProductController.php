<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Catalogue;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            'title' => 'All Products',
            'products' => Product::latest()->filter()->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Product $product)
    {
        return view('product', [
            "title" => "Product",
            "product" => $product
        ]);
    }

    public function kategori(Category $category)
    {
        return view('category', [
            'title' => $category->nama_kategori,
            'products' => $category->products,
            'catalogues' => Catalogue::all(),
            'category' => $category->nama_kategori
        ]);
    }

    public function katalog(Catalogue $catalogue)
    {
        return view('catalogue', [
           'title' => $catalogue->nama_katalog,
           'catalogues' => Catalogue::all(),
           'products' => $catalogue->products
        ]);
    }

}
