<h3>Mobile List</h3>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Photo</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <?php if ($mobiles) : ?>
        <?php foreach ($mobiles as $mobile) : ?>
            <tr>
                <td><?= $mobile['id'] ?></td>
                <td><?= $mobile['name'] ?></td>
                <td><?= $mobile['description'] ?></td>
                <td>
                    <img src="<?= base_url() ?>/images/<?= $mobile['photo'] ?>" width="120" height="100">
                </td>
                <td><?= $mobile['price'] ?></td>
                <td align="center"><a href="<?= site_url('cart/buy/' . $mobile['id']) ?>">Buy</a></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>

</table>