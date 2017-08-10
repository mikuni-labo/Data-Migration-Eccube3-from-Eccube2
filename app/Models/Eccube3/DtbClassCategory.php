<?php

namespace App\Models\Eccube3;

use App\Models\Eccube3\AbstractEccube3Model;

class DtbClassCategory extends AbstractEccube3Model
{
    protected $table = 'dtb_class_category';

    protected $primaryKey = [
        'class_category_id',
        'class_name_id',
    ];

    protected $casts = [
        //
    ];

}
