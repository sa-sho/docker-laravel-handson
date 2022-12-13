<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/janken.css">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <title>じゃんけんぽん</title>
  </head>
  <body>
    <a class="nav-link" href="{{ route('top') }}">Home</a>
    <h1>じゃんけんぽん</h1>
 
    {{-- ユーザーの手を選択するフォーム／初期状態でRockを選択 --}}
    <form method="post">
      @csrf
      <p>
        <label><input type="radio" name="hand" value="0" checked="checked">ぐー</label>
        <label><input type="radio" name="hand" value="1">ちょき</label>
        <label><input type="radio" name="hand" value="2">ぱー</label>
      </p>
      <div class="text-center">
      <button type="submit">ショウブ！</button>
      </div>
    </form>
 
    {{--
      POSTの場合の勝敗判定表示。
      GETの場合は$userインスタンスが生成されていないのでこのブロックはスルー。
    --}}
    @if (isset($user))
    <div>
        <img src="img/{{ $user->getHand() }}.png">
        <img src="img/{{ $computer->getHand() }}.png">
    </div>
 
      @if ($user->draws($computer))
        <p>あいこ！</p>
      @elseif (($user->wins($computer)))
        <p>かち！</p>
      @else
        <p>まけ！</p>

      {{-- $result = $user->result($computer);
      @if($result === player->kekka->aiko)
      {
        <p>あいこ！</p>
      }
      @elseif($result == player.kekka.win)
      {
        <p>かち！</p>
      }
      @else //elseif(player.kekka.win) no houga nozomasii
      {
        <p>まけ！</p>
      } --}}
      @endif
    @endif
  </body>
</html>