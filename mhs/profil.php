<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="
            <?php
            $data=mysqli_query($koneksi,"SELECT * FROM mahasiswa where nim='$nim' ");
            while ($a=mysqli_fetch_array($data)){ 
                if($a['profil'] == null ){
                    echo "assets/img/user.png";
                } else{
                    echo "assets/img/".$a['profil'];
                }
            }
            ?>
            " alt="Profile" class="img-thumbnail">
            <h2><?= $nama_mhs ?></h2>
            <h3><?= $nim ?></h3>
            </div>
        </div>

        </div>

        <div class="col-xl-8">

        <div class="card">
            <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profil Anda</button>
                </li>

                <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
                </li>

                <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Ganti Password</button>
                </li>

            </ul>
            <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                <h5 class="card-title">Detail Profil</h5>
                <?php
                $sql = mysqli_query($koneksi,"SELECT * FROM mahasiswa inner join prodi on mahasiswa.kd_prodi=prodi.kd_prodi where nim = '$nim'");
                while($r=mysqli_fetch_array($sql)){
                ?>
                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">NIM</div>
                    <div class="col-lg-9 col-md-8 fw-bold"><?= $r['nim'] ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8"><?= $r['nama_mhs'] ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8"><?= $r['jenis_kelamin'] ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Program Studi</div>
                    <div class="col-lg-9 col-md-8"><?= $r['nama_prodi'] ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                    <div class="col-lg-9 col-md-8"><?= $r['tempat_lahir'] ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                    <div class="col-lg-9 col-md-8"><?= tgl_indo($r['tgl_lahir']) ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?= $r['email'] ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nomor Ijazah Nasional</div>
                    <div class="col-lg-9 col-md-8"><?= $r['no_ijazah'] ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Lulus</div>
                    <div class="col-lg-9 col-md-8"><?= tgl_indo($r['tgl_lulus']) ?></div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Gelar</div>
                    <div class="col-lg-9 col-md-8"><?= $r['gelar'] ?></div>
                </div>

                <!-- <div class="row">
                    <div class="col-lg-3 col-md-4 label">Peminatan</div>
                    <div class="col-lg-9 col-md-8"><?= $r['nama_lingkungan'] ?></div>
                </div> -->

                <?php } ?>
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <!-- Profile Edit Form -->
                <form action="" method="POST" enctype="multipart/form-data">
                    <?php
                    $ambil = mysqli_query($koneksi,"SELECT * FROM mahasiswa inner join prodi on mahasiswa.kd_prodi=prodi.kd_prodi where nim = '$nim'");
                    while($y=mysqli_fetch_array($ambil)){
                    ?>
                    <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Profil</label>
                    <div class="col-md-8 col-lg-9">
                        <img src="
                        <?php
                        $data=mysqli_query($koneksi,"SELECT * FROM mahasiswa where nim='$nim' ");
                        while ($a=mysqli_fetch_array($data)){ 
                            if($a['profil'] == null ){
                                echo "assets/img/user.png";
                            } else{
                                echo "assets/img/".$a['profil'];
                            }
                        }
                        ?>
                        " alt="Profile">

                        <input type="file" class="form-control" name="fprofil">
                    </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">NIM</label>
                        <div class="col-md-8 col-lg-9">
                            <input type="hidden" value="<?= $y['id_mahasiswa'] ?>" name="id_mahasiswa">
                            <input name="nim" type="number" class="form-control" id="nim" oninput="limitNIM(this, 9)" value="<?= $y['nim'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nama" type="text" class="form-control" id="nama" value="<?= $y['nama_mhs'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-8 col-lg-9">
                            <select class="form-select" name="jenkel" id="jenkel">
                                <option value="0">--Pilih--</option>
                                <?php
                                if($y['jenis_kelamin'] == "Laki-laki"){
                                    echo "<option value='Laki-laki' selected>Laki-laki</option>";
                                    echo "<option value='Perempuan'>Perempuan</option>";
                                }elseif($y['jenis_kelamin'] == "Perempuan"){
                                    echo "<option value='Laki-laki'>Laki-laki</option>";
                                    echo "<option value='Perempuan' selected>Perempuan</option>";
                                }else{
                                    echo "<option value='Laki-laki'>Laki-laki</option>";
                                    echo "<option value='Perempuan'>Perempuan</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="temp_lahir" type="text" class="form-control" id="temp_lahir" value="<?= $y['tempat_lahir'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir" value="<?= $y['tgl_lahir'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Program Studi</label>
                        <div class="col-md-8 col-lg-9">
                            <select class="form-select" name="prodi" id="prodi" onchange="getSelectedOption()">
                                    <option value="">--Silahkan Pilih--</option>
                                    <?php
                                    $tampil = mysqli_query($koneksi,"SELECT * FROM prodi");
                                    while($l=mysqli_fetch_array($tampil)){
                                        if($l['kd_prodi'] == $y['kd_prodi']){
                                            echo '<option value='.$l['kd_prodi'].' selected>'.$l['nama_prodi'].'</option>';
                                        } else{
                                            echo '<option value='.$l['kd_prodi'].'>'.$l['nama_prodi'].'</option>';
                                        }
                                    }
                                    ?>
                            </select>
                            <input type="hidden" name="kd_prodi" id="kd_prodi" value="<?= $y['kd_prodi'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="email" type="email" class="form-control" id="email" value="<?= $y['email'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Nomor Ijazah Nasional</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="no_ijazah" type="number" class="form-control" id="no_ijazah" value="<?= $y['no_ijazah'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tanggal Lulus</label>
                        <div class="col-md-8 col-lg-9">
                            <input type="date" name="tgl_lulus" class="form-control" id="tgl_lulus" value="<?= $y['tgl_lulus'] ?>">
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                </form><!-- End Profile Edit Form -->
                <?php }
                include "sidebar/profil_gbr.php";
                if(isset($_POST['simpan'])){
                    $id = $_POST['id_mahasiswa'];
                    $nim1 = $_POST['nim'];
                    $nmhs = $_POST['nama'];
                    $templahir = $_POST['temp_lahir'];
                    $tgllahir = $_POST['tgl_lahir'];
                    $jenkel = $_POST['jenkel'];
                    $email = $_POST['email'];
                    $ijazah = $_POST['no_ijazah'];
                    $lulus = $_POST['tgl_lulus'];
                    $prodi = $_POST['kd_prodi'];

                    $file = $_FILES['fprofil'];

                    if($fileSize=$file['size'] > 0){
                        $fileName = $file['name'];
                        $fileTmpName = $file['tmp_name'];
                        $fileError = $file['error'];

                        // Mendapatkan ekstensi file
                        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

                        // Memvalidasi ekstensi file
                        if (!validateExtension($fileExtension)) {
                            die("Ekstensi file tidak valid. Hanya diperbolehkan PNG, JPG, atau JPEG.");
                        }

                        // Memvalidasi ukuran file
                        if (!validateSize($fileSize)) {
                            die("Ukuran file terlalu besar. Maksimal 1MB.");
                        }

                        $uploadDir = 'assets/img/';
                        $newFileName = uniqid('', true) . '.' . $fileExtension;
                        $uploadPath = $uploadDir . $newFileName;
                        move_uploaded_file($fileTmpName, $uploadPath);

                        $query_edit = mysqli_query($koneksi,"UPDATE mahasiswa SET nim='$nim', nama_mhs='$nmhs', tempat_lahir='$templahir', tgl_lahir='$tgllahir', jenis_kelamin='$jenkel', email='$email', no_ijazah='$ijazah', tgl_lulus='$lulus', kd_prodi='$prodi', profil='$newFileName' where id_mahasiswa='$id' ");
                    } else{
                        $query_edit = mysqli_query($koneksi,"UPDATE mahasiswa SET nim='$nim', nama_mhs='$nmhs', tempat_lahir='$templahir', tgl_lahir='$tgllahir', jenis_kelamin='$jenkel', email='$email', no_ijazah='$ijazah', tgl_lulus='$lulus', kd_prodi='$prodi', where id_mahasiswa='$id' ");
                    }
                    
                    if(!$query_edit){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Profil berhasil diubah');</script>";
                    echo "<script>document.location = 'index.php'; </script>";
                }
                ?>
                </div>


                <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form method="POST">
                    <div class="row mb-3">
                    <label for="" class="col-md-4 col-lg-3 col-form-label">Password Lama</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="password_old" type="password" class="form-control" id="password_old">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="" class="col-md-4 col-lg-3 col-form-label">Password Baru</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="pass_baru" type="password" class="form-control" id="pass_baru">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="" class="col-md-4 col-lg-3 col-form-label">Masukkan ulang password baru</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="re_passbaru" type="password" class="form-control" id="re_passbaru">
                    </div>
                    </div>

                    <div class="text-center">
                    <button type="submit" name="ganti_pass" class="btn btn-primary">Change Password</button>
                    </div>
                </form><!-- End Change Password Form -->
                <?php
                if(isset($_POST['ganti_pass'])){
                    $old = md5($_POST['password_old']);

                    $tampil = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE  password = '$old'");
                    $data1 = mysqli_fetch_array($tampil);

                    if ($data1) {
                        //uji jika password baru dan konfirmasi password sama
                        $password_baru = md5($_POST['pass_baru']);
                        $konfirmasi_password = md5($_POST['re_passbaru']);
            
                        if ($password_baru == $konfirmasi_password) {
                            //proses ganti password
                            //enkripsi password baru
                            $pass_ok = $konfirmasi_password;
                            $ubah = mysqli_query($koneksi, "UPDATE mahasiswa set password = '$pass_ok' WHERE id_mahasiswa = '$data1[id_mahasiswa]' ");
                            
                            if ($ubah) {
                                echo "<script>alert('Password anda berhasil diubah, silahkan logout untuk menguji password baru anda.!');document.location='logout.php'</script>";
                            }
                        } else {
                            echo "<script>alert('Maaf, Password Baru & Konfirmasi password yang anda inputkan tidak sama!');document.location='index.php'</script>";
                        }
                    } else {
                        echo "<script>alert('Maaf, Password lama anda tidak sesuai/tidak terdaftar!');document.location='index.php'</script>";
                    }
                }
                ?>
                </div>

            </div><!-- End Bordered Tabs -->

            </div>
        </div>

        </div>
    </div>
    </section>

    <script>
        function getSelectedOption() {
        var selectOption = document.getElementById("prodi");
        var inputText = document.getElementById("kd_prodi");
        
        var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
        
        inputText.value = selectedOptionValue;
        }
        function limitNIM(input, maxLength) {
        if (input.value.length > maxLength) {
            // Jika panjang input melebihi maxLength, hapus karakter tambahan
            input.value = input.value.slice(0, maxLength);
        }
    }
    </script>