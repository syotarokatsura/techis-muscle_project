<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use App\Services\Service;
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
        $basic = Basic::where('user_id', '=', Auth::id())->first();

        $Health = new Health();

        $Health->user_id = Auth::id();
        $Health->weight = $request->input('weight');

        $service = new Service();
        //BMI計算
        $bmi = $service->bmi($request->input('weight'), $basic['height']);
        $Health->bmi = $bmi;

        $Health->bfp = $request->get('bfp');
        $Health->chest = $request->get('chest');
        $Health->arm = $request->get('arm');
        $Health->waist = $request->get('waist');
        $Health->thign = $request->get('thign');
        $Health->hip = $request->get('hip');
        $Health->measurement_date = $request->get('date');

        $Health->save();

        return redirect()->route('taisosei');
    }
}
