<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ZAdTableSeeder::class);
        $this->call(ZAddressTableSeeder::class);
        $this->call(ZAdminTableSeeder::class);
        $this->call(ZAftersaleTableSeeder::class);
        $this->call(ZBrandTableSeeder::class);
        $this->call(ZCartTableSeeder::class);
        $this->call(ZCategoryTableSeeder::class);
        $this->call(ZCollectTableSeeder::class);
        $this->call(ZCommentTableSeeder::class);
        $this->call(ZCouponTableSeeder::class);
        $this->call(ZCouponUserTableSeeder::class);
        $this->call(ZFeedbackTableSeeder::class);
        $this->call(ZFootprintTableSeeder::class);
        $this->call(ZGoodsTableSeeder::class);
        $this->call(ZGoodsAttributeTableSeeder::class);
        $this->call(ZGoodsProductTableSeeder::class);
        $this->call(ZGoodsSpecificationTableSeeder::class);
        $this->call(ZGrouponTableSeeder::class);
        $this->call(ZGrouponRulesTableSeeder::class);
        $this->call(ZIssueTableSeeder::class);
        $this->call(ZKeywordTableSeeder::class);
        $this->call(ZLogTableSeeder::class);
        $this->call(ZNoticeTableSeeder::class);
        $this->call(ZNoticeAdminTableSeeder::class);
        $this->call(ZOrderTableSeeder::class);
        $this->call(ZOrderGoodsTableSeeder::class);
        $this->call(ZPermissionTableSeeder::class);
        $this->call(ZRegionTableSeeder::class);
        $this->call(ZRoleTableSeeder::class);
        $this->call(ZSearchHistoryTableSeeder::class);
        $this->call(ZStorageTableSeeder::class);
        $this->call(ZSystemTableSeeder::class);
        $this->call(ZTopicTableSeeder::class);
        $this->call(ZUserTableSeeder::class);
    }
}
