<html>

<DIV ALIGN=CENTER>
	<b>Blog</b>
</DIV>

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
		
			$file = file_get_contents($filename);
		
			echo $file;
			echo "<br>";
			echo "<br>";
		
		}
	}
}


?>

</html>