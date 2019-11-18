<?php
$num1 = $_POST["canh1"];
$num2 = $_POST["canh2"];
$num3 = $_POST["canh3"];
function check($num1, $num2, $num3)
{
    if ($num1 + $num2 > $num3 && $num1 + $num3 > $num2 && $num2 + $num3 > $num1) {
        if ($num1==$num2&&$num2==$num3) {
            echo " tam giac deu";
            return;
        }elseif ($num1 == $num2 || $num2 == $num3 || $num3 == $num1){
            echo "tam giac can";
            return;
        }elseif ($num3*$num3==$num1*$num1+$num2*$num2 ||$num1*$num1+$num3*$num3==$num2*$num2 ||$num2*$num2+$num3*$num3==$num1*$num1  ){
            echo " tam giac vuong";
            return;
        }elseif ($num1*$num1+$num2*$num2==$num3*$num3 ||$num1*$num1+$num3*$num3==$num2*$num2 ||$num2*$num2+$num3*$num3==$num1*$num1 && ($num1 == $num2 || $num2 == $num3 || $num3 == $num1)){
            echo " tam giac vuong can";
            return;
        }elseif($num3*$num3<$num1*$num1+$num2*$num2 ||$num1*$num1+$num3*$num3>$num2*$num2 ||$num2*$num2+$num3*$num3>$num1*$num1){
            echo " tam giác tù";
            return;
        }else{
            echo " tam giac nhọn";
            return;
        }
    } else {
        echo " Khong la tam giac";
        return;
    }
}

?>
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

<form method="post">
    <table>
        <tr>
            <td> Nhap canh thu nhat:</td>
            <td><input type="text" name="canh1" value="<?php echo $num1 ?>"></td>
        </tr>
        <tr>
            <td> Nhap canh thu hai:</td>
            <td><input type="text" name="canh2" value="<?php echo $num2 ?>"></td>
        </tr>
        <tr>
            <td> Nhap canh thu ba:</td>
            <td><input type="text" name="canh3" value="<?php echo $num3 ?>"></td>

        </tr>

        <tr>
            <td>
                <button type="submit"> Submit</button>
            </td>
            <td><input value="<?php check($num1, $num2, $num3) ?>"></td>


        </tr>

    </table>
</form>

</body>
</html>

