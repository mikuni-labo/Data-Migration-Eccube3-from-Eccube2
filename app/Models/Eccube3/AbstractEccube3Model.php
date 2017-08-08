<?php

namespace App\Models\Eccube3;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractEccube3Model extends Model
{
    /**
     * モデルで使用するコネクション名
     *
     * @var string
     */
    protected $connection = 'mysql_eccube3';

    /**
     * モデルのタイムスタンプを更新するかの指示
     *
     * @var bool
     */
    public $timestamps = false;
}
