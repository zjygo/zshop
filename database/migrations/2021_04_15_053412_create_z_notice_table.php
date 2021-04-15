<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZNoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_notice', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 63)->nullable()->comment('通知标题');
            $table->string('content', 511)->nullable()->comment('通知内容');
            $table->integer('admin_id')->nullable()->default(0)->comment('创建通知的管理员ID，如果是系统内置通知则是0.');
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
        Schema::dropIfExists('z_notice');
    }
}
