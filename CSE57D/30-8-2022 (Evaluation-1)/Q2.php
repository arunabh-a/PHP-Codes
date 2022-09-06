<?php  
    if(isset($_POST['submit']))  
    {  
        $a = $_POST['a'];  
        $b = $_POST['b'];  
        $sum =  $a + $b;     
        $diff = $a - $b;
        $prod = $a * $b;
        $div = $a / $b;
        $mod = $a % $b;
        echo "Sum : ".$sum; 
        echo "<br>" ;
        echo "Difference : ".$diff;
        echo "<br>" ;
        echo "Product : ".$prod;
        echo "<br>" ;
        echo "Modulus : ".$mod;
        echo "<br>" ;
        echo "Divide : ".$div;
    }  
?>  