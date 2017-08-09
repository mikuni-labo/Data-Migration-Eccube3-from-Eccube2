<?php

namespace App\Models\Eccube3;

use App\Models\Eccube3\AbstractEccube3Model;

class DtbProduct extends AbstractEccube3Model
{
    protected $table = 'dtb_product';

    protected $primaryKey = 'product_id';

    protected $casts = [
        'product_id'             => 'integer',
        'maker_id'               => 'integer',
        'status'                 => 'integer',
        'del_flg'                => 'integer',
        'creator_id'             => 'integer',
        'deliv_date_id'          => 'integer',
        'plg_freeshipping_flg'   => 'integer',
        'plg_productoptions_flg' => 'integer',
        'sale_flg'               => 'integer',
    ];

    public function productStatuses()
    {
//         $productStatuses = $this->hasMany(
//             EloquentProductStatus::class,
//             'product_id',
//             'product_id'
//         )
//         ->where('del_flg', 0);

//         return $productStatuses;
    }

    public function productClasses()
    {
//         $productClasses = $this->hasMany(
//             EloquentProductClass::class,
//             'product_id',
//             'product_id'
//         )
//         ->where('del_flg', 0);

//         return $productClasses;
    }

    public function toDomain()
    {
//         $product = new Product();

//         $product
//             ->setProductId($this->product_id)
//             ->setName($this->name)
//             ->setMakerId($this->maker_id)
//             ->setStatus($this->status)
//             ->setComment1($this->comment1)
//             ->setComment2($this->comment2)
//             ->setComment3($this->comment3)
//             ->setComment4($this->comment4)
//             ->setComment5($this->comment5)
//             ->setComment6($this->comment6)
//             ->setNote($this->note)
//             ->setMainListComment($this->main_list_comment)
//             ->setMainListImage($this->main_list_image)
//             ->setMainComment($this->main_comment)
//             ->setMainImage($this->main_image)
//             ->setMainImageLarge($this->main_large_image)
//             ->setSubTitle1($this->sub_title1)
//             ->setSubComment1($this->sub_comment1)
//             ->setSubImage1($this->sub_image1)
//             ->setSubLargeImage1($this->sub_large_image1)
//             ->setSubTitle2($this->sub_title2)
//             ->setSubComment2($this->sub_comment2)
//             ->setSubImage2($this->sub_image2)
//             ->setSubLargeImage2($this->sub_large_image2)
//             ->setSubTitle3($this->sub_title3)
//             ->setSubComment3($this->sub_comment3)
//             ->setSubImage3($this->sub_image3)
//             ->setSubLargeImage3($this->sub_large_image3)
//             ->setSubTitle4($this->sub_title4)
//             ->setSubComment4($this->sub_comment4)
//             ->setSubImage4($this->sub_image4)
//             ->setSubLargeImage4($this->sub_large_image4)
//             ->setSubTitle5($this->sub_title5)
//             ->setSubComment5($this->sub_comment5)
//             ->setSubImage5($this->sub_image5)
//             ->setSubLargeImage5($this->sub_large_image5)
//             ->setSubTitle6($this->sub_title6)
//             ->setSubComment6($this->sub_comment6)
//             ->setSubImage6($this->sub_image6)
//             ->setSubLargeImage6($this->sub_large_image6)
//             ->setDelFlg($this->del_flg)
//             ->setCreatorId($this->creator_id)
//             ->setCreateDate(new \Carbon\Carbon($this->create_date))
//             ->setUpdateDate(new \Carbon\Carbon($this->update_date))
//             ->setDelivDateId($this->deliv_date_id)
//             ->setPlgFreeshippingFlg($this->plg_freeshipping_flg)
//             ->setPlgProductoptionsFlg($this->plg_productoptions_flg)
//             ->setSaleFlg($this->sale_flg);

//         return $product;
    }

}
