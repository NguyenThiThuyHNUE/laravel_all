<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST['submit'])){
        if (!empty($_POST['nam'])){
            $nam=$_POST['nam'];
        }
    }
};
function checkCentury($nam){
  $number= $nam/100;
return floor($number+1);
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
            <td>Nhap nam: </td>
            <td><input name="nam"ame type="text" value="<?php echo $nam;?>"> </td>
            <td><button type="submit" name="submit" >Submit</button> </td>
        </tr>
        <tr>
            <td>Thế kỉ:  </td>
            <td><input type="text" value="<?php echo checkCentury($nam);?>"> </td>
        </tr>
    </table>
</form>
</body>
</html>


<!---->
<!--function centuryFromYear($year) {-->
<!--if($year<=100){-->
<!--return 1;-->
<!--}-->
<!--else {return ceil($year/100);}-->
<!--}-->

