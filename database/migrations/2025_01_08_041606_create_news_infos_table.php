<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('標題');
            $table->longText('content')->nullable()->comment('內容');
            $table->text('cover_front_image')->nullable()->comment('封面圖');
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('views')->default(0)->nullable()->comment('瀏覽次數');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news_infos');
    }
}
