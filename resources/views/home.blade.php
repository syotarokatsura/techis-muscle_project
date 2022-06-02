@extends('layouts.app')

@section('content')
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src=".svg" alt="" width="72" height="57">
        <h2>筋トレアプリ</h2>
        <p class="lead">ようこそ筋トレアプリへ。いろいろやってみよう。</p>
    </div>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">アプリメニュー</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#cpu-fill"/>
                    </svg>
                </div>
                <div>
                    <h2>Data</h2>
                    <p>体組成データを記録する</p>
                    <a href="/taisosei" class="btn btn-primary">Push</a>
                </div>
            </div>

            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#cpu-fill"/>
                    </svg>
                </div>
                <div>
                    <h2>Register</h2>
                    <p>トレーニング結果を記録する</p>
                    <a href="/menu" class="btn btn-primary">Push</a>
                </div>
            </div>


            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#cpu-fill"/>
                    </svg>
                </div>
                <div>
                    <h2>Result</h2>
                    <p>トレーニング結果を見る</p>
                    <a href="/menulist" class="btn btn-primary">Push</a>
                </div>
            </div>
        </div>

        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#cpu-fill"/>
                    </svg>
                </div>
                <div>
                    <h2>Chart</h2>
                    <p>グラフを見る</p>
                    <a href="/taisosei" class="btn btn-primary">Push</a>
                </div>
            </div>

        </div>
    </div>
@endsection
