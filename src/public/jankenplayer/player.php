<?php

// 名前空間を定義
namespace Public\Jankenplayer;

/**
 * じゃんけんのプレーヤーのクラス
 */
class Player
{
  /** @var array 手の数値(0, 1, 2)に対応したじゃんけんの手の名称 */
  const HANDS = ['ぐー', 'ちょき', 'ぱー'];

  /** @var string プレーヤーの名前 */
  private $name;
  /** @var int じゃんけんの手の数値(0, 1, 2) */
  private $hand_number;

  /**
   * コンストラクターでプレーヤーの名前を指定する。
   *
   * @param string $name プレーヤーの名前
   */
  public function __construct($name)
  {
    $this->name = $name;
    // 手の数値の初期値はnull
    $hand_number = null;
  }

  /**
   * プレーヤーの名前を返す。
   *
   * @return string プレーヤーの名前
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * 現在設定されている手の文字列表現を返す。
   *
   * @return string $hand_numberプロパティーの値に対応したHANDSの要素文字列。
   *                手が未設定の場合はnull。
   */
  public function getHand()
  {
    if (isset($this->hand_number)) {
      return self::HANDS[$this->hand_number];
    } else {
      return null;
    }
  }

  /**
   * 手の値(0, 1, 2)をプロパティーにセットする。
   */
  public function setHandNumber($hand_number)
  {
    $this->hand_number = $hand_number;
  }

  /**
   * プレーヤーが引数のプレーヤーに勝っているかどうかを判定する。
   *
   * @return boolean ユーザーが引数のユーザーに勝っていればtrue、負けていればfalse
   */
  public function wins($other)
  {
    // 0:Rock, 1:Paper, 2:Scissorsの勝つパターンをチェック
    if (
      $this->hand_number === 0 && $other->hand_number === 1 ||
      $this->hand_number === 1 && $other->hand_number === 2 ||
      $this->hand_number === 2 && $other->hand_number === 0
    ) {
      return true;
    } else {
      return false;
    }
  }

  /**
   * プレーヤーが引数のプレーヤーとあいこになっているかどうかを判定する。
   *
   * @return boolean ユーザーが引数のユーザーとあいこならtrue、そうでなければfalse
   */
  public function draws($other)
  {
    return $this->hand_number === $other->hand_number ? true : false;
  }
  // enum kekka{
  //   aiko: 0,
  //   win: 1,
  //   lose: 2
  // }

  // public function result($other)
  // {
  //   if($this->hand_number === $other->hand_number)
  //   {
  //     //aiko 
  //     //return 0; //enum de result aiko 0
  //     return kekka.aiko;
  //   }
  //   else if($this->hand_number === 0 && $other->hand_number === 1 ||
  //   $this->hand_number === 1 && $other->hand_number === 2 ||
  //   $this->hand_number === 2 && $other->hand_number === 0)
  //   {
  //     return kakka.win;
  //   }
  //   else{
  //     return kekka.lose;
  //   }
  //}
}
