<?php

namespace App\Http\Controllers\Migration;

use App\Http\Controllers\Controller;

// E2
use App\Models\Eccube2\DtbOrder as E2_DtbOrder;
use App\Models\Eccube2\DtbOrderDetail as E2_DtbOrderDetail;

use App\Models\Eccube2\DtbShipmentItem as E2_DtbShipmentItem;
use App\Models\Eccube2\DtbShipping as E2_DtbShipping;

// E3
use App\Models\Eccube3\DtbOrder as E3_DtbOrder;
use App\Models\Eccube3\DtbOrderDetail as E3_DtbOrderDetail;

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
        dd( E2_DtbShipmentItem::where('order_id', '<', 100000)->count() );// 件数多い場合
        dd( E2_DtbOrder::where('order_id', '<', 100000)->count() );// 件数多い場合
    }

}
