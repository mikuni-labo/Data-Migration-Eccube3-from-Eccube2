<?php

namespace App\Models\Eccube3;

use App\Models\Eccube3\AbstractEccube3Model;

class DtbCustomerAddress extends AbstractEccube3Model
{
    protected $table = 'dtb_customer_address';

    protected $primaryKey = [
        'customer_id',
        'customer_address_id',
    ];

    protected $casts = [
        //
    ];

}
