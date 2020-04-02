<?php
//Get the Form Values
if (isset($_POST['name']) {
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])){
        return FALSE;
    }else{
    //Make Variables Safe
    $toEmail = "greenshelby@gmail.com";
    $mailHeaders = "From: " . $_POST["your_name"] . "<". $_POST["your_email"] .">\r\n";
    if(mail($toEmail, $_POST["email"], $mailHeaders)) {
    echo"<p class='success'>Thank you!</p>";
    } else {
    echo"<p class='Error'>Problem in signing up.</p>";
    }
    }
    }else {
   header('Location: index.html');
}
?>
