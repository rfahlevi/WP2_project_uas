<?= $this->extend('layout/template'); ?>
 
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Mahasiswa</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $m['nama_mahasiswa']; ?></td>
                            <td><?= $m['jenis_kelamin']; ?></td>
                            <td><?= $m['tanggal_lahir']; ?></td>
                            <td><?= $m['jurusan']; ?></td>
                            <td>
                                <a href="/mahasiswa/<?= $m['id']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>

