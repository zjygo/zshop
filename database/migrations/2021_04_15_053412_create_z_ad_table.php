<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZAdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_ad', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 63)->default('')->comment('广告标题');
            $table->string('link')->default('')->comment('所广告的商品页面或者活动页面链接地址');
            $table->string('url')->comment('广告宣传图片');
            $table->tinyInteger('position')->nullable()->default(1)->comment('广告位置：1则是首页');
            $table->string('content')->nullable()->default('')->comment('活动内容');
            $table->dateTime('start_time')->nullable()->comment('广告开始时间');
            $table->dateTime('end_time')->nullable()->comment('广告结束时间');
            $table->boolean('enabled')->nullable()->default(0)->index('enabled')->comment('是否启动');
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
        Schema::dropIfExists('z_ad');
    }
}
