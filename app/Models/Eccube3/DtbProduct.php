<?php

namespace App\Models\Eccube3;

use App\Models\Eccube3\AbstractEccube3Model;

class DtbProduct extends AbstractEccube3Model
{
    protected $table = 'dtb_product';

    protected $primaryKey = 'product_id';

    protected $casts = [
        //
    ];

}
