<?php

namespace App\Models\Eccube2;

use App\Models\Eccube2\AbstractEccube2Model;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

class DtbOtherDeliv extends AbstractEccube2Model
{
    protected $table = 'dtb_other_deliv';

    protected $primaryKey = [
        'other_deliv_id',
        'customer_id',
    ];

    protected $casts = [
        //
    ];

}
