<?php

namespace App\Models\Eccube2;

use App\Models\Eccube2\AbstractEccube2Model;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

class DtbShipmentItem extends AbstractEccube2Model
{
    protected $table = 'dtb_shipment_item';

    protected $primaryKey = [
//         'shipping_id',
//         'order_id',
//         'product_class_id',
    ];

    protected $casts = [
        //
    ];

}
