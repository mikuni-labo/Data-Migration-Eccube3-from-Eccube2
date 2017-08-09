<?php

namespace App\Models\Eccube3;

use App\Models\Eccube3\AbstractEccube3Model;

class DtbCustomer extends AbstractEccube3Model
{
    protected $table = 'dtb_customer';

    protected $primaryKey = 'customer_id';

    protected $casts = [
        //
    ];

}
