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
        Schema::create('answerinfos', function (Blueprint $table) {
            
            $table->bigIncrements('aiid')->comment("流水號ID");
            $table->integer("userid")->comment("使用者ID");
            $table->integer("quid")->comment("小測驗ID");
            $table->text("aichoose")->comment("作答選項");
            $table->integer("aistatus")->comment("答對答錯");
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
        Schema::dropIfExists('answerinfos');
    }
};
