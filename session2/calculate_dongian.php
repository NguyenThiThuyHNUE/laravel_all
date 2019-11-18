<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    function tong($number1, $number2)
{
    return $tong = $number1 + $number2;
}

function hieu($number1, $number2)
{
    return $hieu = $number1 - $number2;
}

function tich($number1, $number2)
{
    return $tich = $number1 * $number2;
}

function thuong($number1, $number2)
{
    return $thuong = $number1 / $number2;
}
try{
   $result=$number1/$number2;
    throw new Exception($result);
}catch (Exception $e){

        echo $e->getMessage();
}


?>
<form method="post">
    <table>
        <tr>
            <td>So thu nhat:</td>
            <td><input type="text" name="number1"  ></td>
        </tr>
        <tr>
            <td>So thu hai:</td>
            <td><input type="text" name="number2" ></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit"> Submit</button>
            </td>
        </tr>
        <tr>
            <td> Tong:</td>
            <td><input type="text" name="tong" value="<?php echo tong($number1,$number2) ?>" "></td>
        </tr>
        <tr>
            <td> Hieu:</td>
            <td><input type="text" name="hieu" value="<?php echo hieu($number1,$number2) ?>" "></td>
        </tr>
        <tr>
            <td>Tich:</td>
            <td><input type="text" name="tich" value="<?php echo tich($number1,$number2) ?>" "></td>
        </tr>
        <tr>
            <td>Thuong:</td>
            <td><input type="text" name="thuong" value="<?php echo thuong($number1,$number2) ?>" "></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php

?>
