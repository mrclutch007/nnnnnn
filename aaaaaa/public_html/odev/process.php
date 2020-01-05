<?php

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password= stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = smysql_real_escape_string($password);


mysql_connect("localhost", "kutuphane", "kutuphane");
mysql_select_db("kutuphane1");

$result = mysql_query("select * from users where uidUsers = '$username' and pwdUsers='$password'")
or die("Failed to query database" .mysql_error());

$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password) {
  echo "Login success";
}
else {
  echo "failed";
}





 ?>
