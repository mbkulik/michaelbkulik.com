<html>

<DIV ALIGN=CENTER>
	<b>Blog</b>
</DIV>

<br>
<br>

<?php

$posts = scandir("posts");

foreach( $posts as $post )
{
	echo $post . "<br>";
}


?>

</html>