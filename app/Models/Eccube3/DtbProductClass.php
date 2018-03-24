<?php

namespace App\Models\Eccube3;

class DtbProductClass extends AbstractEccube3Model
{
    protected $table = 'dtb_product_class';

    protected $primaryKey = 'product_class_id';

    protected $casts = [
        'del_flg' => 'boolean',
    ];

}
