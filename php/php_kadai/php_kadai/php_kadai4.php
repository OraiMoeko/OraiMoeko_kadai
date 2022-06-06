<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset='utf-8'>
        
    </head>
    <body>
        <h1>配列課題</h1>
        <p>
            (1)arrayを使用して、平日の曜日の文字列だけの配列を作成し、表示するプログラムを作ろう
        </p>

        <?php
            $heijitu =array("月曜","火曜","水曜","木曜","金曜",);
            echo $heijitu[0] . "<br>\n"
             . $heijitu[1] . "<br>\n"
             . $heijitu[2] . "<br>\n"
             . $heijitu[3] . "<br>\n"
             . $heijitu[4] ;
        ?>

        <br><br><br>
        <p>
            (2)「"英語" => "日本語"」の形式として、色んな英単語の連想配列を作成し、表示するプログラムを作ろう
            <br>"Cat" => "猫"　など
        </p>

        <?php
            $animal = array("cat"=>"猫", "dog"=>"犬", "rabbit"=>"うさぎ");
            print_r($animal);
        ?>

        <br><br><br>
        <p>
            (3)問題(1)と(2)で作った配列から、それぞれ好きな値を選んで、表示するプログラムを作ろう
        </p>
        
        <?php
            $heijitu =array("月曜","火曜","水曜","木曜","金曜",);
            $animal = array("cat"=>"猫", "dog"=>"犬", "rabbit"=>"うさぎ");
            echo $heijitu[4] . $animal["rabbit"] ;
        ?>

        <br><br><br>
        <p>
            (4)問題(1)と(2)の配列の要素を数えて、表示するプログラムを作ろう
        </p>
        
        <?php
            $heijitu =array("月曜","火曜","水曜","木曜","金曜",);
            $animal = array("cat"=>"猫", "dog"=>"犬", "rabbit"=>"うさぎ");
            echo count($heijitu) . "<br>\n" . count($animal) ;
        ?>
        
        <br><br><br>
        <p>
            (5)多次元の連想配列を作り、表示するプログラムを作ろう
            <br>ただし、「リテラル」や「マジックナンバー」の意味をネットで調べ、リテラルやマジックナンバーを使わないこと。
        </p>
        
        <?php
            $i = [
                "うさぎ"=>["ネザーランドドワーフ","ミニレッキス","ロップイヤー"],
                "モモンガ"=>["アメリカモモンガ","フクロモモンガ","(飼育可能なモモンガは2種のみ)"],
                "リス"=>["シマリス","リチャードソンジリス","プレーリードッグ"]
            ];
            foreach($i as $key=>$vals){
                echo "ペットとして飼育できる" . $key . "３選：". $vals[0].'・'.$vals[1].'・'.$vals[2];
                echo '<br>';
            }
        ?>
        <br><br><br>

    </body>
</html>