<?php

echo "entrei no config<br/>";
spl_autoload_register(function($class_name){

	echo "$class_name <br/>";
	$filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";

	if (file_exists(($filename))){
		echo "$filename<br/>";
		require_once($filename);
	}

});

?>