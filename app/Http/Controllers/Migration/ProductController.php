<?php

namespace App\Http\Controllers\Migration;

use App\Http\Controllers\Controller;

use App\Models\Eccube2\DtbProducts as E2_DtbProducts;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

use App\Models\Eccube3\DtbProduct as E3_DtbProduct;
use App\Models\Eccube3\DtbProductCategory as E3_DtbProductCategory;
use App\Models\Eccube3\DtbProductClass as E3_DtbProductClass;
use App\Models\Eccube3\DtbProductStock as E3_DtbProductStock;

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
//         $res = E2_DtbProducts::all()->count();
//         $res = E2_DtbProductsClass::all()->count();

//         $res = E3_DtbProduct::all()->count();
//         $res = E3_DtbProductCategory::all()->count();
//         $res = E3_DtbProductClass::all()->count();
//         $res = E3_DtbProductStock::all()->count();


        dd($res);
    }

}
