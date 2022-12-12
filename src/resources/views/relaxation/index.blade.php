@extends('layout')

@section('content')
<div class="container mt-5 text-white">

  <h2>雨の音</h2>
  <div>
        <button onclick="stop()">停止</button>
        <button onclick="playAudioLoop()">再生</button>
    </div>
 
    <div>
        <button onclick="volume_down()">-</button>
        <button onclick="volume_up()">+</button>
        <button onclick="mute_true()">消音</button>
        <button onclick="mute_false()">消音解除</button>
    </div>
    
 
    <script language="javascript" type="text/javascript">
        var audio = new Audio("/audio/雨の音.mp3"); //変数作成

        function loadAudio() {
       
        audio.forEach((a) => {

        audio.src = "/audio/雨の音.mp3"; //音声ファイル指定
        audio.volume = 0.5; //音量の初期値(50%)

        //読み込む
        audio.load();
        
        });
        }
        
        function playAudioLoop() {
        //ループさせる
        var loopPlay = function(){
        audio.play();
        audio.currentTime = 0;
        setTimeout(loopPlay, 60000/* 10秒 */);
        };
        loopPlay();
        }
        
        function stop() { //一時停止
            audio.pause();
        }
        
        function volume_down() { //音量ダウン
            audio.volume = audio.volume - 0.1; //音量の値を0.1(10%)ずつダウン
        }
        
        function volume_up() { //音量アップ
            audio.volume = audio.volume + 0.1; //音量の値を0.1(10%)ずつアップ
        }
        
        function mute_true() { //消音
            audio.muted = true;
        }
        
        function mute_false() { //消音解除
            audio.muted = false;
        }
        
    </script>


@endsection