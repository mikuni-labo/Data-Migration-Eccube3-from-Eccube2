<?php

namespace App\Models\Eccube3;

class DtbCustomerAddress extends AbstractEccube3Model
{
    protected $table = 'dtb_customer_address';

    protected $primaryKey = 'customer_address_id';

    protected $casts = [
        //
    ];

    protected $fillable = [
        'name01',
        'name02',
        'kana01',
        'kana02',
        'company_name',
        'zip01',
        'zip02',
        'zipcode',
        'country_id',
        'pref',
        'addr01',
        'addr02',
        'tel01',
        'tel02',
        'tel03',
        'fax01',
        'fax02',
        'fax03',
        'del_flg',
    ];

}
