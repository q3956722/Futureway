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
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('coid')->comment("課程ID");
            $table->string("cotitle",255)->comment("課程標題");
            $table->text("coinfo")->comment("課程簡介");
            $table->text("coimage")->comment("課程縮圖");
            $table->string("coteacher")->comment("授課老師");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
