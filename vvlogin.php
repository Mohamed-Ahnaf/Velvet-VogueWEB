<?php
// Making variable and assignning the names from the html by: Mohamed Ahnaf
$uname = $_POST['uname'];
$pword = $_POST['pword'];

if (!empty($uname) || !empty($pword)) {
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "businessdb";

    // Create a connection by Mohamed Ahnaf
    $connection = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        $SELECT = "SELECT uname, pword FROM users WHERE uname = ? AND pword = ? LIMIT 1";

        $stmt = $connection->prepare($SELECT);
        $stmt->bind_param("ss", $uname, $pword);
        $stmt->execute();
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if ($rnum == 1) {
            echo "Login successful! Welcome, " . htmlspecialchars($uname) . ".";
        } else {
            echo "Invalid username or password. Please try again.";
        }

        $stmt->close();
        $connection->close();
    }
} else {
    echo "Both fields are required!";
    die();
}
?>
