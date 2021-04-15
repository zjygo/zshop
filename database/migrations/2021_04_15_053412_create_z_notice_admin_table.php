<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZNoticeAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_notice_admin', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('notice_id')->nullable()->comment('通知ID');
            $table->string('notice_title', 63)->nullable()->comment('通知标题');
            $table->integer('admin_id')->nullable()->comment('接收通知的管理员ID');
            $table->dateTime('read_time')->nullable()->comment('阅读时间，如果是NULL则是未读状态');
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
        Schema::dropIfExists('z_notice_admin');
    }
}
