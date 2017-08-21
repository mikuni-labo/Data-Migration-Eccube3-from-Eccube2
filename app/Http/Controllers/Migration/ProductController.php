<?php

namespace App\Http\Controllers\Migration;

use App\Http\Controllers\Controller;

// E2
use App\Models\Eccube2\DtbClass as E2_DtbClass;
use App\Models\Eccube2\DtbClassCategory as E2_DtbClassCategory;

use App\Models\Eccube2\DtbProducts as E2_DtbProducts;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

// E3
use App\Models\Eccube3\DtbClassCategory as E3_DtbClassCategory;
use App\Models\Eccube3\DtbClassName as E3_DtbClassName;

use App\Models\Eccube3\DtbProduct as E3_DtbProduct;
use App\Models\Eccube3\DtbProductCategory as E3_DtbProductCategory;
use App\Models\Eccube3\DtbProductClass as E3_DtbProductClass;
use App\Models\Eccube3\DtbProductStock as E3_DtbProductStock;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        // 規格大分類
//         foreach ( E2_DtbClass::all() as $E2_DtbClass ) {
//             E3_DtbClassName::create([
//                 'class_name_id' => $E2_DtbClass->class_id,
//                 'name'          => $E2_DtbClass->name,
//                 'rank'          => $E2_DtbClass->rank,
//                 'creator_id'    => $E2_DtbClass->creator_id,
//                 'create_date'   => $E2_DtbClass->create_date,
//                 'update_date'   => $E2_DtbClass->update_date,
//                 'del_flg'       => $E2_DtbClass->del_flg,
//             ]);
//         }

        // 規格小分類
//         foreach ( E2_DtbClassCategory::all() as $E2_DtbClassCategory ) {
//             E3_DtbClassCategory::create([
//                 'class_category_id' => $E2_DtbClassCategory->classcategory_id,
//                 'name'              => $E2_DtbClassCategory->name,
//                 'class_name_id'     => $E2_DtbClassCategory->class_id,
//                 'rank'              => $E2_DtbClassCategory->rank,
//                 'creator_id'        => 2,
//                 'create_date'       => $E2_DtbClassCategory->create_date,
//                 'update_date'       => $E2_DtbClassCategory->update_date,
//                 'del_flg'           => $E2_DtbClassCategory->del_flg,
//             ]);
//         }

        dd('here');

        // 商品
        foreach ( E2_DtbProducts::all() as $E2_DtbProducts ) {

            E3_DtbProduct::create([
                'product_id'         => $E2_DtbProducts->product_id,
                'name'               => $E2_DtbProducts->name,
                'status'             => $E2_DtbProducts->status,
                'note'               => null,
                'description_list'   => null,
                'description_detail' => null,
                'del_flg'            => $E2_DtbProducts->del_flg,
                'creator_id'         => $E2_DtbProducts->creator_id,
                'create_date'        => $E2_DtbProducts->create_date,
                'update_date'        => $E2_DtbProducts->update_date,
                'search_word'        => null,
                'free_area'          => null,
            ]);

            // $E2_DtbProducts->deliv_date_id を 規格のdelivery_date_idへ

            // 商品規格
            foreach ( $E2_DtbProducts->productClasses()->get() as $E2_DtbProductsClass ) {
                E3_DtbProductClass::create([
                    'product_class_id' => $E2_DtbProductsClass->product_class_id,
                    'product_id'       => $E2_DtbProductsClass->product_id,
                ]);
            }
        }
    }

}
