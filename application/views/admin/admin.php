<div class="container container-fluid">
  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah_outlet">
    <i class="fas fa-plus"></i> Tambah User
  </button>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" class="col-1 text-center" s>#</th>
        <th scope="col" class="col-3">Nama</th>
        <th scope="col">Username</th>
        <th scope="col">Role</th>
        <th scope="col" colspan="2" class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      foreach ($user as $user): ?>
        <tr>
          <th scope="row" class="col-1 text-center">
            <?= $nomor++ ?>
          </th>
          <td>
            <?= $user->nama ?>
          </td>
          <td>
            <?= $user->username ?>
          </td>
          <td>
            <?= $user->role ?>
          </td>
          <td class="col-1 text-center p-2"><a href="<?= base_url('admin/edit/' . $user->id) ?>" class="btn btn-warning"><i class="fas fa-pen"></i></a></td>
          <td class="col-1 text-center p-2"><a href="<?= base_url('admin/hapus/' . $user->id) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_outlet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('admin/tambah')?>" method="post">
          <div class="m-2">
            <label for="outlet" class="form-label">Nama User</label>
            <input type="text" class="form-control" name="nama" required>
          </div>
          <div class="m-2">
            <label for="outlet" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
          </div>
          <div class="m-2">
            <label for="outlet" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
          </div>
          <div class="m-2">
            <label for="outlet" class="form-label">Role</label>
            <select class="form-select" aria-label="Default select example" name="role" required>
              <option value="admin">Admin</option>
              <option value="owner">Owner</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>