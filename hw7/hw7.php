<?php
$userName = $_GET['username'];
$passWord = $_GET['password'];

echo $userName;
echo '<br />';
echo $passWord;

$dsn = 'mysql:dbname=database;host=localhost;query=SET NAMES utf8';
$user = 'root';
$psw = '';
try {
    $dbh = new PDO($dsn,$user,$psw);
}catch (PDOException $e) {
    echo $e->getMessage();
}

$sql1 = 'INSERT INTO uss (username,password) VALUES(?,?)';
$sth = $dbh->prepare($sql1);
$sth->execute([$userName,$passWord]);

$sql2 = 'SELECT * FROM uss';
$sth = $dbh->query($sql2);
$flag = 0;
foreach ($sth as $key => $value) {
    if (($value['username']) == $userName && $value['password'] == $passWord ) {
        echo "<script>alert('Landing success')</script>";
        $flag = 0;
    }
    echo '<br/>';
}
if ($flag != 0) {
    echo "<script>alert('Landing fail')</script>";
}
?>