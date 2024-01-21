<?php include 'header.php' ?>

<?php include 'navbar.php' ?>

<main id="main" class="main">
    <section class="section dashboard">
    <div class="row">
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Data Mahasiswa</h1>
                <a href="mahasiswa/tambah_mhs.php" class="btn btn-primary" title="tambah_data"><i class="fas fa-plus"></i> Tambah</a>

                <table id="tabel" class="display" style="width:100%; background-color: white; color: black;">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>NIM</td>
                            <td>Nama Mahasiswa</td>
                            <td>No Ijazah</td>
                            <td>Tanggal Lulus</td>
                            <td>Jenis SKPI</td>
                            <td>Program Studi</td>
                            <td>Status</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa inner join prodi on mahasiswa.kd_prodi=prodi.kd_prodi inner join skpi on mahasiswa.kode_skpi=skpi.kode_skpi");
                        while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d['nim'] ?></td>
                            <td><?= $d['nama_mhs'] ?></td>
                            <td><?= $d['no_ijazah'] ?></td>
                            <td><?= tgl_indo($d['tgl_lulus']) ?></td>
                            <td><?= $d['jenis_skpi'] ?></td>
                            <td><?= $d['nama_prodi'] ?></td>
                            <td>
                                <?php 
                                    if($d['status']==0){ ?>
                                        <span class="badge bg-primary">Pendaftar Baru</span>
                                    <?php } elseif ($d['status']==1){ ?>
                                        <span class="badge bg-success">Mahasiswa</span>
                                    <?php } elseif ($d['status']==2){ ?>
                                        <span class="badge bg-danger">Bukan mahasiswa</span>
                                    <?php } ?>
                            </td>
                            <td>
                                <a class="btn btn-warning text-black" href="mahasiswa/edit_mhs.php?id=<?= $d['id_mahasiswa'] ?>" title="edit_data"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger text-black" href="mahasiswa/hapus_mhs.php?id=<?= $d['id_mahasiswa'] ?>" title="hapus_data"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
    </section>
</main>

<?php include 'footer.php' ?>