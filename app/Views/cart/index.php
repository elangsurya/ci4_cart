<h3>Cart</h3>
<form method="post" action="<?= site_url('cart/update') ?>">
    <table border="1">
        <tr>
            <th>Action</th>
            <th>Id</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Quantity <input type="submit" value="Update"></th>
            <th>Sub Total</th>
        </tr>
        <?php if ($items) : ?>
            <?php foreach ($items as $item) : ?>
                <tr>
                    <td align="center">
                        <a href="<?= site_url('cart/remove/' . $item['id']) ?>">X</a>
                    </td>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td>
                        <img src="<?= base_url() ?>/images/<?= $item['photo'] ?>" width="120" height="100">
                    </td>
                    <td>$<?= $item['price'] ?></td>
                    <td>
                        <input type="number" min="1" value="<?= $item['quantity'] ?>" style="width: 50px" name="quantity[]">
                    </td>
                    <td>$<?= $item['price'] * $item['quantity'] ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="6" align="right">Total</td>
                <td>$<?= $total ?></td>
            </tr>
        <?php endif; ?>
    </table>
</form>
<a href="<?= site_url('mobile') ?>">Continue Shopping</a>