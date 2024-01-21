<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>

<main id="main" class="main">

<section class="section dashboard">
    <div class="row">
        <div class="col">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h1 class="card-title fs-3">Data Berkas Anda</h1>
                    <a href="../buat_skpi.php" class="btn btn-success" title="kembali"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                    <?php
                        $id_usul = $_GET['id'];
                        $query = mysqli_query($koneksi,"SELECT * FROM usulan_skpi where id_usulan='$id_usul' ");
                        $d = mysqli_fetch_array($query);
                        if($d['status_usulan'] == 0){ ?>
                            <a href="berkas.php" class="btn btn-primary" title="tambah_usulan"><i class="fas fa-plus"></i> Tambah</a>
                        <?php } else if($d['status_usulan']==1){
                                echo ''; }
                            ?>

                    <table id="tabel" class="display" style="width:100%; background-color: white; color: black;">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Kd Kompetensi</td>
                                <td>Kd Sub Kompetensi</td>
                                <td>Deskripsi</td>
                                <td>No Sertifikat</td>
                                <td>Tingkat</td>
                                <td>Jumlah Jam</td>
                                <td>File</td>
                                <td>Catatan</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            $no = 1;
                            $data = mysqli_query($koneksi, "SELECT * FROM berkas_usulan inner join sub_kompetensi on berkas_usulan.id_sub=sub_kompetensi.id_sub where id_usulan='$id_usul' ");
                            while($d = mysqli_fetch_array($data)){
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $d['kd_kompetensi'] ?></td>
                                <td><?= $d['kd_sub'] ?></td>
                                <td><?= $d['deskripsi'] ?></td>
                                <td><?= $d['no_sertif'] ?></td>
                                <td><?= $d['tingkat'] ?></td>
                                <td><?= $d['jumlah_jam'] ?></td>
                                <td>
                                    <?php 
                                        $file = '../../file_upload/'.$d['file'];
                                    ?>
                                    <a class="btn btn-dark" href="<?= $file ?>" target="_blank"><i class="fas fa-copy"></i></a>
                                </td>
                                <td><?= $d['catatan'] ?></td>
                                <td>
                                    <a class="btn btn-warning text-black" href="edit_berkas.php?id=<?= $d['id_berkas'] ?>" title="edit berkas"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger text-black" href="hapus_berkas.php?id=<?= $d['id_berkas'] ?>" title="hapus berkas"><i class="fas fa-trash"></i></a>
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

<?php include '../sidebar/footer.php' ?>