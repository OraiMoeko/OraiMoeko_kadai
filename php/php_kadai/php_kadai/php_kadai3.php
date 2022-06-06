<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset='utf-8'>
        
    </head>
    <body>
        <h1>制御文課題</h1>
        <p>
            (1)複数条件のチェック
            <br>表示する度に、ランダムで、if elseif elseのどれかの処理が行われるプログラムを作ろう。
            <br>PHPに標準で備わっているrand()関数をネットで調べよう。
        </p>

        <?php
            $i = rand(0,2);
            if ($i == 0){
                echo " パンダ";
            }else if($i == 1){
                echo "うさぎ";
            }else{
                echo "コアラ";
            }
        ?>

        <br><br><br>
        <p>
            (2)三項演算子を使用して、表示する度にランダムで表示するメッセージが変わるプログラムを作ろう。
        </p>

        <?php
            $Time = "Hiru";

            $msg = $Time == "Hiru"  ? "こんにちは" : "こんばんは";
            print $msg;
        ?>

        <br><br><br>
        <p>
            (3)「1～4」の数値をランダムに変数へ保存し、その変数がどの値であるか、switch文でチェックし表示するプログラムを作ろう。
        </p>
        
        <?php
            $i = rand(1,4);
            switch ($i){
                case 1:
                    echo "１";
                  break;
                  case 2:
                    echo "２";
                  break;
                  case 3:
                    echo "３";
                  break;
                  case 4:
                    echo "４";
                  break;
                }
        ?>

        <br><br><br>
        <p>
            (4)問題(3)で作ったプログラムをコピーし、break文を抜いたら、処理はどうなるか。
            <br>予測した後、コピーしたプログラムを修正して検証しよう。
        </p>
        
        <?php
            $i = rand(1,4);
            switch ($i){
                case 1:
                    echo "１";
                  case 2:
                    echo "２";
                  case 3:
                    echo "３";
                  case 4:
                    echo "４";
                }
        ?>
        
        <br><br><br>
        <p>
            (5)問題(3)で作ったプログラムをコピーし、「1～6」の数値をランダムに変数へ保存するよう変更。
            <br>default文を使用して「1～4」以外の数値の時は、エラーを示すような文章を表示するプログラムを作ろう。
        </p>
        
        <?php
            $i = rand(1,6);
            switch ($i){
                case 1:
                    echo "１";
                  break;
                  case 2:
                    echo "２";
                  break;
                  case 3:
                    echo "３";
                  break;
                  case 4:
                    echo "４";
                  break;
                default:echo "error";
                }
        ?>
        
        <br><br><br>
        <p>
            (6)問題(3)で作ったプログラムをコピーし、endswitch文を使用した、switch文に修正しよう。
        </p>

        <?php $i = rand(1,4) ; ?>
        <?php switch ($i) : ?><?php case 1: ?>１<?php break; ?>
        <?php case 2: ?>２<?php break; ?>
        <?php case 3: ?>３<?php break; ?>
        <?php case 4: ?>４<?php break; ?>
        <?php endswitch; ?>
        
        <br><br><br>
        <p>
            (7)whileループで、10回ループ処理をし、ループ数を数えて表示するプログラムを作ろう。
        </p>
        
        <?php
            $count = 1;
            while($count<=10){
                echo $count . "回目" . "<br>\n";
                $count++;
            }
        ?>

        <br><br><br>
        <p>
            (8)do～whileで10回ループ処理をし、ループ数を数えて表示するプログラムを作ろう。
        </p>
        
        <?php
            $i = 1;
            do {
                echo $i . "回目" . "<br>\n";
                $i++;
            } while ($i <= 10);
        ?>

        <br><br><br>
        <p>
            (9)下記のソースにbreak文を加えて「ゼロで割り算する事」を避けるプログラムを作ろう。
            <br>for ($counter = -3; $counter < 10; $counter++) {
            <br>echo 100 / $counter;
            <br>}
        </p>
        
        <?php
            for ($counter = -3; $counter < 10; $counter++) {
                if($counter==0){
                    break;
                }else{
                echo 100 / $counter . "<br>\n";
                }
            }
        ?>

        <br><br><br>
        <p>
            (10)問題(9)で作ったプログラムをコピーし、break文の代わりにcontinue文を使用するとどうなるか。
            <br>予測した後、プログラムを書いて検証しよう。
        </p>
        
        <?php
            for ($counter = -3; $counter < 10; $counter++) {
                if($counter==0){
                    continue;
                }else{
                echo 100 / $counter . "<br>\n";
                }
            }
        ?>

        <br><br><br>

    </body>
</html>