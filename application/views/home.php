<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <table border="1px solid black">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>

        <?php foreach ($mahasiswa as $mhs) : ?>

            <tr>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['jurusan'] ?></td>
                <td><?= $mhs['alamat'] ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

</body>

</html>