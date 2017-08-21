<?php

namespace App\Models\Eccube3;

use App\Models\Eccube3\AbstractEccube3Model;

class DtbProductStock extends AbstractEccube3Model
{
    protected $table = 'dtb_product_stock';

    protected $primaryKey = 'product_stock_id';

    protected $casts = [
        //
    ];

}
