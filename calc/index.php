<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<?php

require __DIR__ . '/functions.php';

if (isset($_POST['x'])){
    $x = (int)$_POST['x'];
} else $x = null;

if (isset($_POST['y'])){
    $y = (int)$_POST['y'];
} else $y = null;

if (isset($_POST['op'])){
    $op = (int)$_POST['op'];
} else $op = null;


$res = calculator ($x, $y, $op);

?>
<form action="/calc/index.php" method="post">
    <input type="number" name="x" value="<?php echo $x;?>">
    <input type="number" name="y"value="<?php echo $y;?>">
    <label>
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </label>
    <input type="submit" value="=">
    <?php echo $res;?>
</form>

</body>
</html>