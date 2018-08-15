<?php
if($_POST["btn_submit"]) {
    $servername = "localhost";
    $username = "root";
    $password = NULL;
    $dbname = 'usermessage';

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed: " . $conn->connnect_error);
    }

    $sql = "CREATE TABLE message (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        name VARCHAR(30) NOT NULL,
        phone int NOT NULL,
        message VARCHAR(500) NOT NULL
        )";

    if(isset($_POST['user_name'])){
        if(!isset($_POST['user_name']) || !isset($_POST['user_phone']) || !isset($_POST['user_message'])) {
            die('We are sorry, please input to form');
        }
        $conname = $_POST['user_name'];
        $phone = $_POST['user_phone'];
        $message = $_POST['user_message']; 
        $error_message = "";
        $sql = "INSERT INTO message (name, phone, message) VALUES ('". $conname . "','" . $phone ."','" . $message . "')";
        if($conn->query($sql) === TRUE){
            echo "お問い合わせありがとうございました !";
        }
        else {
            echo "お問い合うことができません";
        }
    }
    $conn->close();
}
else($_POST["btn_back"]) {
	include 'index.php'
}
?>