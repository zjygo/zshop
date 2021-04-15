<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('z_topic', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title')->default('\\\'')->comment('专题标题');
            $table->string('subtitle')->nullable()->default('\\\'')->comment('专题子标题');
            $table->text('content')->nullable()->comment('专题内容，富文本格式');
            $table->decimal('price', 10)->nullable()->default(0.00)->comment('专题相关商品最低价');
            $table->string('read_count')->nullable()->default('1k')->comment('专题阅读量');
            $table->string('pic_url')->nullable()->default('')->comment('专题图片');
            $table->integer('sort_order')->nullable()->default(100)->comment('排序');
            $table->string('goods', 1023)->nullable()->default('')->comment('专题相关商品，采用JSON数组格式');
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
        Schema::dropIfExists('z_topic');
    }
}
