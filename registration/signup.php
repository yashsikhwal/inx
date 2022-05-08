<?php
    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $connection = mysqli_connect($servername,$username);

    //check connection
    if($connection)
        echo "Connection Established";
    else
        echo "Connection Failed";

    //get value from html    
    $name = $_POST['name'];
    $email = $_POST['email'];

    //adding value to the database
    mysqli_select_db($connection,'newsltr');
    $data = "INSERT INTO info(name,email) VALUES('$name','$email')"; //query

    //query forward
    mysqli_query($connection,$data);
    header('location:signup_succ.html');
?>