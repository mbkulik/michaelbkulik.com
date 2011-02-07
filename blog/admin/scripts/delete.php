<html>

<?php

$filename = $_GET['p'];

$path = "../../posts/" . $filename;

unlink($path);

?>

<br />
Post Deleted
<br />
<br />
<a href="../">Continue</a>

</html>
