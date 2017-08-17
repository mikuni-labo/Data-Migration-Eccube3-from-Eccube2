<?php

namespace App\Http\Controllers\Migration;

use App\Http\Controllers\Controller;

// E2
use App\Models\Eccube2\DtbCustomer as E2_DtbCustomer;
use App\Models\Eccube2\DtbOtherDeliv as E2_DtbOtherDeliv;

// E3
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
        dd( E3_DtbCustomer::all()->count() );
        dd( E3_DtbCustomerAddress::all()->count() );
    }

}
