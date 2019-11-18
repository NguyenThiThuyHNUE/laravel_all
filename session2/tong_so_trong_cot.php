<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tinh tong cac so o 1 cot xac dinh</title>
</head>
<body>
<?php
$arr=[[1,2,3],
    [4,5,6],
    [7,8,9]];
$input=$_POST["in"];
function sum($arr,$input){
    $Sum=0;
    if($input<count($arr)){
        for ($i=0; $i<count($arr); $i++){
            for ($j=0; $j<count($arr[$i]);$j++){
                if ($j==$input){
                    $Sum+=$arr[$i][$j];
                }
            }
        }echo $Sum;
    }else{
        echo "so dong khong hop le";
    }
}


?>
<form method="post">
    <p> Tinh tong cot thu: </p>
    <input name="in" type="text" value="<?php echo $input?>">
    <button type="submit" " >Tong</button><br><br>
    <p> <?php sum($arr,$input) ?></p>
</form>


</body>
</html>

