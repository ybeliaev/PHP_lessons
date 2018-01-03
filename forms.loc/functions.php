<?php
/**
 * Created by PhpStorm.
 * User: Jorgen
 * Date: 03.01.2018
 * Time: 13:23
 */
function quadratic($a, $b, $c){
    $d = ( $b * $b ) - ( 4 * $a * $c );

    if( $d < 0){
        return false;
    } elseif ( $d == 0 ){
        $x = -$b / ( 2 * $a );
        return $x;
    } elseif ( $d > 0 ){
        $x1 = (-$b - sqrt($d) / ( 2 * $a ));
        $x2 = (-$b + sqrt($d) / ( 2 * $a ));
        return array($x1, $x2);
    }

}