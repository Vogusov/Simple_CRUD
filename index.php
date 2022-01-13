<?php
require 'users.php';
$users = getUsers();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<table>
    <thead>
    <tr>
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
        <td><?php echo $user['name'] ?></td>
        <td><?php echo $user['username'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td><?php echo $user['phone'] ?></td>
        <td><?php echo $user['website'] ?></td>
        <td>
            <a href="view.php?id" class="btn btn-sm btn-outline-info">View</a>
            <a href="update.php?id" class="btn btn-sm btn-outline-secondary">Update</a>
            <a href="delete.php?id" class="btn btn-sm btn-outline-danger">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
