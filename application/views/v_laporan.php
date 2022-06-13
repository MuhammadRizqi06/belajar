<div class="content-wrapper">
    <section class="content-header">
        <div><?= $this->session->flashdata('message'); ?>
        </div>
        <div>
            <h1>Data Pekerja</h1>
            <ol class="breadcrumb">
                <li><a href="<?= base_url('') . 'admin/index' ?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li class="active">Laporan Transaksi</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <table class="table">

            <tr>
                <th>NO</th>
                <th>ID Transaksi</th>
                <th>Tanggal Transaksi</th>
                <th>NIK Petugas</th>
                <th>Nama Petugas</th>
                <th>NIK Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>ID Vaksin</th>
                <th>Nama Vaksin</th>
                <th>Dosis</th>
            </tr>

            <?php
            $no = 1;
            foreach ($laporan as $lpr) : ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $lpr->id_transaksi ?></td>
                    <td><?= $lpr->tanggal ?></td>
                    <td><?= $lpr->kta ?></td>
                    <td><?= $lpr->nama_pkj ?></td>
                    <td><?= $lpr->nik ?></td>
                    <td><?= $lpr->nama_plg ?></td>
                    <td><?= $lpr->id_vaksin ?></td>
                    <td><?= $lpr->nama_vaksin ?></td>
                    <td><?= $lpr->dosis ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </section>
</div>