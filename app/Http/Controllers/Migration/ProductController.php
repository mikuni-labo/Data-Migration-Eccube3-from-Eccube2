<?php

namespace App\Http\Controllers\Migration;

use App\Http\Controllers\Controller;
use App\Models\Eccube2\DtbProducts;
use App\Models\Eccube3\DtbProduct;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
//         $res = DtbProducts::all()->count();
        $res = DtbProduct::all()->count();

        dd($res);
    }

}
