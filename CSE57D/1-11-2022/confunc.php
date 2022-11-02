<?php


    function openconnect() {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "Burger$1";
        $dbname = "cse57d";
    

    $connect = new mysqli ($dbhost, $dbuser, $dbpass, $dbname) or die("Connection Failed: %s\n". $connect -> error);

    return $connect;

    }


    function CloseCon($connect){

        $connect -> close;
    }

?>