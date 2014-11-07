$_COOKIE
<?php
		 $name = "test";
 		 $value = 45;
 		 $expire = time() + (60*60*24*7*2);

 		// setcookie($name, $value, $expire); 
		// setcookie("teine", "tere", time() + 30);
/*echo time() +3600; */
//setcookie($name);
//setcookie($name);
//setcookie($name, null);
setcookie($name, $value, time() -3600);


		?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> praks 8 </title>


</style>
</head>
<body> 
<pre>
<?php 
print_r($_COOKIE);
if (isset($_COOKIE["test"])) {
	$test = $_COOKIE["test"];
} else {
	$test= "";
}
$test =isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";


//$test = $_COOKIE["test"];
echo $test;
?>	
</pre>	
</body>
</html>