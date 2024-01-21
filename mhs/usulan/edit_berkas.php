<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        <?php 
        $ambil = mysqli_query($koneksi,"SELECT * FROM usulan_skpi where id_mahasiswa='$idm' ");
        $k = mysqli_fetch_assoc($ambil);
        ?>
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Edit Berkas</h1>
                <a href="tampil_berkas.php?id=<?= $k['id_usulan'] ?>" class="btn btn-success mb-4"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                <?php
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"SELECT * FROM berkas_usulan inner join sub_kompetensi on berkas_usulan.id_sub=sub_kompetensi.id_sub where id_berkas = '$id' ");
                while($d = mysqli_fetch_array($data)){
                ?>
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kd Kompetensi</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="id_berkas" value="<?= $d['id_berkas'] ?>">
                            
                            <select class="form-select" name="kd_komp" id="kd_komp" onchange="getSelectedOption()">
                                <option value="">--Silahkan Pilih--</option>
                                <?php
                                $tampil = mysqli_query($koneksi,"SELECT * FROM kompetensi");
                                while($l=mysqli_fetch_array($tampil)){
                                    if($l['kd_kompetensi'] == $d['kd_kompetensi']){
                                        echo '<option value='.$l['kd_kompetensi'].' selected>'.$l['kd_kompetensi']."-".$l['jenis_kompetensi'].'</option>';
                                    } else{
                                        echo '<option value='.$l['kd_kompetensi'].'>'.$l['kd_kompetensi']."-".$l['jenis_kompetensi'].'</option>';
                                    }
                                }
                                ?>
                            </select>
                            <input type="hidden" name="kd_komp1" id="kd_komp1" value="<?= $d['kd_kompetensi'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kd Sub Kompetensi</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="subkomp" id="subkomp" required oninvalid="this.setCustomValidity('Silahkan dipilih')" onchange="selectSub()">
                                <option value="">Pilih Sub Kompetensi</option>
                                <?php
                                    $query = "SELECT * FROM kompetensi";
                                    $result = mysqli_query($koneksi, $query);

                                    while ($rowKomp = mysqli_fetch_assoc($result)) {
                                        echo '<optgroup label="' . $rowKomp['kd_kompetensi'] . '">';

                                        $querySub = "SELECT * FROM sub_kompetensi WHERE kd_kompetensi = '" . $rowKomp['kd_kompetensi'] . "' ";
                                        
                                        $resultSub = mysqli_query($koneksi, $querySub);

                                        while ($rowSubkomp = mysqli_fetch_assoc($resultSub)) {
                                            if($rowSubkomp['kd_sub'] == $d['kd_sub']){
                                                echo '<option value="' . $rowSubkomp['id_sub'] . '" selected>
                                                        '.$rowSubkomp['kd_sub']."-" . $rowSubkomp['nama_sub'] . '
                                                    </option>';
                                            } else{
                                                echo '<option value='.$rowSubkomp['id_sub'].'>'.$rowSubkomp['kd_sub']."-" . $rowSubkomp['nama_sub'] . '</option>';
                                            }
                                        }
                                        echo '</optgroup>';
                                    }
                                ?>
                            </select>
                            <input type="hidden" class="form-control bg-light" name="subkomp1" id="subkomp1" readonly value="<?= $d['id_sub'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Deskripsi kegiatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="deskripsi" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['deskripsi'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Deskripsi kegiatan <span class="text text-danger">(B.Inggris)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="desk_bing" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['desk_bing'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">No Sertifikat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nosertif" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['no_sertif'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tingkat</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="tingkat" id="tingkat">
                                <option value="">--Silahkan Pilih--</option>
                                <?php
                                $tampil1 = mysqli_query($koneksi,"SELECT * FROM detail_subkomp");
                                while($p = mysqli_fetch_array($tampil1)){
                                    if($p['tingkat'] == $d['tingkat']){
                                        echo '<option value='.$p['tingkat'].' selected data-bobot='.$p['bobot'].'
                                        data-idt='.$p['tingkat'].'
                                        >'.$p['tingkat'].'</option>';
                                    } else{
                                        echo '<option value='.$p['tingkat'].'
                                        data-bobot='.$p['bobot'].'
                                        data-idt='.$p['tingkat'].'
                                        >'.$p['tingkat'].'</option>';
                                    }
                                }
                                ?>
                            </select>
                            <input type="hidden" name="tingkat1" id="tingkat1" readonly value="<?= $d['tingkat'] ?>">
                            <!-- bobot -->
                            <input type="hidden" name="bobot" readonly id="bobot">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Lama Pelatihan (Jam)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jam" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['jumlah_jam'] ?>">
                            <p>
                                <i>Isi " - " <b>jika tidak ada</b>, Contoh pengisian <b>jika ada</b> : 64 jam</i>
                            </p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tautan Dokumen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tautan" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['link_file'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Masukkan berkas</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="berkas">
                            <p>Lihat File Sebelumnya <i class="fas fa-hand-point-right"></i>
                            <?php
                                $filesebelumnya = '../../file_upload/'.$d['file'];
                            ?>
                            <a href="<?= $filesebelumnya ?>" target="_blank" class="btn btn-dark" title="Buka File"><i class="fas fa-file-pdf"></i></a>
                            </p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" name="edit" class="btn btn-primary"><i class="bi bi-pencil"></i> Perbarui</button>
                        </div>
                    </div>
                    
                </form>
                <?php } 
                if(isset($_POST['edit'])){
                    $id = $_POST['id_berkas'];
                    $id_komp = $_POST['kd_komp1'];
                    $id_sub = $_POST['subkomp1'];
                    $desk = $_POST['deskripsi'];
                    $sertif = $_POST['nosertif'];
                    $tingkat = $_POST['tingkat1'];
                    $lama_pel = $_POST['jam'];
                    $bobot = $_POST['bobot'];
                    $dkbing = $_POST['desk_bing'];
                    $tautan= $_POST['tautan'];

                    $file = $_FILES['berkas'];

                    if($fileSize=$file['size'] > 0){
                        $fileName = $file['name'];
                        $fileTmpName = $file['tmp_name'];
                        $fileError = $file['error'];

                        // Mendapatkan ekstensi file
                        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                        // Memvalidasi ekstensi file
                        if (!validateExtension($fileExtension)) {
                            die("Ekstensi file tidak valid. Hanya diperbolehkan PDF.");
                        }

                        // Memvalidasi ukuran file
                        if (!validateSize($fileSize)) {
                            die("Ukuran file terlalu besar. Maksimal 1MB.");
                        }

                        $uploadDir = '../../file_upload/';
                        $newFileName = uniqid('', true) . '.' . $fileExtension;
                        $uploadPath = $uploadDir . $newFileName;
                        move_uploaded_file($fileTmpName, $uploadPath);

                        $query_edit = mysqli_query($koneksi,"UPDATE berkas_usulan SET kd_kompetensi='$id_komp', id_sub='$id_sub', deskripsi='$desk', desk_bing='$dkbing', no_sertif='$sertif', tingkat='$tingkat', jumlah_jam='$lama_pel', file='$newFileName', link_file='$tautan'
                        where id_berkas='$id' ");
                    } else{

                        $query_edit = mysqli_query($koneksi,"UPDATE berkas_usulan SET kd_kompetensi='$id_komp', id_sub='$id_sub', deskripsi='$desk', desk_bing='$dkbing', no_sertif='$sertif', tingkat='$tingkat', jumlah_jam='$lama_pel', link_file='$tautan'
                        where id_berkas='$id' ");
                    }

                    if(!$query_edit){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil diperbarui');</script>";
                    echo "<script>document.location = 'tampil_berkas.php?id=".$k['id_usulan']."'; </script>";
                }
                ?>
            </div>
        </div>
        </div>
    </div>
    <!-- End tabel data -->

    </section>
</main>

<?php include '../sidebar/footer.php' ?>
<script>
    function getSelectedOption() {
        var selectOption = document.getElementById("kd_komp");
        var inputText = document.getElementById("kd_komp1");
        
        var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
        
        inputText.value = selectedOptionValue;
    }
    // function getTingkat() {
    //     var selectOption = document.getElementById("tingkat");
    //     var inputText = document.getElementById("tingkat1");
        
    //     var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
        
    //     inputText.value = selectedOptionValue;
    // }
    function selectSub() {
        var selectOption = document.getElementById("subkomp");
        var inputText = document.getElementById("subkomp1");
        
        var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
        
        inputText.value = selectedOptionValue;
    
    }
</script>

<script>
    const selectOption = document.querySelector("#tingkat");
    const bobot = document.querySelector("#bobot");
    const detail = document.querySelector("#tingkat1");

    selectOption.addEventListener("change", function() {
        //ambil data dari select option yang dipilih
        const bobot2 = selectOption.options[selectOption.selectedIndex].getAttribute("data-bobot");
        const idt = selectOption.options[selectOption.selectedIndex].getAttribute("data-idt");

        //tampilkan data di dalam input text
        bobot.value = bobot2;
        detail.value = idt;
    });
</script>