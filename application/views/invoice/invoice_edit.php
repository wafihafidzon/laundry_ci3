<div class="container container-fluid">
  <form action="<?= base_url('invoice/update')?>" method="post">
    <input type="hidden" name="id" value="<?= $invoice[0]->id_transaksi ?>">
    <div class="m-2">
      <label for="outlet" class="form-label">Status pembayaran</label>
      <select class="form-select" aria-label="Default select example" name="status_pembayaran" required>
        <option selected hidden><?= $invoice[0]->status_pembayaran ?></option>
        <option value="Dibayar">Dibayar</option>
        <option value="Belum Dibayar">Belum Dibayar</option>
      </select>
      <label for="outlet" class="form-label">Status Laundry</label>
      <select class="form-select" aria-label="Default select example" name="status_laundry" required>
        <option selected hidden><?= $invoice[0]->status_laundry ?></option>
        <option value="Baru">Baru</option>
        <option value="Proses">Proses</option>
        <option value="Selesai">Selesai</option>
        <option value="Diambil">Diambil</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Save changes</button>
</div>
</form>
</div>