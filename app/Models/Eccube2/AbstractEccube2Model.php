<?php

namespace App\Models\Eccube2;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractEccube2Model extends Model
{
    protected $connection = 'mysql_eccube2';

    public $timestamps = false;

    protected $guarded = [
        // 移行のみが目的のため、複数代入可能にしておく
    ];
}
