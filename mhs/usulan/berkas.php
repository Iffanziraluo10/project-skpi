<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Tambah berkas</h1>
                <a href="../buat_skpi.php" class="btn btn-success mb-4"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                <?php
                $query = mysqli_query($koneksi,"SELECT * FROM usulan_skpi where id_mahasiswa='$idm' ");
                $e = mysqli_fetch_assoc($query);
                $id_usulan = $e['id_usulan'];
                ?>
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-0">
                        <label class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <p class="fw-bold"><?= $nim ?></p>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <label class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                            <p class="fw-bold"><?= $nama_mhs ?></p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Pilih Jenis Kompetensi</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="komp" id="komp" onchange="getSelectedOption()" required oninvalid="this.setCustomValidity('Silahkan dipilih')">
                                <option value="">Pilih Jenis Kompetensi</option>
                                <?php
                                $sql = "SELECT * from kompetensi";
                                $hasil = mysqli_query($koneksi,$sql);
                                while ($data = mysqli_fetch_array($hasil)) {
                                    ?>
                                    <option  value="<?= $data['kd_kompetensi'];?>"><?= $data['kd_kompetensi'].'-'.$data['jenis_kompetensi'];?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <input type="hidden" class="form-control bg-light" name="komp1" id="komp1" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Pilih Sub Kompetensi</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="subkomp" id="subkomp" onchange="selectSub()" required oninvalid="this.setCustomValidity('Silahkan dipilih')">
                                <option value="">Pilih Sub Kompetensi</option>
                            </select>
                            <input type="hidden" class="form-control bg-light" name="subkomp1" id="subkomp1" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Deskripsi Kegiatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="deskripsi" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Deskripsi Kegiatan <span class="text text-danger">(B.Inggris)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="desk_bing" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">No Sertifikat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nosertif" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tingkat</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="tingkat1" id="tingkat1" required oninvalid="this.setCustomValidity('Silahkan dipilih')">
                                <option value="">Pilih tingkatan</option>
                                <?php
                                $sql1 = "SELECT * from detail_subkomp";
                                $hasil4 = mysqli_query($koneksi,$sql1);
                                while ($data2 = mysqli_fetch_assoc($hasil4)) {
                                    ?>
                                    <option value="<?= $data2['id_detail']; ?>" data-bobot="<?= $data2['bobot']; ?>" data-idt="<?= $data2['tingkat']; ?>"><?= $data2['tingkat']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <input type="hidden" class="form-control" name="tingkat2" id="tingkat2" readonly>
                            <!-- bobot -->
                            <input type="hidden" class="form-control" name="bobot" id="bobot" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jumlah Jam Pelatihan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jam" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                            <p>
                                <i>Isi " - " <b>jika tidak ada</b>, Contoh pengisian <b>jika ada</b> : 64 jam</i>
                            </p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Masukkan berkas</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="berkas" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tautan Dokumen</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="link" maxlength="25" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <button type="submit" name="tambah" class="btn btn-primary"><i class="bi bi-send"></i> Kirim</button>
                        </div>
                    </div>
                </form>
                <?php
                if(isset($_POST['tambah'])){
                    
                    $id_komp = $_POST['komp1'];
                    $id_sub = $_POST['subkomp1'];
                    $desk = $_POST['deskripsi'];
                    $sertif = $_POST['nosertif'];
                    $tingkat = $_POST['tingkat2'];
                    $lama_pel = $_POST['jam'];
                    $bobot = $_POST['bobot'];
                    $dek_bing = $_POST['desk_bing'];
                    $link = $_POST['link'];
                    

                    $file = $_FILES['berkas'];
                    $fileName = $file['name'];
                    $fileTmpName = $file['tmp_name'];
                    $fileError = $file['error'];
                    $fileSize = $file['size'];

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

                    $query_tambah = mysqli_query($koneksi,"INSERT INTO berkas_usulan VALUES('','".$id_usulan."','".$id_komp."','".$id_sub."','".$desk."','".$dek_bing."','".$sertif."','".$tingkat."','".$lama_pel."','".$newFileName."','".$link."','')");

                    if(!$query_tambah){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil ditambahkan');</script>";
                    echo "<script>document.location = 'tampil_berkas.php?id=".$id_usulan."'; </script>";
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
        var selectOption = document.getElementById("komp");
        var inputText = document.getElementById("komp1");
        
        var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
        
        inputText.value = selectedOptionValue;
    }
    function selectSub() {
        var selectOption = document.getElementById("subkomp");
        var inputText = document.getElementById("subkomp1");
        
        var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
        
        inputText.value = selectedOptionValue;
    
    }
</script>

<script>
    const selectOption = document.querySelector("#tingkat1");
    const bobot = document.querySelector("#bobot");
    const detail = document.querySelector("#tingkat2");

    selectOption.addEventListener("change", function() {
        //ambil data dari select option yang dipilih
        const bobot2 = selectOption.options[selectOption.selectedIndex].getAttribute("data-bobot");
        const idt = selectOption.options[selectOption.selectedIndex].getAttribute("data-idt");

        //tampilkan data di dalam input text
        bobot.value = bobot2;
        detail.value = idt;
    });
</script>

<script>
    $("#komp").change(function(){
        var id_kompetensi = $("#komp").val();

        $.ajax({
            type: "POST",
            dataType: "html",
            url: "get_kompetensi.php",
            data: "komp="+id_kompetensi,
            success: function(data){
                $("#subkomp").html(data);
            }
        });
    });

</script>