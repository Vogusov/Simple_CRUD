<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                    Update User: <b><?= $user['name'] ?></b>
                <?php else: ?>
                    Create User:
                <?php endif; ?>
            </h3>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="<?= $user['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $user['username'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="<?= $user['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?= $user['phone'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" class="form-control" name="website" value="<?= $user['website'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control-file" name="picture">
                </div>

                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
