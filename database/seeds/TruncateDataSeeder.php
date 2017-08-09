<?php

use App\Models\Eccube3\DtbClassCategory as E3_DtbClassCategory;
use App\Models\Eccube3\DtbClassName as E3_DtbClassName;

use App\Models\Eccube3\DtbProduct as E3_DtbProduct;
use App\Models\Eccube3\DtbProductCategory as E3_DtbProductCategory;
use App\Models\Eccube3\DtbProductClass as E3_DtbProductClass;
use App\Models\Eccube3\DtbProductStock as E3_DtbProductStock;

use App\Models\Eccube3\DtbShipmentItem as E3_DtbShipmentItem;

use Illuminate\Database\Seeder;

class TruncateDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Schema = Schema::connection('mysql_eccube3');
        $Schema->disableForeignKeyConstraints();

        E3_DtbProductStock::truncate();
        E3_DtbProductCategory::truncate();
        E3_DtbShipmentItem::truncate();

        E3_DtbProductClass::truncate();
        E3_DtbProduct::truncate();

        E3_DtbClassCategory::truncate();
        E3_DtbClassName::truncate();

        $Schema->enableForeignKeyConstraints();
    }

}
