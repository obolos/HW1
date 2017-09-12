<?php
$oper = "";
$result = "";
if(isset($_POST['a']) && isset($_POST['b'])){
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];


    $oper = $_POST['summ'];


    switch($oper) {
        case "+":
            $result = $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "*":
            $result = $a * $b;
            break;
        case "/":
            $result = $a / $b;
            break;
    }


}
else{
    $a = "";
    $b = "";
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calc</title>


</head>
<body>
<form action="#" method="POST">
    <input type="text" name="a" value="<?php echo $a; ?>">
    <label title="HW"><?php echo $oper; ?></label>
    <input type="text" name="b" value="<?php echo $b; ?>">
    <input type="button" value="=">
    <?php echo $result; ?>
    <br>
    <input type="submit" value="+" name="summ">
    <input type="submit" value="-" name="summ">
    <input type="submit" value="*" name="summ">
    <input type="submit" value="/" name="summ">


</form>

</body>
</html>
