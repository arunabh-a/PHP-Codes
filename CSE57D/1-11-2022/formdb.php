<?php
    $name = $_POST["first_name"];
    $class = $_POST["class"];
    $rollno = $_POST["roll_no"];
    $desc = $_POST["desc"];
        if(!preg_match ("/^[a-zA-z]*$/", $name)){
            echo "Character Values to be inserted only";
        }
        else{
            echo $name;
        }
        if(!preg_match("/^[0-9]*$/", $rollno)){
            echo "Numeric Values to be inserted only.";
        }
        else{
            echo $rollno;
        }
//        INSERT INTO `student` (`Name`, `Class`, `Roll No`, `Description`) VALUES ('Arunabh', 'JK202', '21', 'Wassup Nigga');