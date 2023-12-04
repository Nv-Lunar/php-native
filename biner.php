<?php  

$akhir = 10;
for ($i = 1; $i < $akhir; $i++) {
    $a = 1;
    // echo '$i = '. $i . "\n";
    for( $j = 1; $j < $i; $j++) {
        echo '$j = ' . $j . "\n";
        if($i % $j == 0){
            $a++;
        }
        // echo "a = $a \n";
    }
    if($a == 2){
        echo 'prima = ' . $j . "\n";
    }


}

?>