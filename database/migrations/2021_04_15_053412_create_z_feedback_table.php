<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_feedback', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->default(0)->comment('用户表的用户ID');
            $table->string('username', 63)->default('')->comment('用户名称');
            $table->string('mobile', 20)->default('')->comment('手机号');
            $table->string('feed_type', 63)->default('')->comment('反馈类型');
            $table->string('content', 1023)->comment('反馈内容');
            $table->integer('status')->default(0)->index('id_value')->comment('状态');
            $table->boolean('has_picture')->nullable()->default(0)->comment('是否含有图片');
            $table->string('pic_urls', 1023)->nullable()->comment('图片地址列表，采用JSON数组格式');
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
        Schema::dropIfExists('z_feedback');
    }
}
