<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homework extends Controller
{
    // method
    function for()
    {
// 1,2,3,4,... 100
//$i=1;
//while ($i <101){
//echo"<dev>$i</dev>>";
//    $i++;
//}
        for ($i = 1; $i <= 101; $i++) {
            echo "$i <br>";
        }
        echo "<br>";

// 2,4,6,...,100
//$j = 2;
//while ($j <= 100){
//    $j+= 2;
//}
//echo $j ;

        for ($i = 2; $i <= 101; $i += 2) {
            echo "$i <br>";
        }

//11,13,15,...,99
//$k =11;
//while ($k < 100){
//    $k+= 2;
//}
//echo " <dev> $k </dev>>";
        for ($i = 11; $i < 100; $i += 2) {
            echo "$i <br>";
        }

// 10 + 11 + 12 + ... + 99 = ???
//$i = 10;
//$result =0;
//while ($i < 100){
//    $result = $result + $i;
//$i+=1;
//}
//echo $result . "<br>";
        $result = 0;
        for ($i = 10; $i <= 100; $i++) {
            $result += $i;
            echo " <br> $i";
        }


        //$j = 0;
//$result =0;
//while ($j <11){
//    $result += 2 ** $j;
//    $j++;
//}
//echo $result;

        $result = 0;
        for ($j = 0; $j < 11; $j++) {
            $result += 2 ** $j;
        }
        echo "<br> $result <br>";

        echo "finish";
    }
}
