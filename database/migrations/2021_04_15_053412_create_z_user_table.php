<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 63)->unique('user_name')->comment('用户名称');
            $table->string('password', 63)->default('')->comment('用户密码');
            $table->tinyInteger('gender')->default(0)->comment('性别：0 未知， 1男， 1 女');
            $table->date('birthday')->nullable()->comment('生日');
            $table->dateTime('last_login_time')->nullable()->comment('最近一次登录时间');
            $table->string('last_login_ip', 63)->default('')->comment('最近一次登录IP地址');
            $table->tinyInteger('user_level')->nullable()->default(0)->comment('0 普通用户，1 VIP用户，2 高级VIP用户');
            $table->string('nickname', 63)->default('')->comment('用户昵称或网络名称');
            $table->string('mobile', 20)->default('')->comment('用户手机号码');
            $table->string('avatar')->default('')->comment('用户头像图片');
            $table->string('weixin_openid', 63)->default('')->comment('微信登录openid');
            $table->string('session_key', 100)->default('')->comment('微信登录会话KEY');
            $table->tinyInteger('status')->default(0)->comment('0 可用, 1 禁用, 2 注销');
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
        Schema::dropIfExists('z_user');
    }
}
