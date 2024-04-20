<?php

namespace App\Http\Controllers;

use App\Models\product;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = product::all();
        return view('Product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationdata = $request->validate(
            [
                'name' => 'required',
                'price' => 'required|max:10',
                'category' => 'required|array',
                'delivery' => 'required'
            ]
        );

        $product = new product();
        $product->name = $validationdata['name'];
        $product->price = $validationdata['price'];
        $product->category = implode(',', $validationdata['category']);
        $product->delivery = $validationdata['delivery'];
        $product->save();

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = product::find($id);
        return view('Product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validationdata = $request->validate(
            [
                'name' => 'required',
                'price' => 'required|max:10',
                'category' => 'required|array',
                'delivery' => 'required'
            ]
        );
        product::where('id',$id)->update(


            [
                'name' => $validationdata['name'],
                'price' => $validationdata['price'],
                'category' =>implode(',', $validationdata['category']),
                'delivery' => $validationdata['delivery']
            ]

        );
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::destroy($id);
        return redirect()->route('product.index');
    }
}
