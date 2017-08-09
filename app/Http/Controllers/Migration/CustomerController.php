<?php

namespace App\Http\Controllers\Migration;

use App\Http\Controllers\Controller;

use App\Models\Eccube2\DtbProducts as E2_DtbProducts;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

use App\Models\Eccube3\DtbCustomer as E3_DtbCustomer;
use App\Models\Eccube3\DtbCustomerAddress as E3_DtbCustomerAddress;

class CustomerController extends Controller
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
//         dd( E3_DtbCustomer::all()->count() );
        dd( E3_DtbCustomerAddress::all()->count() );
    }

}
