<html>

<?php

$files = scandir("../../posts");
$toedit = $_GET['e'];

foreach( $files as $file )
{
    if( $file[0] != "." )
    {
        $path = "../../posts/" . $file;

        $lines = file($path);

        if( $toedit == "1" )
        {
            echo "<a href=\"edit.php?p=" . $file . "\">" .
            $lines[0] . " on " . $lines[1] . "</a><br />";
        }
        else
        {
            echo "<a href=\"delete.php?p=" . $file . "\">" .
            $lines[0] . " on " . $lines[1] . "</a><br />";
        }
    }
}

?>

</html>
