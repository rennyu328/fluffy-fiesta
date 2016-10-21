<?php
//課題6:名前による検索プログラムを実装する。
// 3人分のプロフィール(項目は課題5参照)をあらかじめ定義しておく。
// 引き数にそれらのプロフィールと文字列をとり、戻り値は1人分のプロフィール情報を
// 返却する。引き数の文字が名前に含まれる(部分一致)プロフィール
//(複数名合致する場合は最初のプロフィールとする)
// を戻り値として返却する。それ以降などは課題5と同じ扱いに

function your_profiles($target_name){

  $profile1 = array(
   'id' => '2',
   'name' => 'John',
   'birth' => '1994年5月1日',
  );
  $profile2 = array(
   'id' => '3',
   'name' => 'Tom',
   'birth' => '1994年10月1日',
  );
  $profile3 = array(
   'id' => '4',
   'name' => 'Mary',
   'birth' => '1994年12月1日',
  );
  $profiles = array($profile1,$profile2,$profile3);
  if($target_name == $profiles[0]['name']){
  foreach($profile1 as $value){
    echo $value.'<br>';
  }
  }
  if($target_name == $profiles[1]['name']){
  foreach($profile2 as $value){
    echo $value.'<br>';
  }
}if($target_name == $profiles[2]['name']){
  foreach($profile as $value){
    echo $value.'<br>';
  }
  }
}
  your_profiles("John");

  //部分一致

  //ターゲット文章
$target_string = "おはようございます、こんにちは、こんばんは。「http://ysklog.net」です。「http://yahoo.co.jp」ではありません。";
 
//検索したい文字列
$search_string = "http";

//検索を実行
if(strpos($target_string, $search_string) !== false){
    //見つかった時の処理
    echo "見つかりました";

}else{
    //見つからなかった時の処理
    echo "見つかりませんでした";
}
?>
