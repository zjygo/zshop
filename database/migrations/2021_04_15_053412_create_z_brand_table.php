<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_brand', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->default('')->comment('品牌商名称');
            $table->string('desc')->default('')->comment('品牌商简介');
            $table->string('pic_url')->default('')->comment('品牌商页的品牌商图片');
            $table->tinyInteger('sort_order')->nullable()->default(50);
            $table->decimal('floor_price', 10)->nullable()->default(0.00)->comment('品牌商的商品低价，仅用于页面展示');
            $table->dateTime('add_time')->nullable()->comment('创建时间');
            $table->dateTime('update_time')->nullable()->comment('更新时间');
            $table->boolean('deleted')->nullable()->default(0)->comment('逻辑删除');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('z_brand');
    }
}
