<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset='utf-8'>
        
    </head>
    <body>
        <h1>式と演算子課題（２）</h1>
        <p>
            (1)以下の文の値を予測して、その後、プログラムを書き、検証しよう。
            <br>・2 + 4 + 5
            <br>　4 - 5 + 2
            <br>・4 * 5 / 2
            <br>　5 / 2 * 4
        </p>

        <?php
            echo (2 + 4 + 5).
            "<br>\n";
            echo (4 - 5 + 2);
        ?>
        <br>
        <?php
            echo (4 * 5 / 2).
            "<br>\n";
            echo (5 / 2 * 4);
        ?>

        <br><br><br>
        <p>
            (2)以下の文の値を予測して、その後、プログラムを書き、検証しよう。
            <br>2 * 3 + 4 + 1;
            <br>2 * (3 + 4 + 1);
        </p>

        <?php
            echo (2 * 3 + 4 + 1).
            "<br>\n";
            echo (2 * (3 + 4 + 1));
        ?>

        <br><br><br>
        <p>
            (3)else文とif文について、以下のソースを見て、以下の質問に答えよ。
            <br>①trueが実行される条件を、画面上に表示しよう。
            <br>②falseが実行されるには、どのような処理が追加で必要か、解説を画面上に表示しよう。
            <br>if ($username == "Admin") {
            <br>echo ("Welcome to the admin page.");
            <br>} else {
            <br>echo ("Welcome to the user page.");
            <br>}
        </p>
        
        <p>
            ①$username == "Admin"
        </p>
        <p>
            ②$username == "Admin"にならないようにする。
        </p>

        <br><br><br>
        <p>
            (4)適当な配列を作り、複数の値を保存する事。また、保存した値を、ループ処理で順番に表示するプログラムを作ろう。
        </p>
        
        <?php
            $animal = ["Panda","Usagi","Koara"];
            foreach($animal as $zoo){
                echo $zoo . "<BR>\n";
            }
        ?>
        
        <br><br><br>
        <p>
            (5)問題(4)で作った配列の内容を、sort関数でアルファベット順に並べて、ループ処理で順番に表示するプログラムを作ろう。
        </p>
        
        <?php
            $animal = ["Panda","Usagi","Koara"];
            sort($animal);
            foreach($animal as $zoo){
                echo $zoo . "<BR>\n";
            }
        ?>
        
        <br><br><br>
        <p>
            (6)適当な多次元配列を作成し、foreachで内容を順番に表示するプログラムと、whileで内容を順番に表示するプログラムを作ろう。
            <br>ただし、「マジックナンバー」の意味をネットで調べ、マジックナンバーを使わないこと。
        </p>

        <?php
            $doyo = [
                ["パンダ","・ウサギ","・コアラ","・パンダウサギコアラ"],
                ["こりす","・うさぎ","・ことり","・たぬき"],
                ["迷子のこねこ","・いぬのおまわりさん","・すずめ","・からす"]
            ];

            foreach($doyo as $animal => $animals){
                for($i=0; $i<=count($doyo); $i++){
                echo $animal . $animals[$i] . "<br>\n";
                }
            }
            /*foreach($doyo as $animal => $animals){
                echo $animal . $animals[0] . $animals[1] . $animals[2] . $animals[3] . "<br>\n";
            }*/
            echo "<br>\n";

            $doyo = [
                ["パンダ","・ウサギ","・コアラ","・パンダウサギコアラ"],
                ["こりす","・うさぎ","・ことり","・たぬき"],
                ["迷子のこねこ","・いぬのおまわりさん","・すずめ","・からす"]
            ];
            
            $i = 0;
            while ($i < count($doyo)){
                for($j=0; $j<=count($doyo); $j++){
                    echo $doyo[$i][$j] . "<br>\n";
                }
                $i++;
            }

            /*$i = 0;
            while ($i < count($doyo)):
                echo $doyo[$i][0] . $doyo[$i][1] . $doyo[$i][2] . $doyo[$i][3] . "<br>\n";
                $i++;
            endwhile;*/
        ?>
        
        
        <br><br><br> 
    </body>
</html>