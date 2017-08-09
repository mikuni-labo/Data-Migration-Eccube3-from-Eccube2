<?php

namespace App\Http\Controllers\Migration;

use App\Http\Controllers\Controller;

use App\Models\Eccube2\DtbProducts as E2_DtbProducts;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

use App\Models\Eccube3\DtbOrder as E3_DtbOrder;
use App\Models\Eccube3\DtbShipping as E3_DtbShipping;
use App\Models\Eccube3\DtbShipmentItem as E3_DtbShipmentItem;

class OrderController extends Controller
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
        dd( E3_DtbOrder::all()->count() );
        dd( E3_DtbShipping::all()->count() );
        dd( E3_DtbShipmentItem::all()->count() );
    }

}
