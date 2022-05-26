<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PeopleHealthsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //更新データテーブル ※->nullable()でNULLを許容

        Schema::create('healths',function(Blueprint $table){
            $table->integer('user_id')->comment("ユーザーID");
            $table->float('weight')->comment("実数");
            $table->float('bmi')->comment("BMI_体重（Kg）/（身長（m））*（身長（m））");
            $table->float('bfp')->nullable()->comment("体脂肪率_body_fat_percentage");
            $table->float('chest')->nullable()->comment("胸囲_NULLを許容");
            $table->float('arm')->nullable()->comment("腕回り_NULLを許容");
            $table->float('waist')->nullable()->comment("ウェスト_NULLを許容");
            $table->float('thign')->nullable()->comment("大腿筋_NULLを許容");
            $table->float('hip')->nullable()->comment("ヒップ_NULLを許容");
            $table->integer('numberoftime');
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
        Schema::dropIfExists('healths');
    }
}
