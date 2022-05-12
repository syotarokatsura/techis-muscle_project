<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Trainingevent;



class TrainingController extends Controller
{
    public function register(){

        return view('register');
    }
    public function top(){

        //menuテーブルに入っているレコードをすべて取得する
        $menu = Menu::all();
        \Log::channel('debug')->info($member);

        return view('top')->with([
            'menu' => $menu,
        ]);
    }

    public function index(Request $request)
    {
        $training = Trainingevent::orderBy('created_at' , 'asc')->get();
        return view(' , index' , [
            'trainingevents' => $training,
        ]);
    }

    public function menuRegister(Request $request){
        
    //メニュー項目を追加する
    $menu = new Menu();
    $menu->trainingname = $request->trainingname;
    $menu->weight = $request->weight;
    $menu->numberoftimes = $request->numberoftimes;
    $menu->save();

    return redirect(B '/top');
    }
}