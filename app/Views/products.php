<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/save" method="post">
            <label>ID</label>
            <input type="hidden" name= "id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>"   >
            <br>
            <label>UPC</label>
            <input type="text" name= "upc" placeholder="UPC" value="<?= isset($pro['upc']) ? $pro['upc'] : '' ?>"   >
            <br>
            <label>Name</label>
            <input type="text" name= "name" placeholder="Name" value="<?= isset($pro['name']) ? $pro['name'] : '' ?>" >
            <br>
            <label>Quantity</label>
            <input type="text" name= "quantity" placeholder="Quantity" value="<?= isset($pro['quantity']) ? $pro['quantity'] : '' ?>" >
            <br>
            <label>Price</label>
            <input type="text" name= "price" placeholder="Price" value="<?= isset($pro['price']) ? $pro['price'] : '' ?>" >
            <br>
            <label>Expiry Date</label>
            <input type="date" name= "expiry_date" value="<?= isset($pro['expiry_date']) ? $pro['expiry_date'] : '' ?>">
            <br>
            <label>Created</label>
            <input type="date" name= "created_at" value="<?= isset($pro['created_at']) ? $pro['created_at'] : '' ?>">
            <br>
            <input type="submit" value="save">
        </form>

    <h1>Products</h1>
    <table border ="1">
        <tr>
            <th>ID</th>
            <th>UPC</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Expiry Date</th>
            <th>Created</th>
            <th>Action</th>
        </tr>
        <?php foreach($product as $pr):?>
            <tr>
                <td><?= $pr ['id'] ?></td>
                <td><?= $pr ['upc'] ?></td>
                <td><?= $pr ['name'] ?></td>
                <td><?= $pr ['quantity'] ?></td>
                <td><?= $pr ['price'] ?></td>
                <td><?= $pr ['expiry_date'] ?></td>
                <td><?= $pr ['created_at'] ?></td>
                <td><a href="/delete/<?= $pr['id'] ?>">Delete</a> || <a href="/edit/<?= $pr['id'] ?>">Update</a></td>
            </tr>
        
        <?php endforeach; ?>
    </table>
</body>
</html>