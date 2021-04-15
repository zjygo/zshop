<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_storage', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('key', 63)->index('key')->comment('文件的唯一索引');
            $table->string('name')->comment('文件名');
            $table->string('type', 20)->comment('文件类型');
            $table->integer('size')->comment('文件大小');
            $table->string('url')->nullable()->comment('文件访问链接');
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
        Schema::dropIfExists('z_storage');
    }
}
