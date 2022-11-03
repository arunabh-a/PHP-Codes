<?php


    function openconnect() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "Burger$1";
        $dbname = "cse57d";
    

    $connect = new mysqli ($dbhost, $dbuser, $dbpass, $dbname) or die("Connection Failed: %s\n". $connect -> error);

    // $sql = "INSERT INTO `student` (`Name`, `Class`, `Roll No`, `Description`) VALUES ('$name', '$class', '$rollno', '$desc');";
    return $connect;

    }

    function CloseCon($connect){

        $connect -> close;
    }

?>