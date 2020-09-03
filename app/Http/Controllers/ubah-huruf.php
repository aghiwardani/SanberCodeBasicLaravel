<?php
function ubah_huruf($string){
//kode di sini
    // echo(range('a', 'z'));
    for ($i=0; $i < strlen($string); $i++) { 
        # code...
        $s = $string[$i];
        echo(++$s);
    }
    echo("<br>");
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>