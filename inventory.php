<!DOCTYPE html>
<html>
<head>
    <title>Inventory</title>
</head>
<body>

<h2>Wema Inventory</h2>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Product</th>
    <th>Price</th>
    <th>Stock</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td><?= $row['price']; ?></td>
    <td><?= $row['quantity']; ?></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>
