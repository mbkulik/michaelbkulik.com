<html>

<?php

date_default_timezone_set('America/New_York'); 

$title = $_POST['title'];
$blogpost = $_POST['blogpost'];
$date = date("m-d-Y_H:i");


$filepath = "../../posts/" . $date . ".post";

$filehandle = fopen($filepath, 'x') or die('Error Opening File!');
fwrite($filehandle, $title . "\n");
fwrite($filehandle, $date . "\n");
fwrite($filehandle, $blogpost . "\n");
fclose($filehandle);

?>

<br>
Post Created
<br>
<br>

<a href="../">Continue</a>

<html>
