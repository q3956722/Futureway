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
        Schema::create('dots', function (Blueprint $table) {
            $table->integer('unid')->comment("單元ID");
            $table->bigIncrements('ndid')->comment("節點ID");
            $table->integer('ndorder')->comment("節點序號");
            $table->string("ndtitle",255)->comment("節點名稱");
            $table->string("ndvidtype",255)->comment("影片類型")->nullable();
            $table->string("ndvid",255)->comment("影片ID")->nullable();
            $table->text("ndcontent")->comment("教材內容")->nullable();
            $table->text("ndquiz")->comment("測驗ID");
            $table->time(ndtime)->comment("建議學習時間")->nullable();
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
        Schema::dropIfExists('dots');
    }
};
