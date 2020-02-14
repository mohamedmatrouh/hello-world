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

        $studId   =  $_POST["studentId"];
        $studPass =  $_POST["studentPass"];

        if(isset($studId) && isset($studPass)){
            $sql = "SELECT * from login where cne = '$studId'";
            $result = $conn->query($sql); //on pose le reulstat de la query dans un string
            if(!$result) die("Fatal Error");
            $rows = $result->num_rows; //donne le nombre de ligne dans le tableau
            $real_pass = $result->fetch_assoc()['pass']; //this will give the value of each cell
            
            if($real_pass == $studPass){
                session_start();
                $_SESSION["cne"] = $studId;
                echo "You are login Successfully ";
                header("location:etudiant_result.php");
                
                }

            else {
                header("location: etudiant_seting.html");   // create my-account.php page for redirection 
                die;// if error then redirect to login page . 
                }
                
        }

    ?>

</body>
</html>