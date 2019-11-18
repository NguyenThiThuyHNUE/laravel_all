<?php
if (isset($message)){
    echo "<p class = 'alert-into'>$message</p>";
}
?>

<h1>Them moi khach hang</h1>

<form method="post">
    <table>
        <tr>
            <td>Ten khach hang</td>
            <td><input type="text" name="name" placeholder="Nhap ten"></td>
        </tr>
        <tr>
            <td>Emal khach hang</td>
            <td><input type="text" name="email" placeholder="Nhap email"></td>
        </tr>
        <tr>
            <td>Dia chi khach hang</td>
            <td><input type="text" name="address" placeholder="Nhap dia chi"></td>
        </tr>
        <tr>
            <td><button type="submit">Them moi</button></td>
            <td><button >Huy</button></td>
        </tr>

    </table>
</form>