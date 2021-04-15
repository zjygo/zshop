<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_comment', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('value_id')->default(0)->index('id_value')->comment('如果type=0，则是商品评论；如果是type=1，则是专题评论。');
            $table->tinyInteger('type')->default(0)->comment('评论类型，如果type=0，则是商品评论；如果是type=1，则是专题评论；');
            $table->string('content', 1023)->nullable()->default('')->comment('评论内容');
            $table->string('admin_content', 511)->nullable()->default('')->comment('管理员回复内容');
            $table->integer('user_id')->default(0)->comment('用户表的用户ID');
            $table->boolean('has_picture')->nullable()->default(0)->comment('是否含有图片');
            $table->string('pic_urls', 1023)->nullable()->comment('图片地址列表，采用JSON数组格式');
            $table->smallInteger('star')->nullable()->default(1)->comment('评分， 1-5');
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
        Schema::dropIfExists('z_comment');
    }
}
