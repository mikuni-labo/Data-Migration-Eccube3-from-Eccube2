<?php

namespace App\Models\Eccube3;

use App\Models\Eccube3\AbstractEccube3Model;
use App\Models\Eccube3\DtbProductClass as E3_DtbProductClass;

class DtbProduct extends AbstractEccube3Model
{
    protected $table = 'dtb_product';

    protected $primaryKey = 'product_id';

    protected $casts = [
        'del_flg' => 'boolean',
    ];

    public function productClasses()
    {
        return $this->hasMany(E3_DtbProductClass::class, 'product_id', 'product_id');
    }

}
