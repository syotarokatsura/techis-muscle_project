<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PeopleBasicsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //基本データテーブル

        Schema::create('basics',function(Blueprint $table){
            $table->integer('user_id')->comment("ユーザーID");
            $table->string('name')->comment("名前");
            $table->integer('gender')->comment("1_男性・2_女性・3_その他");
            $table->integer('age')->comment("整数");
            $table->float('height')->comment("実数");
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
        //基本データテーブル削除（テーブルがあれば）
        Schema::dropIfExists('basics');
    }
}
