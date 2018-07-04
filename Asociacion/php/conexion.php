<?php
function Conectar()
{
	if (!($cnn = mysql_connect ("localhost", "root", "")))
	{
	 exit();
	}
	if (! mysql_select_db("afa",$cnn))
	{
		exit();
	}
return $cnn;
}


?>