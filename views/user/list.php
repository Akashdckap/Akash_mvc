<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../style2.css">
    <title>Document</title>
</head>
<body>
<h2>DATABASE STORAGE</h2>
    <table>
        <tr>
            <th>Product id</th>
            <th>Product Name</th>
            <th>Product Image</th>
            <th>SKU</th>
            <th>Price</th>
            <th>Manufacture</th>
            <th>Availability</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        <?php foreach($getdetails as $details => $users): ?>
        <tr>
            <td><?php echo $users->id  ?></td>
            <td><?php echo $users->product_name ?></td>
            <td><img src="<?php echo $users->product_image?>"></td>
            <td><?php echo $users->sku_input ?></td>
            <td><?php echo $users->price ?></td>
            <td><?php echo $users->manufacture ?></td>
            <td><?php echo $users->Available_stock ?></td>
            <td><form action="../../index.php" method="post">
                    <input type="hidden" name="delete" value="<?php echo $users->id?>">
                    <button value="delete" name="action">DELETE</button>
                </form>
            </td>
            <td>
                <form action="../../index.php" method="post">
                    <input type="hidden" name="edit" value="<?php echo $users->id?>">
                    <button value="edit" name="action">Edit</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
<p><a href="../../views/user/create.php">Back</a></p>
</body>
</html>