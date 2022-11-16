<?php

    $name = $_POST["name"];
    $class = $_POST["class"];
    $rollno = $_POST["rollno"];
    $desc = $_POST["desc"];

    include 'confunc.php';
        if(!preg_match ("/^[a-zA-z]*$/", $name)){
            echo "Character Values to be inserted only";
        }
        else{
            echo "\n"; 
        }
        if(!preg_match("/^[0-9]*$/", $rollno)){
            echo "Numeric Values to be inserted only.";
        }
        else{
            echo "";
        }
        $connect = openconnect();
    
    
        $sqlinsert = "INSERT INTO `student` (`name`, `class`, `rollno`, `desc`) VALUES ('$name', '$class', '$rollno', '$desc');";
    
        if($connect->query($sqlinsert)==true){
            echo "\n Upload Successful";
        }
        else{
            echo "Upload Failed";
        }
        
        $sqldelete = "DELETE FROM student where rollno = $rollno;";

        if($connect->query($sqldelete)== true){
            echo "<br> Deletion Successful";
        }
        else{
            echo "Deletion Failed";
        }





//        INSERT INTO `student` (`Name`, `Class`, `Roll No`, `Description`) VALUES ('Arunabh', 'JK202', '21', 'Wassup Nigga');