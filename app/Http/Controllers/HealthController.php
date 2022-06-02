<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Health;
use Illuminate\Support\Facades\Auth;

class HealthController extends Controller
{
    public function taisosei()
    {
        return view('taisosei'); /**体組成データを表示させる */
    }

    /**
     * 登録
     * 
     * @param Request $request
     * @return Response
     */

    public function create(Request $request)
    {
        // Health::create($request->all());

        $Health = new Health();

        $Health->user_id = Auth::id();
        $Health->weight = $request->input('weight');
        $Health->bmi = 30;
        $Health->bfp = $request->get('bfp');
        $Health->chest = $request->get('chest');
        $Health->arm = $request->get('arm');
        $Health->waist = $request->get('waist');
        $Health->thign = $request->get('thign');
        $Health->hip = $request->get('hip');
        $Health->measurement_date = $request->get('date');

        $Health->save();

        return redirect()->route('taisosei');
        // return view('taisosei');
    }


    // /**
    //  * 登録
    //  * 
    //  * @param Array $data
    //  * @return 
    //  */

    // protected function create(array $data)
    // {
    //     return Health::create([
        
    //     'user_id' => $data['user_id'],
    //     'weight' => $data['weight'],
    //     'bmi' => $data['bmi'],
    //     'bfp' => $data['bfp'],
    //     'chest' => $data['chest'],
    //     'arm' => $data['arm'],
    //     'waist' => $data['waist'],
    //     'thign' => $data['thign'],
    //     'hip' => $data['hip'],

    //     ]);
    }