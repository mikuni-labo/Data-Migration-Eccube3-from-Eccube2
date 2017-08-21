<?php

namespace App\Models\Eccube2;

use App\Models\Eccube2\AbstractEccube2Model;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

class DtbProducts extends AbstractEccube2Model
{
    protected $table = 'dtb_products';

    protected $primaryKey = 'product_id';

    protected $casts = [
        //
    ];

    public function productClasses()
    {
        return $this->hasMany(E2_DtbProductsClass::class, 'product_id', 'product_id');
    }

}
