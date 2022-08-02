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
        Schema::create('units', function (Blueprint $table) {
            $table->integer('coid')->comment("課程ID");
            $table->bigIncrements('unid')->comment("單元ID");
            $table->integer('unorder')->comment("課程序號");
            $table->string("untitle",255)->comment("單元標題");
            $table->text("uninfo")->comment("單元簡介");
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
        Schema::dropIfExists('units');
    }
};
