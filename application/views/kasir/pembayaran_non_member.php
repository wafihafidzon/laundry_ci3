<div class="container container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="btn btn-sm btn-success">
        <?php
        $grand_total = 0;
        if ($keranjang = $this->cart->contents()) {
          foreach ($keranjang as $item) {
            $grand_total = $grand_total + $item['subtotal'];
          }
          echo "<h5>Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.');
        
        ?>
      </div>

      <h3>Silahkan Lakukan pembayaran</h3>
        <form method="post" action="<?= base_url('dashboard/proses_pembayaran')?>">
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" class="form-control">
      </div>
      <div class="form-group">
        <label>Alamat Lengkap</label>
        <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
      </div>
      <div class="form-group">
        <label>No. Telepon</label>
        <input type="text" name="no_telpon" placeholder="Masukkan No Telpon" class="form-control">
      </div>
      <button class="btn btn-sm btn-primary" type="submit">Pesan</button>
      </form>
      <?php
        } else {
          echo "Keranjang Belanja Anda Masih Kosong";
        }
        ?>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>