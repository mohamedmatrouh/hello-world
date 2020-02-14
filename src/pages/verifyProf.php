<?php
    include "connection.php";
    echo "Hello World";
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
            include "connection.php";
    
            $conn = OpenCon();
    
            $profId   =  $_POST["professeurId"];
            $profPass =  $_POST["professeurPass"];
    
            if(isset($profId) && isset($profPass)){
                $sql = "SELECT * from login where email = '$profdId'";
                $result = $conn->query($sql); //on pose le reulstat de la query dans un string
                if(!$result) die("Fatal Error");
                $rows = $result->num_rows; //donne le nombre de ligne dans le tableau
                $real_pass = $result->fetch_assoc()['password']; //this will give the value of each cell
                
                if($real_pass == $profPass){
                    echo "You are login Successfully ";
                    header("location:index.php");
                    }
    
                else {
                    header("location: .../etudiant_result.html");   // create my-account.php page for redirection 
                    die;// if error then redirect to login page . 
                    }
                    
            }
    
        ?>
    
    </body>
    </html>