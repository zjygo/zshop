<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_region', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('pid')->default(0)->index('parent_id')->comment('行政区域父ID，例如区县的pid指向市，市的pid指向省，省的pid则是0');
            $table->string('name', 120)->default('')->comment('行政区域名称');
            $table->tinyInteger('type')->default(0)->index('region_type')->comment('行政区域类型，如如1则是省， 如果是2则是市，如果是3则是区县');
            $table->integer('code')->default(0)->index('agency_id')->comment('行政区域编码');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('z_region');
    }
}
