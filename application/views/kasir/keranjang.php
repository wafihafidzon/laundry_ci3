<div class="container container-fluid">
  <h4>Keranjang Belanja</h4>
  <table class="table table-bordered table-stripped table-hover">
    <tr>
      <th>No</th>
      <th>Nama Paket</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Subtotal</th>
      <th class="text-center">Action</th>
    </tr>

    <?php
    $no = 1;
    foreach ($this->cart->contents() as $items): ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $items['name'] ?></td>
      <td><?= $items['qty'] ?></td>
      <td align="right">Rp. <?= number_format($items['price'], 0, ',', '.') ?></td>
      <td align="right">Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></td>
      <td align="center"><a href="<?= base_url() . 'dashboard/hapus_keranjang/' . $items['rowid'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></a></td>
    </tr>

    <?php endforeach; ?>
    <tr>
      <td colspan="4">TOTAL</td>
      <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?></td>
    </tr>
  </table>
  <button class="btn btn-success" onclick="window.location.href='<?= base_url('dashboard/pembayaran_non_member') ?>'">Pembayaran</button>
</div>