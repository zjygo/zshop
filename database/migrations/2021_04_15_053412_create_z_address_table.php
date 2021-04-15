<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_address', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 63)->default('')->comment('收货人名称');
            $table->integer('user_id')->default(0)->index('user_id')->comment('用户表的用户ID');
            $table->string('province', 63)->comment('行政区域表的省ID');
            $table->string('city', 63)->comment('行政区域表的市ID');
            $table->string('county', 63)->comment('行政区域表的区县ID');
            $table->string('address_detail', 127)->default('')->comment('详细收货地址');
            $table->char('area_code', 6)->nullable()->comment('地区编码');
            $table->char('postal_code', 6)->nullable()->comment('邮政编码');
            $table->string('tel', 20)->default('')->comment('手机号码');
            $table->boolean('is_default')->default(0)->comment('是否默认地址');
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
        Schema::dropIfExists('z_address');
    }
}
