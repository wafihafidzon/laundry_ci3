<div class="container container-fluid">
  <h2 class="mb-4">Edit Data Oulet</h2>
  <?php foreach ($outlet as $outlet) : ?>
  <form action="<?= base_url('outlet/update') ?>" method="post">
    <div class="m-2">
      <label for="outlet" class="form-label">Nama Outlet</label>
      <input type="hidden" name="id" value="<?= $outlet->id ?>">
      <input type="text" class="form-control" name="outlet" value="<?= $outlet->nama ?>">
    </div>
    <div class="m-2">
      <label for="outlet" class="form-label">Alamat Outlet</label>
      <input type="text" class="form-control" name="alamat" value="<?= $outlet->alamat ?>">
    </div>
    <div class="m-2">
      <label for="outlet" class="form-label">Telepon Outlet</label>
      <input type="number" class="form-control" name="telepon" value="<?= $outlet->tlp ?>">
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
  </form>
  <?php endforeach ?>
</div>