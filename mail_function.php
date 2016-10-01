<html>
<head><title>Mail</title><link rel="stylesheet" type="text/css" href="css/main.css"></head>
<body>
<?php

// mailfunction

$name=$_POST["nameperson"];
$mail=$_POST["namemail"];
$subject=$_POST["subject"];
$msg=$_POST["message"];
$mymail="info@richineljarbandhan.nl";
$DATA="$name | $mail\r\n$msg";
mail($mymail, "Portfolio", $DATA);

// forward
echo "Ik heb uw e-mail in goede orde ontvangen! Ik zal zo gauw mogelijk contact met u opnemen! <br><br>Met vriendelijke groet,<br> Richinel";
header('Refresh: 10; url=index.php'); 

?>

<a href="index.php">Direct terugkeren</a>

</body>
</html>