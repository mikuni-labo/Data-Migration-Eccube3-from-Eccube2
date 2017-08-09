<?php

namespace App\Models\Eccube3;

use App\Models\Eccube3\AbstractEccube3Model;

class DtbOrder extends AbstractEccube3Model
{
    protected $table = 'dtb_order';

    protected $primaryKey = 'order_id';

    protected $casts = [
        //
    ];

}
