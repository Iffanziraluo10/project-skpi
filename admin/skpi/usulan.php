<?php include 'header.php' ?>

<?php include 'navbar.php' ?>

<main id="main" class="main">
    <section class="section dashboard">
    <div class="row">
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Data Usulan SKPI</h1>

                <table id="tabel" class="display" style="width:100%; background-color: white; color: black;">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>No SKPI</td>
                            <td>NIM</td>
                            <td>Nama Mahasiswa</td>
                            <td>Status Usulan</td>
                            <td>Tanggal Pengusulan</td>
                            <td>Jenis SKPI</td>
                            <td>File</td> 
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM usulan_skpi inner join mahasiswa on usulan_skpi.id_mahasiswa=mahasiswa.id_mahasiswa inner join skpi on mahasiswa.kode_skpi=skpi.kode_skpi ");
                        while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d['no_skpi'] ?></td>
                            <td><?= $d['nim'] ?></td>
                            <td><?= $d['nama_mhs'] ?></td>
                            <td>
                                <?php 
                                    if($d['status_usulan']==0){ ?>
                                        <span class="badge bg-warning">Proses <i class="fas fa-sync-alt"></i></span>
                                    <?php } else if($d['status_usulan']==1){ ?>
                                        <span class="badge bg-success">Diterima <i class="fas fa-check"></i></span>
                                    <?php } else if($d['status_usulan']==2){?>
                                        <span class="badge bg-danger">Ditolak <i class="fas fa-times"></i></span>
                                    <?php }
                                ?>
                            </td>
                            <td><?= tgl_indo($d['tgl_pengusulan']) ?></td>
                            <td><?= $d['jenis_skpi'] ?></td>
                            <td>
                                <?php 
                                    $file = '../../file_jadi/'.$d['file_jadi'];

                                    if($d['file_jadi']==null){
                                        echo '<span class="badge bg-danger">Data Belum ada</span>';
                                    } else{
                                        echo '<a class="badge bg-dark" href="'.$file.'" title="Lihat file" target="_blank"><i class="fas fa-file-pdf"></i></a>';
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($d['status_usulan']==0){ ?>
                                        <a class="btn btn-warning text-black" href="usulan/cek_berkas.php?id=<?= $d['id_usulan'] ?>" title="cek berkas"><i class="fas fa-archive"></i></a>
                                        <a class="btn btn-danger text-black" href="usulan/hapus_usulan.php?id=<?= $d['id_usulan'] ?>" title="hapus data"><i class="fas fa-trash"></i></a>
                                    <?php } else if($d['status_usulan']==1){ ?>
                                        <a class="btn btn-primary text-black" href="usulan/konvert_surat/f1.php?id=<?= $d['id_usulan'] ?> && id_jenis=<?= $d['kode_skpi'] ?>" title="buat surat"><i class="fas fa-file-signature"></i></a>
                                        <a class="btn btn-danger text-black" href="usulan/hapus_usulan.php?id=<?= $d['id_usulan'] ?>" title="hapus data"><i class="fas fa-trash"></i></a>
                                    <?php } else if($d['status_usulan']==2){ ?>
                                        <span class="badge bg-primary">Ditolak</span>
                                    <?php } 
                                ?>
                                
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