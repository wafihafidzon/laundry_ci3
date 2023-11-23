<div class="container container-fluid">
  <h2 class="mb-4">Edit Data User</h2>
  <form action="<?= base_url("user/") ?>update" method="post">
  <?= base_url("user/update")?>
  <?php foreach ($user as $user) : ?>
    <div class="m-2">
      <label for="outlet" class="form-label">Nama User</label>
      <input type="hidden" class="form-control" name="id" value="<?= $user->id ?>" readonly>
      <input type="text" class="form-control" name="nama" value="<?= $user->nama ?>" required>
    </div>
    <div class="m-2">
      <label for="outlet" class="form-label">Username</label>
      <input type="text" class="form-control" name="username" value="<?= $user->username ?>" required>
    </div>
    <div class="m-2">
      <label for="outlet" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" value="<?= $user->password ?>" required>
    </div>
    <div class="m-2">
      <label for="outlet" class="form-label">Role</label>
      <select class="form-select" aria-label="Default select example" name="role" required>
        <option selected hidden value="<?= $user->role ?>"><?= $user->role ?></option>
        <option value="admin">Admin</option>
        <option value="kasir">Kasir</option>
        <option value="owner">Owner</option>
      </select>
    </div>
    <div class="m-2">
      <label for="outlet" class="form-label">Outlet</label>
      <select class="form-select" aria-label="Default select example" name="outlet" required>
        <option selected hidden value="<?= $user->id_outlet ?>"><?= $user->outlet ?></option>
        <?php foreach ($outlet as $outlet) : ?>
        <option value="<?= $outlet->id ?>"><?= $outlet->nama ?></option>
        <?php endforeach ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Save changes</button>
</div>
</form>
<?php endforeach ?>
</div>