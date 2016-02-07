<?php

    $servername = "ed-kim.com";
    $username = "root";
    $password = "eddykim1";
    $dbname = "OxfordClub";
    $email = $_POST['email'];
    $promoCode = $_POST['promoCode'];

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `server1` (email, promoCode) VALUES ('$email','$promoCode')";
    
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . " " . $email . " " . $promoCode . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>