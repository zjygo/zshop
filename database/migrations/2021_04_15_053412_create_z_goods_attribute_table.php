<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZGoodsAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_goods_attribute', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('goods_id')->default(0)->index('goods_id')->comment('商品表的商品ID');
            $table->string('attribute')->comment('商品参数名称');
            $table->string('value')->comment('商品参数值');
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
        Schema::dropIfExists('z_goods_attribute');
    }
}
