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


