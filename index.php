<?php
require 'users.php';
$users = getUsers();

include __DIR__ . '/partials/header.php';
?>

<div class="container">
    <table class="table">

        <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Website</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <?php if (isset($user['extension'])): ?>
                    <img src="<?= "users/images/{$user['id']}.{$user['extension']}" ?>" alt="a picture of user" width="60px">
                    <?php endif; ?>
                </td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['username'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['phone'] ?></td>
                <td>
                    <a href="http://<?= $user['website'] ?>"><?= $user['website'] ?></a>
                </td>
                <td>
                    <a href="view.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="update.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
                    <a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>

        <?php include __DIR__ . '/partials/footer.php'; ?>
</div>
