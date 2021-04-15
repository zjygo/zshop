<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZGrouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_groupon', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('order_id')->comment('关联的订单ID');
            $table->integer('groupon_id')->nullable()->default(0)->comment('如果是开团用户，则groupon_id是0；如果是参团用户，则groupon_id是团购活动ID');
            $table->integer('rules_id')->comment('团购规则ID，关联litemall_groupon_rules表ID字段');
            $table->integer('user_id')->comment('用户ID');
            $table->string('share_url')->nullable()->comment('团购分享图片地址');
            $table->integer('creator_user_id')->comment('开团用户ID');
            $table->dateTime('creator_user_time')->nullable()->comment('开团时间');
            $table->smallInteger('status')->nullable()->default(0)->comment('团购活动状态，开团未支付则0，开团中则1，开团失败则2');
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
        Schema::dropIfExists('z_groupon');
    }
}
