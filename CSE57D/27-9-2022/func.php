<?php
    $a = 6;
    $b = 2;
    function arith($opera){
        echo "$opera\n";
        echo "<br>";
    }

    arith("Sum = ".$a + $b);
    arith("Difference = ".$a - $b);
    arith("Product = ".$a * $b);
    arith("Quotient = ".$a / $b);

    ?>