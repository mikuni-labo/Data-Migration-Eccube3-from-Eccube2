<?php

namespace App\Models\Eccube3;

use App\Models\Eccube3\AbstractEccube3Model;

class DtbShipping extends AbstractEccube3Model
{
    protected $table = 'dtb_shipping';

    protected $primaryKey = [
        'order_id',
        'shipping_id',
    ];

    protected $casts = [
        //
    ];

}
