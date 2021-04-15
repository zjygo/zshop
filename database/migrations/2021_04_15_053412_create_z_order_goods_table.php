<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZOrderGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_order_goods', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('order_id')->default(0)->index('order_id')->comment('订单表的订单ID');
            $table->integer('goods_id')->default(0)->index('goods_id')->comment('商品表的商品ID');
            $table->string('goods_name', 127)->default('')->comment('商品名称');
            $table->string('goods_sn', 63)->default('')->comment('商品编号');
            $table->integer('product_id')->default(0)->comment('商品货品表的货品ID');
            $table->smallInteger('number')->default(0)->comment('商品货品的购买数量');
            $table->decimal('price', 10)->default(0.00)->comment('商品货品的售价');
            $table->string('specifications', 1023)->comment('商品货品的规格列表');
            $table->string('pic_url')->default('')->comment('商品货品图片或者商品图片');
            $table->integer('comment')->nullable()->default(0)->comment('订单商品评论，如果是-1，则超期不能评价；如果是0，则可以评价；如果其他值，则是comment表里面的评论ID。');
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
        Schema::dropIfExists('z_order_goods');
    }
}
