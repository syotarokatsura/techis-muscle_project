<?php

namespace App\Http\Controllers;


use App\Models\Trainingevent;
use App\Models\Trainingname;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * 基礎データ一覧表示
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view('menu');
    }

    public function menuCreate(Request $request)
    {
        $trainingparts = $request->trainingparts;
        $trainingname = $request->trainingname; /**二つのデータを受け取る */
        return view('count')->with([
            'trainingparts'=>$trainingparts,
            'trainingname'=>$trainingname /**画面に一緒にデータを渡してあげる */
        ]);
    }

    public function musclecountRegister(Request $request)
    {
        $user_id = 1;//仮

        $date = $request->date;
        $trainingparts = $request->trainingparts;
        $trainingname = $request->trainingname;
        $weight = $request->weight;
        $numberoftime = $request->numberoftime;/**5つのデータを受け取る */

        $trainingnames = new Trainingname(); /**Trainingnameモデルからnameをとる */
        $trainingnames->muscletrainingname = $trainingname;
        $trainingnames->save();

        $trainingevents = new Trainingevent();
        $trainingevents->user_id =$user_id;
        $trainingevents->date = $date;
        $trainingevents->trainingname_id = $trainingnames->id;
        $trainingevents->weight = $weight;
        $trainingevents->numberoftime = $numberoftime;
        $trainingevents->save();

        return redirect('menulist'); //一度区切ってredirectでmenulistのみひらく
    }

    public function menulist(Request $request)
    {
        // 存在するデータの数だけ取得する
        $trainingevent = Trainingevent::get();


        // Trainingeventのデータをひとつずつ処理する.これをしないと上書き保存になる(最後のデータだけを残す）。
        $muscletrainingnames = [];// 配列を宣言する
        foreach($trainingevent as $value){
            $trainingname_id = $value->trainingname_id;
            $trainingnames = Trainingname::where('id', '=', $trainingname_id)->first();
            $muscletrainingnames[] = $trainingnames->muscletrainingname;
        }

        return view('menulist')->with([
            'trainingevent' => $trainingevent,
            'muscletrainingnames' => $muscletrainingnames,
        ]);
    }

    public function menuDelete(Request $request){
        //紐づくidとtrainingname_idを削除
        $trainingevents = Trainingevent::where('trainingname_id','=', $request->id)->first();
        $trainingevents -> delete();

        $trainingname = Trainingname::where('id','=', $request->id)->first();
        $trainingname -> delete();

        return redirect('menulist');

    }
}
