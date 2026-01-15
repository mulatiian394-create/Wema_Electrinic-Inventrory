<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Welcome, <?= $_SESSION['user']; ?></h2>
<p>Role: <?= $_SESSION['role']; ?></p>

<?php if ($_SESSION['role'] == 'admin'): ?>
    <a href="add_product.php">Add Product</a><br>
    <a href="users.php">Manage Users</a><br>
<?php endif; ?>

<a href="products.php">View Products</a><br>
<a href="pos.php">POS</a><br>
<a href="logout.php">Logout</a>
