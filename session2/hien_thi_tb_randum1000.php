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
$arr = [];
function rundom()
{
    return rand(0, 100);
}

for ($i = 0; $i < 100; $i++) {
    array_push($arr, rundom());
}

$input = $_POST["in"];
function Index($arr, $input)
{
    for ($j = 0; $j < count($arr); $j++) {
        if ($j == $input) {
            echo $arr[$j];
        }
    }
}


?>
<form method="post">
    <p> Nhap index: </p>
    <input type="text" name="in" value="<?php echo $input ?>">
    <button type="submit">submit</button>
    <p> Ket qua: <?php Index($arr, $input); ?> </p>
</form>
</body>
</html>
