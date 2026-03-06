<?php
$conn = new mysqli("localhost", "root", "", "shop");

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
<title>My Shop</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<style>
.product-card{
border:1px solid #ddd;
padding:10px;
border-radius:10px;
text-align:center;
}

.product-card img{
width:100%;
height:150px;
object-fit:cover;
}
</style>

</head>

<body>

<div class="container mt-4">

<h2>My Shopee Style Store</h2>

<a href="create.php" class="btn btn-success mb-3">Add Product</a>

<div class="row">

<?php while($row = $result->fetch_assoc()) { ?>

<div class="col-md-3">
<div class="product-card">

<img src="images/<?php echo $row['image']; ?>">

<h5><?php echo $row['name']; ?></h5>

<p>₱<?php echo $row['price']; ?></p>

<a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>

<a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>

</div>
</div>

<?php } ?>

</div>
</div>

</body>
</html>