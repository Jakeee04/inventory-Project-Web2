<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Inventory Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
    body {
        padding: 0px;
        margin: 0px;
        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
        text-align:center;
    }
    table {
        border-collapse: fixed;
        width: 100%;
    }
    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #F27BBD;
    }
    header {
        background-color: #C65BCF;
        padding: 5px;
    }
    a {
        text-decoration: none;
    }
    h2 {
        padding: 10px 20px; 
        font-size: 30px;
    }
    .btn {
        border: none;
        color: black;
        border-radius: 5px;
        width: 100px;
        margin: 10px;
        padding: 8px 12px;
        font-size: 12px;
        cursor: pointer;
    }
    .success {
        background-color: #04AA6D;
    }
    .success:hover {
        background-color: #46a049;
    }
    .info {
        background-color: #2196F3;
    }
    .info:hover {
        background: #0b7dda;
    }
    .danger {
        background-color: #f44336;
    }
    .danger:hover {
        background: #da190b;
    }
    .default {
        background-color: #e7e7e7; 
        color: black;
    }
    .default:hover {
        background: #ddd;
    }
    
    </style>
</head>
<body>
<header>
    <a href="login.php" style="float: right; background-color: green; border-radius: 10px; font-size: 15px; list-style: none; text-decoration: none; color: white; font-size: 25px; padding:10px 20px;">Log in</a>
    <h1 style="padding: 0px 50px; text-align: center;">Inventory Management</h1>
</header>
<br>
<h2>Product Inventory</h2>
<button class="btn success"><a href="register.php">ADD</a></button>
<table>
    <tr>
        <th>Product Name</th>
        <th>Product ID</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Supplier</th>
        <th>Purchase Date</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
    $query_data = "SELECT * FROM tbl_products";
    $get_data = mysqli_query($link, $query_data);
    $count = mysqli_num_rows($get_data);
    if ($count >= 1) {
        while ($row = mysqli_fetch_assoc($get_data)) {
    ?>
    <tr>
        <td><?=$row['ProductName'];?></td>
        <td><?=$row['ProductID'];?></td>
        <td><?=$row['Category'];?></td>
        <td><?=$row['Quantity'];?></td>
        <td><?=$row['Price'];?></td>
        <td><?=$row['Supplier'];?></td>
        <td><?=$row['PurchaseDate'];?></td>
        <td><a href="edit.php?changedata=<?php echo $row['id']; ?>" class="btn info">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn danger">Delete</a></td>
 <?php
 }
}

 ?>
</table>
</body>
</html>