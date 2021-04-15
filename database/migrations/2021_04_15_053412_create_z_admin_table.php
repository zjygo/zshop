<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_admin', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 63)->default('')->comment('管理员名称');
            $table->string('password', 63)->default('')->comment('管理员密码');
            $table->string('last_login_ip', 63)->nullable()->default('')->comment('最近一次登录IP地址');
            $table->dateTime('last_login_time')->nullable()->comment('最近一次登录时间');
            $table->string('avatar')->nullable()->default('\\\'')->comment('头像图片');
            $table->dateTime('add_time')->nullable()->comment('创建时间');
            $table->dateTime('update_time')->nullable()->comment('更新时间');
            $table->boolean('deleted')->nullable()->default(0)->comment('逻辑删除');
            $table->string('role_ids', 127)->nullable()->default('[]')->comment('角色列表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('z_admin');
    }
}
