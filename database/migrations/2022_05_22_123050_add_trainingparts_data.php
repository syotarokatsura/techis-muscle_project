<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddTrainingpartsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('trainingparts')->insert(
            [
                [
                    'name'=>'胸'
                ],
                [
                    'name'=>'肩'
                ],
                [
                    'name'=>'腕'
                ],
                [
                    'name'=>'背中'
                ],
                [
                    'name'=>'お尻'
                ],
                [
                    'name'=>'太もも'
                ],
                [
                    'name'=>'ふくらはぎ'
                ],
   
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('trainingparts')->delete(
            [
                [
                    'name'=>'胸'
                ],
                [
                    'name'=>'肩'
                ],
                [
                    'name'=>'腕'
                ],
                [
                    'name'=>'背中'
                ],
                [
                    'name'=>'お尻'
                ],
                [
                    'name'=>'太もも'
                ],
                [
                    'name'=>'ふくらはぎ'
                ],
   
            ]
        );
    }
}
