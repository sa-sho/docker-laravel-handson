<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Public\Jankenplayer\Player;

class JankenController extends Controller
{
    // GETメソッドに対して初期ページへ遷移
    public function index()
    {
        return view('janken.index');
    }

    // POSTメソッドに対して手の設定、勝敗判定をし、結果ページへ遷移
    public function match(Request $request)
    {
        // プレーヤークラスを使う
        require public_path('jankenplayer/player.php');

        // コンピューターとユーザーの名前を設定
        $computer = new Player('COM');
        $user = new Player('USER');

        // コンピューターの手は乱数で設定
        $computer->setHandNumber(random_int(0, 2));
        // ユーザーの手はフォーム入力から得る
        $user->setHandNumber((int)$request->hand);

        // コンピューターとユーザーのオブジェクトを渡してビューに遷移
        $vars = [
            'computer' => $computer,
            'user' => $user,
        ];
        return view('janken.index', $vars);
    }
}
