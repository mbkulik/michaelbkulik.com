<html>

<center>
    Edit Blog Post
</center>

<?php

$filename = $_GET['p'];

$path = "../../posts/" . $filename;

$lines = file($path);

echo "<form method=\"post\" action=\"new.php\">";
echo "<p>Title: <input name=\"title\" type=\"text\" value=\"" .
$lines[0] . "\" />";
echo "</p>";

echo "<p>";
echo "<textarea name=\"blogpost\" rows=\"40\" cols=\"80\">";
echo $lines[2];
    //echo "<textarea name=\"blogpost\" rows=\"40\" cols=\"80\" value=\"" 
    //. $lines[2] . "\">";
echo "</textarea>";
echo "</p>";

echo "<input type=\"submit\" value=\"Create Post\" />";
echo "</form>";
?>
</html>
