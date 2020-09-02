<?php
function tentukan_nilai($number)
{
    //  kode disini
    if($number >= 85 && $number <= 100){
        echo("Sangat Baik");
        echo("<br>");
    }elseif ($number >= 70 && $number <= 85) {
        # code...
        echo("Baik");
        echo("<br>");
    }elseif ($number >= 60 && $number <= 70) {
        # code...
        echo("Cukup");
        echo("<br>");
    }else {
        # code...
        echo("Kurang");
        echo("<br>");
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>