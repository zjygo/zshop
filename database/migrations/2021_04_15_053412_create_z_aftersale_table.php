<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZAftersaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_aftersale', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('aftersale_sn', 63)->nullable()->comment('售后编号');
            $table->integer('order_id')->comment('订单ID');
            $table->integer('user_id')->comment('用户ID');
            $table->smallInteger('type')->nullable()->default(0)->comment('售后类型，0是未收货退款，1是已收货（无需退货）退款，2用户退货退款');
            $table->string('reason', 31)->nullable()->default('')->comment('退款原因');
            $table->decimal('amount', 10)->nullable()->default(0.00)->comment('退款金额');
            $table->string('pictures', 1023)->nullable()->default('[]')->comment('退款凭证图片链接数组');
            $table->string('comment', 511)->nullable()->default('')->comment('退款说明');
            $table->smallInteger('status')->nullable()->default(0)->comment('售后状态，0是可申请，1是用户已申请，2是管理员审核通过，3是管理员退款成功，4是管理员审核拒绝，5是用户已取消');
            $table->dateTime('handle_time')->nullable()->comment('管理员操作时间');
            $table->dateTime('add_time')->nullable()->comment('添加时间');
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
        Schema::dropIfExists('z_aftersale');
    }
}
