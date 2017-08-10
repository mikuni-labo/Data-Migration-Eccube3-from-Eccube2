<?php

namespace App\Models\Eccube3;

use App\Models\Eccube3\AbstractEccube3Model;

class DtbShipmentItem extends AbstractEccube3Model
{
    protected $table = 'dtb_shipment_item';

    protected $primaryKey = [
        'order_id',
        'shipping_id',
        'item_id',
    ];

    protected $casts = [
        //
    ];

}
