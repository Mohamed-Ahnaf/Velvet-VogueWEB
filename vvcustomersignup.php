<?php
 $uname = $_POST['uname'];
 $email = $_POST['email'];
 $pword = $_POST['pword'];
 $repword = $_POST['repword'];


 if(!empty($uname) || !empty($email) || !empty($pword) || !empty($repword)){

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "businessdb";


    $connection = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

    if(mysqli_connect_error()){
        echo "errrrrrorrr";
    }
    else{
        $SELECT = "SELECT email FROM users WHERE email = ? LIMIT 1 ";

        $INSERT = "INSERT INTO users (uname, email, pword, repword) VALUES(?,?,?,?)";

        $stmt = $connection->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum==0){
            $stmt->close();
            $stmt = $connection->prepare($INSERT);
            $stmt->bind_param("ssss", $uname, $email, $pword, $repword);
            $stmt->execute();
            echo "insert success";
        }
        else{
            echo "failed malliiiii";
        }

        $stmt->close();
        $connection->close();


 }


 }
 else{
    echo "all field are required";
    die();
 }

?>