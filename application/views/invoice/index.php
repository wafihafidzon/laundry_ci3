<div class="container-fluid">
  <h4>Invoice Laundry</h4>

  <table class="table table-bordered table-hover table-stripped">
    <tr>
      <th>Id Invoice</th>
      <th>Nama Pemesan</th>
      <th>Status Pemesanan</th>
      <th>Tanggal Pemesanan</th>
      <th>Aksi</th>
    </tr>
    <?php foreach ($invoice as $inv) :?>
    <tr>
      <td>
        <?= $inv->kode_invoice ?>
      </td>
      <td>
        <?= $inv->nama ?>
      </td>
      <td>
        <?= $inv->status_laundry ?>
      </td>
      <td>
        <?= $inv->tgl_bayar ?>
      </td>
      <td>
        <a href="<?= base_url('invoice/detail/'.$inv->id) ?>"><div class="btn btn-sm btn-primary">Detail</div></a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>