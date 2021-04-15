<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_role', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 63)->unique('name_UNIQUE')->comment('角色名称');
            $table->string('desc', 1023)->nullable()->comment('角色描述');
            $table->boolean('enabled')->nullable()->default(1)->comment('是否启用');
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
        Schema::dropIfExists('z_role');
    }
}
