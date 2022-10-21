<?php
    session_start();
?>

<?php
    $_SESSION["Name"] = "Arunabh";
    $_SESSION["Class"] = "JK-202";

?>

<?php
    echo "The Student Name is ". $_SESSION["Name"]. "<br>";
    echo "The Class of the Student is ". $_SESSION["Class"]. "<br>";
?>

<?php
    //Q2 - Indexed Array
    $name = array("Arunabh", "Abhiraj", "Munawar");
    echo "Name of Students = ".$name[0].", ".$name[1].", ".$name[2].".<br>";
?>
<?php
    //Q3 - Round Function
    echo "The Round Function- " .(round(1.6) . "<br> ");
?>
<?php
// Q4 - Print 1-10 using for loop
    for ($x=1; $x<=10; $x++) {
        echo "$x " ; 
    }
?>