<?php

namespace App\Http\Controllers\Migration;

use App\Http\Controllers\Controller;

use App\Models\Eccube2\DtbProducts as E2_DtbProducts;
use App\Models\Eccube2\DtbProductsClass as E2_DtbProductsClass;

use App\Models\Eccube3\DtbClassCategory as E3_DtbClassCategory;
use App\Models\Eccube3\DtbClassName as E3_DtbClassName;

use App\Models\Eccube3\DtbProduct as E3_DtbProduct;
use App\Models\Eccube3\DtbProductCategory as E3_DtbProductCategory;
use App\Models\Eccube3\DtbProductClass as E3_DtbProductClass;
use App\Models\Eccube3\DtbProductStock as E3_DtbProductStock;

use App\Models\Eccube3\DtbShipmentItem as E3_DtbShipmentItem;

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
        // 商品全体ループ
        foreach ( E2_DtbProducts::all() as $E2_DtbProducts ) {

            // dtb_product
//             E3_DtbProduct::create([
//                 'product_id'         => $E2_DtbProducts->product_id,
//                 'creator_id'         => 2,
//                 'status'             => 2,
//                 'name'               => $E2_DtbProducts->name,
//                 'note'               => null,
//                 'description_list'   => $E2_DtbProducts->main_list_comment,
//                 'description_detail' => $E2_DtbProducts->main_comment,
// //                 'search_word'        => $E2_DtbProducts->product_id,
// //                 'free_area'          => $E2_DtbProducts->product_id,
//                 'del_flg'            => $E2_DtbProducts->del_flg,
//                 'create_date'        => $E2_DtbProducts->create_date,
//                 'update_date'        => $E2_DtbProducts->update_date,
//             ]);

            // dtb_product_class
            foreach ( $E2_DtbProducts->productClasses()->get() as $E2_DtbProductsClass ) {
                dd($E2_DtbProductsClass);
            }
        }
    }

}
