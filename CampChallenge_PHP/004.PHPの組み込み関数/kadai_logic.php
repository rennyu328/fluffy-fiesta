<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>demo4-demo</title>
</head>
<body>
    <?php

    $bocchan_texts = array();
    $read_line = 12;
    $count = 0;
    $figure = '。';
    $exchange_figure ='。'. '<br>';
    $changed_text = array();

    $bocchan_fp = fopen('4_12_bocchan.txt','r');

    //もとの文章をそのまま表示
    $bocchan_text = file_get_contents('4_12_bocchan.txt');//取得
    echo 'もとの文章は以下です。'.'<br>'.$bocchan_text.'<br>','<br>';

    for($i=0;$i<$read_line;++$i){
        $bocchan_texts[$i]=fgets($bocchan_fp);
        //fgetsは一行読み取りなので$bocchan_fpをechoするには
        //配列のkeyを指定する必要があり、１行（空白まで）ずつ。
        $count += mb_strlen($bocchan_texts[$i]);
    }

    echo $read_line.'行目までの文字数は'.$count.'です<br>';
    echo 'そのうち、「'.$figure.'」は'
    .figure_count($bocchan_texts).'個含まれています<br>';
    echo '<br>これを改行に置き換えると...<br>';

    $changed_text = bocchan_exchange($bocchan_texts,$exchange_figure);

    foreach ($changed_text as $key => $changed_line){
        echo ($key+1).'行目:';
        echo $changed_line.'<br>';
    }

    echo '<br>という表現になります<br>';


    function figure_count($texts){
        global $figure;
        $figcnt = 0;

        foreach ($texts as $text_line){
            $figcnt += mb_substr_count($text_line, $figure);
        }

        return $figcnt;
    }

    function bocchan_exchange($texts,$exfig){
        global $figure;
        $ex_texts = array();

        foreach ($texts as $line_num => $text_line){
            $ex_texts[$line_num] = str_replace($figure, $exfig, $text_line);
        }

        return $ex_texts;
    }

    ?>
</body>
</html>
