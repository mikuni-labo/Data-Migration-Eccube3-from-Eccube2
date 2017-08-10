<?php

namespace App\Models\Eccube2;

use App\Models\Eccube2\AbstractEccube2Model;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

class DtbOrderDetail extends AbstractEccube2Model
{
    protected $table = 'dtb_order_detail';

    protected $primaryKey = [
//         'order_detail_id',
//         'order_id',
//         'product_class_id',
    ];

    protected $casts = [
        //
    ];

}
