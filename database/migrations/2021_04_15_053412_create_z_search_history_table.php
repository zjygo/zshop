<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZSearchHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_search_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->comment('用户表的用户ID');
            $table->string('keyword', 63)->comment('搜索关键字');
            $table->string('from', 63)->default('')->comment('搜索来源，如pc、wx、app');
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
        Schema::dropIfExists('z_search_history');
    }
}
