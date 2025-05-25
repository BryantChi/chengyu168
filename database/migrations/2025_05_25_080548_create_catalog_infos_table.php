<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalog_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->longText('intro')->nullable();
            $table->longText('image')->nullable();
            $table->longText('file')->nullable();
            $table->unsignedBigInteger('views')->default(0)->nullable();
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
        Schema::drop('catalog_infos');
    }
};
