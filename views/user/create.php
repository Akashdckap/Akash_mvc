<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../style.css">
    <title>Register</title>
</head>
<body>
<h2>REGISTER FORM</h2>
    <form action="../../index.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <th><label>Product Category</label></th>
                <td>
                    <select name="product_name">
                        <option>Please select required brand</option>
                        <option>LG</option>
                        <option>VIVO</option>
                        <option>OPPO</option>
                        <option>POCO</option>
                        <option>Realme</option>
                        <option>Honour</option>
                        <option>Blackberry</option>
                        <option>SamSung</option>
                        <option>Redmi</option>
                        <option>Panasonic</option>
                    </select>
                </td>

            </tr>
            <tr>
                <th><label>Product Image</label></th>
                <td><input type="file" name="image_file" class="file"></td>
            </tr>
            <tr>
                <th><label>SKU</label></th>
                <td><input type="number" name="sku"></td>
            </tr>
            <tr>
               <th><label>Price</label></th>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <th><label>Manufacturing year</label></th>
                <td><input type="date" name="mfg"></td>
            </tr>
            <tr>
                <th><label>Availability</label></th>
                <td><input type="number" name="availability"></td>
            </tr>
        </table>
        <input type="hidden" name="action" value="create">
        <button type="submit">Create</button>
        <p><a class="entries" href="../../index.php">Entries</a></p>
    </form>
</body>
</html>