<div class="container container-fluid">
  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambah_outlet">
    <i class="fas fa-plus"></i> Tambah User
  </button>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col" class="col-1 text-center">#</th>
        <th scope="col" class="col-3">Nama Paket</th>
        <th scope="col">Jenis</th>
        <th scope="col">Harga</th>
        <th scope="col" colspan="2" class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      foreach ($paket as $paket): ?>
      <tr>
        <th scope="row" class="col-1 text-center">
          <?= $nomor++ ?>
        </th>
        <td>
          <?= $paket->nama_paket ?>
        </td>
        <td>
          <?= $paket->jenis ?>
        </td>
        <td>
          <?= $paket->harga ?>
        </td>
        <td class="col-1 text-center p-2"><a href="<?= base_url('paket/edit/' . $paket->id) ?>" class="btn btn-warning"><i
              class="fas fa-pen"></i></a></td>
        <td class="col-1 text-center p-2"><a href="<?= base_url('paket/hapus/' . $paket->id) . "/" . $id_outlet?>" class="btn btn-danger"><i
              class="fas fa-trash"></i></a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Paket</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('paket/tambah')?>" method="post">
          <input type="hidden" name="id_outlet" value="<?= $id_outlet ?>">
          <div class="m-2">
            <label for="outlet" class="form-label">Nama Paket</label>
            <input type="text" class="form-control" name="nama_paket" required>
          </div>
          <div class="m-2">
            <label for="outlet" class="form-label">Jenis Paket</label>
            <select class="form-select" aria-label="Default select example" name="jenis" required>
              <option value="Kiloan">Kiloan</option>
              <option value="Selimut">Selimut</option>
              <option value="Bed Cover">Bed Cover</option>
              <option value="Kaos">Kaos</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          <div class="m-2">
            <label for="outlet" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" required>
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