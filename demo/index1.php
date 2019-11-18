<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    function readFileJson() {
        $dataJson=file_get_contents('data.json');
        return json_decode($dataJson);
    }
    $data = readFileJson();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $account = [
        'username' => $username,
        'password' => $password
    ];
    array_push($data,$account);
    $dataNew = json_encode($data);
    file_put_contents("data.json", $dataNew);
    var_dump($dataNew);
}
​
?>
​
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
    <input type="text" name="username">
    <input type="password" name="password">
    <button type="submit">Submit</button>
</form>
</body>
</html>