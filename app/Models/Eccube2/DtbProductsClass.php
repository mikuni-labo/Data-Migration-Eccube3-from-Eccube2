<?php

namespace App\Models\Eccube2;

use App\Models\Eccube2\DtbProducts as E2_DtbProducts;

class DtbProductsClass extends AbstractEccube2Model
{
    protected $table = 'dtb_products_class';

    protected $primaryKey = 'product_class_id';

    protected $casts = [
        //
    ];

    public function product()
    {
        return $this->belongsTo(E2_DtbProducts::class, 'product_id', 'product_id');
    }

}
