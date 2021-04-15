<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_category', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 63)->default('')->comment('类目名称');
            $table->string('keywords', 1023)->default('')->comment('类目关键字，以JSON数组格式');
            $table->string('desc')->nullable()->default('')->comment('类目广告语介绍');
            $table->integer('pid')->default(0)->index('parent_id')->comment('父类目ID');
            $table->string('icon_url')->nullable()->default('')->comment('类目图标');
            $table->string('pic_url')->nullable()->default('')->comment('类目图片');
            $table->string('level')->nullable()->default('L1');
            $table->tinyInteger('sort_order')->nullable()->default(50)->comment('排序');
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
        Schema::dropIfExists('z_category');
    }
}
