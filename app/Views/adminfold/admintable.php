<div class="container mt-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Price</th>
                <th>Category</th>
                <th>Quantity</th>
                <th></th>
                <th>Action</th>
            </tr>
        </thead>
         <tbody>
                <?php foreach ($prod as $us): ?>
                    <tr data-category="<?= $us['category'] ?>">
                        <td><?= $us['id'] ?></td>
                        <td><?= $us['name'] ?></td>
                        <td><?= $us['description'] ?></td>
                        <td><img src="<?= $us['image'] ?>" alt="Null Image" width="100" border-radius="20"></td>
                        <td><?= $us['price'] ?></td>
                        <td><?= $us['category'] ?></td>
                        <td><?= $us['quantity'] ?></td>
                        <td><?= $us['user_id'] ?></td>
                        <td>
                            <a href="/edit/<?= $us['id']?>" class="btn btn-warning">Edit</a>
                            <a href="/delete/<?= $us['id']?>" class="btn btn-danger">Delete</a>
                        </td>  
                    </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
</div>