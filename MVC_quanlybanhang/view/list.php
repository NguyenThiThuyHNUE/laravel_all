
<h2>Them moi khach hang</h2>
<a href="./index.php?page=add">Them moi</a>
<table>
    <tr>
        <th>Stt</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
    </tr>
    <?php foreach ($customers as $key => $customer): ?>
    <tr>
        <td><?php echo ++$key?></td>
        <td><?php echo $customer->name ?></td>
        <td><?php echo $customer->email ?></td>
        <td><?php echo $customer->address ?></td>
        <td><a href="index.php?page=delete&id=<?php echo $customer->id; ?>">Delete</a></td>
        <td><a href="index.php?page=edit&id=<?php echo $customer->id; ?>">Update</a></td>
    </tr>
    <?php endforeach;?>
</table>