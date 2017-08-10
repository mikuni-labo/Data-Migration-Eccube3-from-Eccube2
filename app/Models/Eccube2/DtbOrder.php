<?php

namespace App\Models\Eccube2;

use App\Models\Eccube2\AbstractEccube2Model;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

class DtbOrder extends AbstractEccube2Model
{
    protected $table = 'dtb_order';

    protected $primaryKey = 'order_id';

    protected $casts = [
        //
    ];

}
