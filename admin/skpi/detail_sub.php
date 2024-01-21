<?php include 'header.php' ?>

<?php include 'navbar.php' ?>

<main id="main" class="main">
    <section class="section dashboard">
    <div class="row">
    <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Data Sub Kompetensi</h1>
                <table id="tabel" class="display" style="width:100%; background-color: white; color: black;">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Tingkat</td>
                            <td>Bobot</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT * FROM detail_subkomp");
                        while($d=mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td class="text text-uppercase"><?= $d['tingkat'] ?></td>
                            <td><?= $d['bobot'] ?></td>
                            <td>
                                <a class="btn btn-warning text-black" href="detail_sub/edit_detail.php?id=<?= $d['id_detail'] ?>" title="edit_data"><i class="fas fa-edit"></i></a>
                                <!-- <a class="btn btn-danger text-black" href="detail_sub/hapus_detail.php?id=<?= $d['id_detail'] ?>" title="hapus_data"><i class="fas fa-trash"></i></a> -->
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