<?php
?>
<h2>Cap nhat thong tin khach hang</h2>
<form method="post">
    <table>
        <tr>
            <td>ID</td>
            <td><input type="hidden" name="id" value="<?php echo $customer ->id?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $customer ->name?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $customer ->email?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="<?php echo $customer ->address?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Update</button></td>
            <td><a href="index.php">Cancel</a></td>
        </tr>
    </table>
</form>
