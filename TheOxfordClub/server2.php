<?php
    $to      = $_POST['email'];
    $promoCode = $_POST['promoCode'];
    $subject = 'News letter';
    $message = 'hello, your promo code was: ' . $promoCode . '. ' . 'your email is: ' . $to;
    $headers = 'From: ajkim41@gmail.com';

    $mail = mail($to, $subject, $message, $headers);
    if($mail){
      echo "Thank you for using our mail form " . $to. " ". error_get_last();
    }else{
      echo "Mail sending failed."; 
    };

?>