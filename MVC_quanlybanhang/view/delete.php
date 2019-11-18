<h1>Ban muon chac chan xoa khach hang nay</h1>
<h3><?php echo $customer->name;?></h3>
<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $customer->id ?>">
    <button type="submit"  >Delete</button>
    <a href="index.php">Cancel</a>
</form>
