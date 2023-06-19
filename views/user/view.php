<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table>
            <form action="../../index.php" method="post">
                <?php foreach ($getUserFromModel as $one => $user): ?>
            <tr>
                <th><label>Product Name</label></th>
                <td><input type="text" name="product_name" <?php echo $user->product_name ?>></td>

            </tr>
            <tr>
                <th><label>Product Image</label></th>
                <td><input type="file" name="image_file" <?php echo $user->product_image?>></td>
            </tr>
            <tr>
                <th><label>SKU</label></th>
                <td><input type="number" name="sku" <?php echo $user->sku_input ?>></td>
            </tr>
            <tr>
                <th><label>Price</label></th>
                <td><input type="number" name="price" <?php echo $user->price ?>></td>
            </tr>
            <tr>
                <th><label>Manufacturing year</label></th>
                <td><input type="date" name="mfg" <?php echo $user->manufacture ?>></td>
            </tr>
            <tr>
                <th><label>Availability</label></th>
                <td><input type="number" name="availability" <?php echo $user->Available_stock ?>></td>
            </tr>
            </form>
        </table>
        <input type="hidden" name="targetId" value="<?php echo $user->id?>">>
        <button type="submit" value="edit" name="action">Update</button>
        <?php endforeach; ?>
    </div>
</body>
</html>
