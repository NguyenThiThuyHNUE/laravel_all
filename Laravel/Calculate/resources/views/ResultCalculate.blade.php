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
<form method="get">
    @csrf
    <table>
        <tr>
            <td>So thu nhat</td>
            <td><input type="text" name="number1" value="{{$number1}}" ></td>
        </tr>
        <tr>
            <td>Phep tinh</td>
            <td><input type="text" name="calculate" value="{{$calculate}}"  ></td>
        </tr>
        <tr>
            <td>So thu hai</td>
            <td><input type="text" name="number2" value="{{$number2}}" ></td>
        </tr>
        <tr>
            <td>Ket qua</td>
            <td><input type="text" name="result" value="{{$result}}" ></td>
        </tr>
    </table>
</form>
</body>
</html>

