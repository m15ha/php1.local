<?php session_start();
//require_once __DIR__ . '/users.php';
require_once __DIR__ . '/Classes/Item.php';
//setcookie('username', 'admin');
//setcookie('secret', md5('10.10.2010'));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-1</title>
</head>
<body>

<?php // if (isset($_GET['name'])){
//    $name=$_GET['name'];
//} else {
//    $name=null;
//}
//?>
<!---->
<!--Hello, --><?php //echo $_GET ['name']; ?>
<!---->
<?php
//$x = 13;
//if ($x > 11) {
//    echo '> 11';
//} elseif ($x < 11) {
//    echo '< 11';
//} else {
//    echo '=' . $x;
//}
//?>
<!---->
<?php
//
//include __DIR__ . '/functions.php';
//
//$z = sum(4, 3);
//echo $z;
//
//
//$x = [1, 2, 3, 4];
//?>
<!---->
<!--<table border="1">-->
<!--    --><?php
//    $y = [
//        'a' => 1,
//        'b' => 2,
//        'c' => 3,
//        'd' => 4,
//    ];
//
//    foreach ($y as $key => $value) {
//        ?>
<!--        <tr><td>-->
<!--                --><?php // echo $value; ?>
<!---->
<!--            <th>-->
<!--                --><?php // echo $key; ?>
<!--            </th></td></tr>-->
<!--        --><?php
//    }
//
//    ?>
<!--</table>-->
<!---->
<!--<form action="/send.php" method="POST">-->
<!--    Login: <input type="text" name="login"><br>-->
<!--    Password: <input type="password" name="password"><br>-->
<!--    <button type="submit"> Send </button>-->
<!--</form>-->
<!---->
<?php
//$i = 0;
//while  ($i<10){
//    $i=$i++;
//    echo $i;
//}
//
//?>

<!--<form action="/upload.php" method="post" enctype="multipart/form-data">-->
<!--<input type="file" name="picture">-->
<!--    <button type="submit">SEND</button>-->
<!--</form>-->

<?php
//$count = $_SESSION['count'] ?? 0;
//$count++;
//$_SESSION['count'] = $count;
//echo $count
//?>

<?php

$table1 = new Table;
$table1->price = 1000;
echo $table1->show();
echo '<br>';
$table2 = new Table;
$table2->price = 2000;
echo $table2->show();

$malm = new Cabinet(6);
$malm->dors = 4;
$malm->price = 3000;
echo '<br>' . $malm->show();

?>
</body>
</html>
