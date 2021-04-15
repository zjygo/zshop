<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZGrouponRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_groupon_rules', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('goods_id')->index('goods_id')->comment('商品表的商品ID');
            $table->string('goods_name', 127)->comment('商品名称');
            $table->string('pic_url')->nullable()->comment('商品图片或者商品货品图片');
            $table->decimal('discount', 63, 0)->comment('优惠金额');
            $table->integer('discount_member')->comment('达到优惠条件的人数');
            $table->dateTime('expire_time')->nullable()->comment('团购过期时间');
            $table->smallInteger('status')->nullable()->default(0)->comment('团购规则状态，正常上线则0，到期自动下线则1，管理手动下线则2');
            $table->dateTime('add_time')->comment('创建时间');
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
        Schema::dropIfExists('z_groupon_rules');
    }
}
