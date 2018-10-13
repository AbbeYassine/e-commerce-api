<?php
/**
 * Created by IntelliJ IDEA.
 * User: ABBES
 * Date: 13/10/2018
 * Time: 15:07
 */

namespace App\Repositories;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository
{

    public function addProduct(Request $request)
    {
        $product = new Product();

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->save();

        return $product;
    }
}
