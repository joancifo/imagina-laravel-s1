<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()
            ->where('active', true)
            ->withoutGlobalScope('is_active')
//            ->whereRaw('EXISTS (SELECT 1 FROM ....)')
            ->get();


        return view('products.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
//            'code' => 'required|unique:products,code',
            'code' => ['required','unique:products,code', new Uppercase],
            'price' => 'required|decimal:2',
            'description' => 'string'
        ]);

        $data['category_id'] = Category::first()->id;

        Product::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
