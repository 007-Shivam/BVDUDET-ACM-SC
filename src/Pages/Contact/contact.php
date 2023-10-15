<?php 
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD',"");
define('DB_NAME','acm');

$link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
$name = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["text"];
$sql="INSERT INTO `posts` (`sr`, `name`, `email`, `text`) VALUES ('', '$name', '$email', '$text');";
$result= mysqli_query($link,$sql);
if($result)
  echo 'Thank you for your feedback. We\'ll appreciate!';
else
die("Something terrible happened. Please try again. ");
?>
