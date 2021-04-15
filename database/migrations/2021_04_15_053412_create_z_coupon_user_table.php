<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZCouponUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_coupon_user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->comment('用户ID');
            $table->integer('coupon_id')->comment('优惠券ID');
            $table->smallInteger('status')->nullable()->default(0)->comment('使用状态, 如果是0则未使用；如果是1则已使用；如果是2则已过期；如果是3则已经下架；');
            $table->dateTime('used_time')->nullable()->comment('使用时间');
            $table->dateTime('start_time')->nullable()->comment('有效期开始时间');
            $table->dateTime('end_time')->nullable()->comment('有效期截至时间');
            $table->integer('order_id')->nullable()->comment('订单ID');
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
        Schema::dropIfExists('z_coupon_user');
    }
}
