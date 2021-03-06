<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>タスク4-0-1</title>
</head>
<body>
    <?php
    /*
     * 問1.この初期化は何を表しているか答えなさい
     * 答.変数をそれぞれ定義している
     */
    $hour=0;
    $min=0;
    $sec=0;
    $month=1;
    $day=1;
    $year=2015;


    /*
     * 問2.このループにおける繰り返し条件を答えなさい
     * 答.$dayの値が365以下である
     *
     * 問3.このループの目的を答えなさい
     * 答.1年分の処理をする
     */
    while($day<=365){

        /*
         * 問4.下行の処理の動作を答えなさい
         * 答.2015年1月1日0時0分0秒のタイムスタンプを生成する
         *
         * 問5.なぜ下行のような処理を行っているのかを答えなさい
         * 答.指定日時の情報を使用できるようにするため
         */
        $timestamp = mktime($hour, $min, $sec, $month, $day, $year);


        /*
         * 問6.下行の処理の動作を答えなさい
         * 答.変数$now_monthに月を代入する
         *
         * 問7.なぜ下行のような処理を行っているのかを答えなさい
         * 答.あとで月を表示させる処理を書くため
         */
        $now_month=date('m', $timestamp);

        /*
         * 問8.この条件分岐はどのような条件で行われているのか答えなさい
         * 答.$befor_monthの値が$now_monthの値と一致しない場合
         *
         * 問9.条件分岐の目的を答えなさい
         * 月の変わり目で表示変更するため
         */
        if($befor_month!=$now_month){

            /*
            * 問10.なぜ下行のような処理を行っているのかを答えなさい
            * 答.$nowmonthに次の値が入った場合に認識するため
            */
            $befor_month=$now_month;

            /*
            * 問11.下行の処理の動作を答えなさい
            * 答.今処理している日時の月を表示する
            */
            echo '<br>'.$now_month.'月<br>';
        }

        /*
         * 問12.下行の処理の動作を答えなさい
         * 答.タイムスタンプを書式化し表示させ、その後にタイムスタンプ値をそのまま表示する。
         *
         * 問13.なぜ下行のような処理を行っているのか答えなさい
         * 答.日付とそれに対応するタイムスタンプを表示させるため。
         */
        echo date('Y年m月d日', $timestamp).'タイムスタンプ:'.$timestamp.'<br>';

        /*
         * 問14.なぜ下行のような処理を行っているのか答えなさい
         * 答.日付を1日更新するため。
         */
        $day++;
    }

    /*
     * 問15.このプログラムは、何を目的とした処理なのかを要約して答えなさい
     * 答.2015年の１年間分のタイムスタンプを日付ごとに表示する。
     *
     * 問16.このままでは本来この処理が望んでいる結果になっていない。何が問題で、どこをどう修正すべきか答えなさい
     * 答.最初に１月と表示されていない。条件分岐に使われている$befor_monthが初期化されていない。
     *　　while文の前に$befor_month=0を書いておく。
     */

    ?>
</body>
</html>
