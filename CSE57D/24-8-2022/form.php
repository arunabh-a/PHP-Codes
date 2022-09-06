<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome <?php echo $_POST["Name"]; ?><br>
    Your Credentials are mentioned below:- <br>
    Name:- <?php echo $_POST["Name"]; ?><br>
    Section:- <?php echo $_POST["class"]; ?><br>
    Address:- <?php echo $_POST["addr"]; ?><br>
    Comment:- <?php echo $_POST["comment"]; ?><br>
    Gender:- <?php echo $_POST["Gender"]; ?><br>
    
</body>
</html>