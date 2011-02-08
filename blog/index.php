<html>

<center>
	<b>Blog</b>
</center>

<br>
<br>

<?php

$posts = scandir("posts", 1);

foreach( $posts as $post )
{
	if( $post[0] != "." )
	{
		if( strpos($post, ".post") != FALSE)
		{
			$filename = "posts/" . $post;
		
			$file = file($filename);
		
            echo "<h><b>" . $file[0] . "&nbsp&nbsp&nbsp";
            echo "</b></h>" . $file[1] . "<br>";
            echo "<pre>" . $file[2] . "</pre>";
            echo "<br><hr noshade>";
		}
	}
}
?>

</html>
