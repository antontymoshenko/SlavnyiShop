
<?php
$post=$_POST;
var_dump($post["name"]);
//$db = mysql_connect ('localhost' , 'root' , 'pass');
//$mess = mysql_select_db ('project1' , $db);
//echo "<script type='text/javascript'>alert ('Вы успешно зарегистрировались!');</script>";


//подключиться к базе "mary" на хосте "sheep", используя имя пользователя и пароль


try {
   $dbconn3 = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=112112");
   echo "PDO connection object created";
}
catch(PDOException $e)
{
      echo $e->getMessage();
}

$result = mysql_query("SELECT \"lena\" FROM \"Customer\"",$db);
$myrow = mysql_fetch_array($result);

if (!empty($myrow['id'])) {print "Логин занят";}
?> 