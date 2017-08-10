<?php

namespace App\Models\Eccube2;

use App\Models\Eccube2\AbstractEccube2Model;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

class DtbCustomer extends AbstractEccube2Model
{
    protected $table = 'dtb_customer';

    protected $primaryKey = 'customer_id';

    protected $casts = [
        //
    ];

}
