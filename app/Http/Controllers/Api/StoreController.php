<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class StoreController extends Controller
{
    //index
    public function index(Request $request)
    {
        $stores = User::where('roles', 'seller')->get();
        return response()->json([
            'status' => 'success',
            'message' => 'List Store',
            'data' => $stores,
        ]);
    }

    //product by store
    public function productByStore(Request $request, $id)
    {
        $products = Product::where('seller_id', $id)->get();
        return response()->json([
            'status' => 'success',
            'message' => 'List Product by Store',
            'data' => $products,
        ]);
    }
}
