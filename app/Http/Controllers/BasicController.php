<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Health;
use App\Basic;
use App\Models\basic as ModelsBasic;

class BasicController extends Controller
{
    /**
        * 基礎データ一覧表示
        *
        * @param Request $request
        * @return Response
    */
        public function index(Request $request)
        {
            $basics = ModelsBasic::all();
            return view('basics.index', [
                'basics' => $basics,
            ]);
        }

            /**
        * 基礎データ一覧表示
        *
        * @param Request $request
        * @return Response
    */
        public function add(Request $request)
        {

            return view('basics.add',);
        }

    /**
        * 基礎データ登録
        *
        * @param Request $request
        * @return Response
    */
        public function create(Request $request)
        {              
            // 基礎データ作成
                $basics = new ModelsBasic;
                $form = $request->all();
                unset($form['_token']);
                $basics->fill($form)->save();                  
            return redirect('/basics');
        }

        /**
        * 基礎データ編集データ表示
        *
        * @param Request $request
        * @return Response
        */
        public function edit(Request $request)
        {
            $basics = ModelsBasic::find($request->user_id);
            return view('basics.index', ['form' => $basics,]);
        }

/**
        * 基礎データ編集登録
        *
        * @param Request $request
        * @return Response
        */

        public function update(Request $request)
        {
            $basics = ModelsBasic::find($request->user_id);
            $form = $request->all();
            unset($form['_token']);
            $basics->fill($form)->save();
            return redirect('/basic');
            
        }

        /**
        * 基礎データ削除表示
        *
        * @param Request $request
        * @return Response
        */
        public function delete(Request $request)
        {              
            $basics = ModelsBasic::find($request->user_id);
            return view('basics.index', ['form' => $basics,]);
        }

/**
        * 基礎データ削除登録
        *
        * @param Request $request
        * @return Response
        */

        public function remove(Request $request)
        {
            $basics = ModelsBasic::find($request->user_id)->delete();
            return redirect('/basic');           
        }
}        