<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller

{
    public function index()

    {
        // ソート済みの配列を返す

        $data = [70,69,67,66,68,68,66,65,67,65];

        $data=json_encode($data);
        return view('chart')->with([
            'data' => $data]);
    }

}
