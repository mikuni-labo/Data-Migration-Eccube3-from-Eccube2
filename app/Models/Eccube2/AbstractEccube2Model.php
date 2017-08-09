<?php

namespace App\Models\Eccube2;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractEccube2Model extends Model
{
    /**
     * モデルで使用するコネクション名
     *
     * @var string
     */
    protected $connection = 'mysql_eccube2';

    /**
     * モデルのタイムスタンプを更新するかの指示
     *
     * @var bool
     */
    public $timestamps = false;
}
