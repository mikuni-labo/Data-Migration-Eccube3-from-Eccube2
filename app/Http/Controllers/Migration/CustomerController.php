<?php

namespace App\Http\Controllers\Migration;

use App\Http\Controllers\Controller;

// E2
use App\Models\Eccube2\DtbCustomer as E2_DtbCustomer;
use App\Models\Eccube2\DtbOtherDeliv as E2_DtbOtherDeliv;

// E3
use App\Models\Eccube3\DtbCustomer as E3_DtbCustomer;
use App\Models\Eccube3\DtbCustomerAddress as E3_DtbCustomerAddress;

class CustomerController extends Controller
{
    const CHUNK_NUM = 200;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

        ini_set('max_execution_time', 3600);
        ini_set('memory_limit', '1024M');

    }

    public function index()
    {
//         dd( E2_DtbCustomer::all()->count() );
//         dd( E2_DtbOtherDeliv::all()->count() );

        $now = \Carbon\Carbon::now();

        // 会員
//         foreach (E2_DtbCustomer::all()->chunk(self::CHUNK_NUM) as $chunk) {

//             $Collection = collect([]);

//             foreach ($chunk as $E2_DtbCustomer) {
//                 $Collection->push([
//                     'customer_id'       => $E2_DtbCustomer->customer_id,

//                     'name01'            => $E2_DtbCustomer->name01,
//                     'name02'            => $E2_DtbCustomer->name02,

//                     'kana01'            => $E2_DtbCustomer->kana01,
//                     'kana02'            => $E2_DtbCustomer->kana02,

//                     'company_name'      => $E2_DtbCustomer->company_name,

//                     'zip01'             => $E2_DtbCustomer->zip01,
//                     'zip02'             => $E2_DtbCustomer->zip02,
//                     'zipcode'           => $E2_DtbCustomer->zipcode,

//                     'country_id'        => $E2_DtbCustomer->country_id,

//                     'pref'              => $E2_DtbCustomer->pref,
//                     'addr01'            => $E2_DtbCustomer->addr01,
//                     'addr02'            => $E2_DtbCustomer->addr02,

//                     'email'             => $E2_DtbCustomer->email,

//                     'tel01'             => $E2_DtbCustomer->tel01,
//                     'tel02'             => $E2_DtbCustomer->tel02,
//                     'tel03'             => $E2_DtbCustomer->tel03,

//                     'fax01'             => $E2_DtbCustomer->fax01,
//                     'fax02'             => $E2_DtbCustomer->fax02,
//                     'fax03'             => $E2_DtbCustomer->fax03,

//                     'sex'               => $E2_DtbCustomer->sex,
//                     'job'               => $E2_DtbCustomer->job,
//                     'birth'             => $E2_DtbCustomer->birth == '0000-00-00 00:00:00' ? null : $E2_DtbCustomer->birth,

//                     'password'          => $E2_DtbCustomer->password,
//                     'salt'              => $E2_DtbCustomer->salt,
//                     'secret_key'        => $E2_DtbCustomer->secret_key,

//                     'first_buy_date'    => $E2_DtbCustomer->first_buy_date == '0000-00-00 00:00:00' ? null : $E2_DtbCustomer->first_buy_date,
//                     'last_buy_date'     => $E2_DtbCustomer->last_buy_date == '0000-00-00 00:00:00' ? null : $E2_DtbCustomer->last_buy_date,
//                     'buy_times'         => $E2_DtbCustomer->buy_times,
//                     'buy_total'         => $E2_DtbCustomer->buy_total,

//                     'note'              => "メモ：{$E2_DtbCustomer->note}" . "\n" . "購入回数：{$E2_DtbCustomer->buy_times}" . "\n" . "購入総額：{$E2_DtbCustomer->buy_total}",

//                     'status'            => $E2_DtbCustomer->status,

//                     'create_date'       => $E2_DtbCustomer->create_date == '0000-00-00 00:00:00' ? $now : $E2_DtbCustomer->create_date,
//                     'update_date'       => $E2_DtbCustomer->update_date == '0000-00-00 00:00:00' ? $now : $E2_DtbCustomer->update_date,
//                     'del_flg'           => $E2_DtbCustomer->del_flg,
//                 ]);
//             }

//             // insert
//             foreach ($Collection->chunk(self::CHUNK_NUM) as $chunk) {
//                 \DB::connection('mysql_eccube3')->table('dtb_customer')->insert($chunk->toArray());
//             }
//         }

//         dd('fin.');

        // 会員の他のお届け先
        foreach (E2_DtbOtherDeliv::all()->chunk(self::CHUNK_NUM) as $chunk) {

            $Collection = collect([]);

            foreach ($chunk as $E2_DtbOtherDeliv) {
                $Collection->push([
                    'customer_address_id' => $E2_DtbOtherDeliv->other_deliv_id,
                    'customer_id'       => $E2_DtbOtherDeliv->customer_id,

                    'name01'            => $E2_DtbOtherDeliv->name01,
                    'name02'            => $E2_DtbOtherDeliv->name02,

                    'kana01'            => $E2_DtbOtherDeliv->kana01,
                    'kana02'            => $E2_DtbOtherDeliv->kana02,

                    'company_name'      => $E2_DtbOtherDeliv->company_name,

                    'zip01'             => $E2_DtbOtherDeliv->zip01,
                    'zip02'             => $E2_DtbOtherDeliv->zip02,
                    'zipcode'           => $E2_DtbOtherDeliv->zipcode,

                    'country_id'        => $E2_DtbOtherDeliv->country_id,

                    'pref'              => $E2_DtbOtherDeliv->pref,
                    'addr01'            => $E2_DtbOtherDeliv->addr01,
                    'addr02'            => $E2_DtbOtherDeliv->addr02,

                    'tel01'             => $E2_DtbOtherDeliv->tel01,
                    'tel02'             => $E2_DtbOtherDeliv->tel02,
                    'tel03'             => $E2_DtbOtherDeliv->tel03,

                    'fax01'             => $E2_DtbOtherDeliv->fax01,
                    'fax02'             => $E2_DtbOtherDeliv->fax02,
                    'fax03'             => $E2_DtbOtherDeliv->fax03,

                    'create_date'       => $now,
                    'update_date'       => $now,
                    'del_flg'           => 0,
                ]);
            }

            // insert
            foreach ($Collection->chunk(self::CHUNK_NUM) as $chunk) {
                \DB::connection('mysql_eccube3')->table('dtb_customer_address')->insert($chunk->toArray());
            }
        }

        dd('fin.');
    }

}
