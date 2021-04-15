<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZKeywordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_keyword', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('keyword', 127)->default('')->comment('关键字');
            $table->string('url')->default('')->comment('关键字的跳转链接');
            $table->boolean('is_hot')->default(0)->comment('是否是热门关键字');
            $table->boolean('is_default')->default(0)->comment('是否是默认关键字');
            $table->integer('sort_order')->default(100)->comment('排序');
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
        Schema::dropIfExists('z_keyword');
    }
}
