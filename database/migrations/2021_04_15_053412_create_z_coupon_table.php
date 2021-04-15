<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_coupon', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 63)->comment('优惠券名称');
            $table->string('desc', 127)->nullable()->default('')->comment('优惠券介绍，通常是显示优惠券使用限制文字');
            $table->string('tag', 63)->nullable()->default('')->comment('优惠券标签，例如新人专用');
            $table->integer('total')->default(0)->comment('优惠券数量，如果是0，则是无限量');
            $table->decimal('discount', 10)->nullable()->default(0.00)->comment('优惠金额，');
            $table->decimal('min', 10)->nullable()->default(0.00)->comment('最少消费金额才能使用优惠券。');
            $table->smallInteger('limit')->nullable()->default(1)->comment('用户领券限制数量，如果是0，则是不限制；默认是1，限领一张.');
            $table->smallInteger('type')->nullable()->default(0)->comment('优惠券赠送类型，如果是0则通用券，用户领取；如果是1，则是注册赠券；如果是2，则是优惠券码兑换；');
            $table->smallInteger('status')->nullable()->default(0)->comment('优惠券状态，如果是0则是正常可用；如果是1则是过期; 如果是2则是下架。');
            $table->smallInteger('goods_type')->nullable()->default(0)->comment('商品限制类型，如果0则全商品，如果是1则是类目限制，如果是2则是商品限制。');
            $table->string('goods_value', 1023)->nullable()->default('[]')->comment('商品限制值，goods_type如果是0则空集合，如果是1则是类目集合，如果是2则是商品集合。');
            $table->string('code', 63)->nullable()->index('code')->comment('优惠券兑换码');
            $table->smallInteger('time_type')->nullable()->default(0)->comment('有效时间限制，如果是0，则基于领取时间的有效天数days；如果是1，则start_time和end_time是优惠券有效期；');
            $table->smallInteger('days')->nullable()->default(0)->comment('基于领取时间的有效天数days。');
            $table->dateTime('start_time')->nullable()->comment('使用券开始时间');
            $table->dateTime('end_time')->nullable()->comment('使用券截至时间');
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
        Schema::dropIfExists('z_coupon');
    }
}
