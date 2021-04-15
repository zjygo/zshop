<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZIssueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_issue', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('question')->nullable()->comment('问题标题');
            $table->string('answer')->nullable()->comment('问题答案');
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
        Schema::dropIfExists('z_issue');
    }
}
