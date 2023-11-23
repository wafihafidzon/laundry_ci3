<div class="container container-fluid" style="display: flex; flex-direction: row; gap: 20px">
  <?php foreach ($paket as $paket) : ?>
  <div class="card mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $paket->nama_paket; ?></h5>
      <p class="card-text"><?= $paket->jenis; ?></p>
      <p class="card-text">Rp.<?= $paket->harga; ?> / Paket</p>
      <a href="<?= base_url(); ?>dashboard/tambah_ke_keranjang/<?= $paket->id; ?>" class="btn btn-primary">Keranjang</a>
    </div>
  </div>
  <?php endforeach; ?>
</div>