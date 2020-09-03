<?php
// require_once 'app/animal.php';
namespace App\Http\Controllers;

use App\Animal;
use App\Frog;
use App\Ape;

//TEST CASES
class index_week2_day4 {
    function view(){
        $sheep = new Animal("shaun");

        echo $sheep->name; // "shaun"
        echo "<br>";
        echo $sheep->legs; // 2
        echo "<br>";
        echo $sheep->cold_blooded; // false
        echo "<br>";
        echo "<br>";

        $sungokong = new Ape("kera sakti");
        echo $sungokong->yell(); // "Auooo"
        echo "<br>";
        $kodok = new Frog("buduk");
        echo $kodok->jump(); // "hop hop"
    }
}

?>