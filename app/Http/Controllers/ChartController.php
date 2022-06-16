<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Health;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller

{
    public function index()

    {
        // ソート済みの配列を返す

        $data = Health::where('user_id', '=', Auth::id())->orderBy('measurement_date','asc')->get(); 
        
        $weight = [];
        $measurement_date = [];
        foreach ($data as $item) {
            $weight[] = $item['weight'];
            $measurement_date[] = $item['measurement_date'];

        }

        $data=json_encode($data);
        return view('chart')->with([
            'weight' => $weight,
            'measurement_date' => $measurement_date
        ]);
    }

}
