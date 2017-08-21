<?php

namespace App\Models\Eccube3;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractEccube3Model extends Model
{
    protected $connection = 'mysql_eccube3';

    public $timestamps = false;

    protected $guarded = [
        // 移行のみが目的のため、複数代入可能にしておく
    ];
}
