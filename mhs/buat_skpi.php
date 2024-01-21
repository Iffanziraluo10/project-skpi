<?php include 'header.php' ?>

<?php include 'navbar.php' ?>

<main id="main" class="main">
    <section class="section dashboard">
    <div class="row">
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Data Usulan SKPI</h1>
                <a href="usulan/tambah_usulan.php" class="btn btn-primary" title="tambah_usulan"><i class="fas fa-plus"></i> Tambah</a>
                    <table id="tabel" class="display" style="width:100%; background-color: white; color: black;">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>NIM</td>
                                <td>Status Usulan</td>
                                <td>Tanggal Pengusulan</td>
                                <td>File</td>
                                <td>Berkas</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM usulan_skpi inner join mahasiswa on usulan_skpi.id_mahasiswa=mahasiswa.id_mahasiswa where usulan_skpi.id_mahasiswa='$idm' order by id_usulan asc");
                            while($d=mysqli_fetch_array($data)){
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $d['nim'] ?></td>
                                <td>
                                    <?php 
                                        if($d['status_usulan'] == 0){
                                            echo '<span class="badge bg-warning">Diproses <i class="fas fa-sync"></i></span>';
                                        } else if($d['status_usulan'] == 1){
                                            echo '<span class="badge bg-success">Diterima</span>';
                                        } else if($d['status_usulan'] == 2){
                                            echo '<span class="badge bg-danger">Ditolak</span>';
                                        }
                                    ?>
                                </td>
                                <td><?php echo tgl_indo($d['tgl_pengusulan']) ?></td>
                                <td>
                                    <?php 
                                        if($d['file_jadi']==null){ ?>
                                            <span class="badge bg-danger">File tidak ada</span>
                                    <?php } else{
                                        $pdf = '../file_jadi/'.$d['file_jadi'];

                                    ?>
                                    <a class="badge bg-dark" target="_blank" title="Buka File" href="<?= $pdf ?>"><i class="fas fa-file-pdf"></i></a>
                                    <?php }?>
                                </td>
                                <td>
                                    <a class="btn btn-success" href="usulan/tampil_berkas.php?id=<?= $d['id_usulan'] ?>" title="cek berkas"><i class="fas fa-file-archive"></i></a>
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