<?php
if(isset($_POST['a']) && isset($_POST['b'])){
    $result = $_POST['a'] + $_POST['b'];
} else
{
    $result = "";
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
<form action="#" method=""POST>
    <input type="text" name="a">
    <input type="text" name="b">
    <input type="submit" value="=">
    <?php echo $result; ?>
</form>

</body>
</html>
