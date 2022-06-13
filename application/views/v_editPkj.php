<div class="content-wrapper">
    <section class="content">
        <?php foreach ($pekerja as $pkj) : ?>

            <form action="<?= base_url('') . 'pekerja/update'; ?>" method="post">
                <div class="form-group">
                    <label for="nama_pkj">Nama Pekerja</label>
                    <input type="hidden" name="kta" id="kta" class="form-control" value="<?= $pkj->kta ?>">
                    <input type="text" name="nama_pkj" id="nama_pkj" class="form-control" value="<?= $pkj->nama_pkj ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="<?= $pkj->email ?>">
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <input type="text" name="jk" id="jk" class="form-control" value="<?= $pkj->jk ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $pkj->alamat ?>">
                </div>
                <div class="form-group">
                    <label for="bagian">NIK Pekerja</label>
                    <input type="text" name="bagian" id="bagian" class="form-control" value="<?= $pkj->bagian ?>">
                </div>
                <div>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>

        <?php endforeach; ?>
    </section>
</div>