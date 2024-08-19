

<?= $this->section('content'); ?>
<h2 class="mb-4">Input Data Kandang</h2>



<form action="<?= base_url('form'); ?>" method="post">
    <?= csrf_field(); ?>
    
    <div class="mb-3">
        <label for="nama_kandang" class="form-label">Nama Kandang</label>
        <input type="text" class="form-control" id="nama_kandang" name="nama_kandang" required>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label for="induk_jantan" class="form-label">Induk Jantan</label>
            <input type="text" class="form-control" id="induk_jantan" name="induk_jantan" required>
        </div>
        <div class="mb-3 col-md-6">
            <label for="induk_betina" class="form-label">Induk Betina</label>
            <input type="text" class="form-control" id="induk_betina" name="induk_betina" required>
        </div>
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label for="produksi" class="form-label">Produksi</label>
            <input type="text" class="form-control" id="produksi" name="produksi" required>
        </div>
        <div class="mb-3 col-md-3">
            <label for="umur" class="form-label">Umur (Bulan)</label>
            <input type="number" class="form-control" id="umur" name="umur" required>
        </div>
        <div class="mb-3 col-md-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?= $this->endSection(); ?>
