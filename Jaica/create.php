<?php
$conn = new mysqli("localhost","root","","shop");

if(isset($_POST['submit'])){

$name = $_POST['name'];
$price = $_POST['price'];
$desc = $_POST['description'];

$conn->query("INSERT INTO products(name,price,description)
VALUES('$name','$price','$desc')");

header("Location: index.php");

}
?>

<form method="POST">

Name: <input type="text" name="name"><br>

Price: <input type="text" name="price"><br>

Description:<br>
<textarea name="description"></textarea><br>

<button name="submit">Add Product</button>

</form>