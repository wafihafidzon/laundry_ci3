<div class="container-fluid">
  <h4>Detail Pesanan <div class="btn btn-sm btn-success">No Invoice :
      <?= $invoice[0]->kode_invoice ?>
    </div>
  </h4>
  <table class="table table-bordered table-hover table-stripped">
    <tr>
      <th>No</th>
      <th>Outlet</th>
      <th>Nama Produk</th>
      <th>Jumlah Produk</th>
      <th>Status</th>
      <th>Harga Satuan</th>
      <th>Subtotal</th>
      <th>Aksi</th>
    </tr>

    <?php
      $no = 1; 
      foreach ($invoice as $inv) :
      $subtotal = $inv->qty * $inv->harga;
      @$total += $subtotal; 
      ?>
    <tr>
      <td>
        <?= $no++ ?>
      </td>
      <td>
        <?= $inv->nama ?>
      </td>
      <td>
        <?= $inv->nama_paket ?>
      </td>
      <td>
        <?= $inv->qty ?>
      </td>
      <td>
        <?= $inv->status_laundry ?>
      </td>
      <td>Rp.
        <?= number_format($inv->harga, 0, ',', '.') ?>
      </td>
      <td>Rp.
        <?= number_format($subtotal, 0, ',', '.') ?>
      </td>
      <td>
        <a href="<?= base_url('invoice/edit/') . $inv->id ?>" class="btn btn-sm btn-danger">Edit</a>
      </td>
    </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="6">
        Total
      </td>
      <td>Rp.
        <?= number_format($total, 0, ',', '.') ?>
      </td>
    </tr>
  </table>
</div>