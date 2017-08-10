<?php

namespace App\Models\Eccube2;

use App\Models\Eccube2\AbstractEccube2Model;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

class DtbClassCategory extends AbstractEccube2Model
{
    protected $table = 'dtb_classcategory';

    protected $primaryKey = 'class_id';

    protected $casts = [
        //
    ];

}
