<html>

<?php

date_default_timezone_set('America/New_York'); 

$title = $_POST['title'];
$blogpost = $_POST['blogpost'];
$date = date("m-t-Y_H:i");


$filepath = "../posts/" . $date . ".post";

$filehandle = fopen($filepath, 'x') or die('Error Opening File!');
fwrite($filehandle, "<h><b>" . $title . "&nbsp&nbsp&nbsp</b></h>\n");
fwrite($filehandle, $date . "<br>\n");
fwrite($filehandle, "<pre>" . $blogpost . "</pre><br>\n");
fclose($filehandle);

?>

<br>
Post Created
<br>
<br>

<a href="../">Continue</a>

<html>