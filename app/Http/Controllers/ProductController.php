<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $init_time = microtime(true);
        $search = $request->input('s', '*');
        $result = Product::search($search)->get();

        $end_time = microtime(true);
        $diff_time = $end_time - $init_time;

        return view('product.index', [
            'result' => $result,
            'search' => $search,
            'diff' => $diff_time
        ]);
    }
}
