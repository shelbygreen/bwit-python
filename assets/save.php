<?php
$toEmail = "greenshelby@gmail.com";
$mailHeaders = "From: " . $_POST["your_email"] .">\r\n";
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
