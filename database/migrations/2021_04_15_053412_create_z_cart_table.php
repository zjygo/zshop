<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_cart', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->nullable()->comment('用户表的用户ID');
            $table->integer('goods_id')->nullable()->comment('商品表的商品ID');
            $table->string('goods_sn', 63)->nullable()->comment('商品编号');
            $table->string('goods_name', 127)->nullable()->comment('商品名称');
            $table->integer('product_id')->nullable()->comment('商品货品表的货品ID');
            $table->decimal('price', 10)->nullable()->default(0.00)->comment('商品货品的价格');
            $table->smallInteger('number')->nullable()->default(0)->comment('商品货品的数量');
            $table->string('specifications', 1023)->nullable()->comment('商品规格值列表，采用JSON数组格式');
            $table->boolean('checked')->nullable()->default(1)->comment('购物车中商品是否选择状态');
            $table->string('pic_url')->nullable()->comment('商品图片或者商品货品图片');
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
        Schema::dropIfExists('z_cart');
    }
}
