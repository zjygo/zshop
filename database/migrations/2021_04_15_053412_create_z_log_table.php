<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('admin', 45)->nullable()->comment('管理员');
            $table->string('ip', 45)->nullable()->comment('管理员地址');
            $table->integer('type')->nullable()->comment('操作分类');
            $table->string('action', 45)->nullable()->comment('操作动作');
            $table->boolean('status')->nullable()->comment('操作状态');
            $table->string('result', 127)->nullable()->comment('操作结果，或者成功消息，或者失败消息');
            $table->string('comment')->nullable()->comment('补充信息');
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
        Schema::dropIfExists('z_log');
    }
}
