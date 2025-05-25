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
        Schema::create('product_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('intro');
            $table->longText('details');
            $table->foreignId('product_type_id');
            $table->timestamps();
            $table->softDeletes();

            // 明確指定參考表名和欄位
            $table->foreign('product_type_id')
                  ->references('id')
                  ->on('product_type_infos')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_infos');
    }
};
