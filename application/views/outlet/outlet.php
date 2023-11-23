<div class="container container-fluid">
  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah_outlet">
    <i class="fas fa-plus"></i> Tambah Outlet
  </button>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" class="col-1 text-center" s>#</th>
        <th scope="col" class="col-3">Nama Outlet</th>
        <th scope="col">Alamat Outlet</th>
        <th scope="col">Telpon</th>
        <th scope="col" class="col-1 text-center">Pegawai</th>
        <th scope="col" class="col-1 text-center">Paket</th>
        <th scope="col" colspan="2" class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      foreach ($outlet as $outlet): ?>
        <tr>
          <th scope="row" class="col-1 text-center">
            <?= $nomor++ ?>
          </th>
          <td>
            <?= $outlet->nama ?>
          </td>
          <td>
            <?= $outlet->alamat ?>
          </td>
          <td>
            <?= $outlet->tlp ?>
          </td>
          <td class="col-1 text-center p-2">
            <a href="<?= base_url('user/pegawai/' . $outlet->id) ?>" class="btn btn-info p-2">Detail</i></a>
          </td>
          <td class="col-1 text-center p-2">
            <a href="<?= base_url('paket/detail_paket/') . $outlet->id ?>" class="btn btn-info p-2">Detail</i></a>
          </td>
          <td class="col-1 text-center p-2"><a href="<?= base_url('outlet/edit/' . $outlet->id) ?>" class="btn btn-warning"><i class="fas fa-pen"></i></a></td>
          <td class="col-1 text-center p-2"><a href="<?= base_url('outlet/hapus/' . $outlet->id) ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Outlet</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('outlet/tambah') ?>" method="post">
          <div class="m-2">
            <label for="outlet" class="form-label">Nama Outlet</label>
            <input type="text" class="form-control" name="outlet" required>
          </div>
          <div class="m-2">
            <label for="outlet" class="form-label">Alamat Outlet</label>
            <input type="text" class="form-control" name="alamat" required>
          </div>
          <div class="m-2">
            <label for="outlet" class="form-label">Telepon Outlet</label>
            <input type="number" class="form-control" name="telepon" required>
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