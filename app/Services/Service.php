<?php

namespace App\Services;

class Service
{
    public function bmi($weight,$height)
    {
        //BMI ＝ 体重kg ÷ (身長m)2

        $height = $height / 100;
        $height = ($height * $height);

        $bmi = $weight / $height;

        return $bmi;
    }
}
