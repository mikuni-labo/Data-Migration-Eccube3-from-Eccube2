<?php

namespace App\Models\Eccube2;

use App\Models\Eccube2\AbstractEccube2Model;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

class DtbShipping extends AbstractEccube2Model
{
    protected $table = 'dtb_shipping';

    protected $primaryKey = [
//         'shipping_id',
//         'order_id',
    ];

    protected $casts = [
        //
    ];

}
