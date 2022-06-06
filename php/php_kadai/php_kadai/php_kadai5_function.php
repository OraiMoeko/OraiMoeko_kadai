<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset='utf-8'>
        
    </head>
    <body>

        <?php
            function tasu($x,$y) {
                $z = $x + $y ;
                $x = $z ;
                return $x;
            }
            function hiku($x,$y) {
                $z = $x - $y ;
                $x = $z ;
                return $x;
            }
            function kakeru($x,$y) {
                $z = $x * $y ;
                $x = $z ;
                return $x;
            }
            function waru($x,$y) {
                $z = $x / $y ;
                $x = $z ;
                return $x;
            }
            function amari($x,$y) {
                $z = $x % $y ;
                $x = $z ;
                return $x;
            }
        ?>

<?php
            function tasu2(&$x,&$y) {
                $z = $x + $y ;
                $x = $z ;
                return $x;
            }
            function hiku2(&$x,&$y) {
                $z = $x - $y ;
                $x = $z ;
                return $x;
            }
            function kakeru2(&$x,&$y) {
                $z = $x * $y ;
                $x = $z ;
                return $x;
            }
            function waru2(&$x,&$y) {
                $z = $x / $y ;
                $x = $z ;
                return $x;
            }
            function amari2(&$x,&$y) {
                $z = $x % $y ;
                $x = $z ;
                return $x;
            }
        ?>

    </body>
</html>