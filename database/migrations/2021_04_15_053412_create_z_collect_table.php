<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZCollectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_collect', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->default(0)->index('user_id')->comment('用户表的用户ID');
            $table->integer('value_id')->default(0)->index('goods_id')->comment('如果type=0，则是商品ID；如果type=1，则是专题ID');
            $table->tinyInteger('type')->default(0)->comment('收藏类型，如果type=0，则是商品ID；如果type=1，则是专题ID');
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
        Schema::dropIfExists('z_collect');
    }
}
