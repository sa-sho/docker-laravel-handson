//audioを作成
var audio = new Audio("/audio/雨の音.mp3");

//【関数】HTML起動時に事前に呼ばれる
function loadAudio() {
audio.forEach((a) => {

    audio.src = "/audio/雨の音.mp3";

    //読み込む
    audio.load();

});
}
//【関数】音をループ再生

function playAudioLoop() {
//ループさせる
var loopPlay = function(){
audio.play();
audio.currentTime = 0;
setTimeout(loopPlay, 10000/* 10秒 */);
};
loopPlay();
}