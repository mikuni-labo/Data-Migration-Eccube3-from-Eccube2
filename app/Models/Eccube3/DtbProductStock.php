<?php

namespace App\Models\Eccube3;

use App\Models\Eccube3\AbstractEccube3Model;

class DtbProductStock extends AbstractEccube3Model
{
    protected $table = 'dtb_product_stock';

    protected $primaryKey = 'product_class_id';

    protected $casts = [
        'product_id'             => 'integer',
        'maker_id'               => 'integer',
        'status'                 => 'integer',
        'del_flg'                => 'integer',
        'creator_id'             => 'integer',
        'deliv_date_id'          => 'integer',
        'plg_freeshipping_flg'   => 'integer',
        'plg_productoptions_flg' => 'integer',
        'sale_flg'               => 'integer',
    ];

}
