<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Edit Data Mahasiswa</h1>
                <a href="../mahasiswa.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                <?php
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"SELECT * FROM mahasiswa where id_mahasiswa = '$id' ");
                while($d=mysqli_fetch_array($data)){
                ?>
                <form action="" method="POST" id="Form" autocomplete="off" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <!-- id -->
                            <input type="hidden" class="form-control" id="id_mhs" name="id_mhs" required value="<?= $d['id_mahasiswa'] ?>">
                            <!-- npm -->
                            <input type="number" class="form-control" id="nim" name="nim" required oninvalid="this.setCustomValidity('Silahkan diisi')" oninput="limitNIM(this, 9)" value="<?= $d['nim'] ?>">
                            <!-- pw -->
                            <input type="hidden" name="pw" id="pw" value="<?= $d['password'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm_mhs" name="nm_mhs" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['nama_mhs'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat" name="tempat" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['tempat_lahir'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['tgl_lahir'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jk" id="jk">
                                <option value="">--Silahkan Pilih--</option>
                                    <?php
                                    if($d['jenis_kelamin'] == "Laki-laki"){
                                        echo "<option value='Laki-laki' selected>Laki-laki</option>";
                                        echo "<option value='Perempuan'>Perempuan</option>";
                                    }elseif($d['jenis_kelamin'] == "Perempuan"){
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
                        <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email1" name="email1" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['email'] ?>" onkeydown="validation()">
                            <span id="text"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">No Ijazah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ijazah" name="ijazah" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['no_ijazah'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lulus</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="t_lulus" name="t_lulus" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['tgl_lulus'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Gelar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control bg-light" id="gelar" name="gelar" required oninvalid="this.setCustomValidity('Silahkan diisi')" value="<?= $d['gelar'] ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="prodi" id="prodi" onchange="getSelectedOption()">
                                <option value="">--Silahkan Pilih--</option>
                                <?php
                                $tampil = mysqli_query($koneksi,"SELECT * FROM prodi");
                                while($l=mysqli_fetch_array($tampil)){
                                    if($l['kd_prodi'] == $d['kd_prodi']){
                                        echo '<option value='.$l['kd_prodi'].' selected>'.$l['nama_prodi'].'</option>';
                                    } else{
                                        echo '<option value='.$l['kd_prodi'].'>'.$l['nama_prodi'].'</option>';
                                    }
                                }
                                ?>
                            </select>
                            <input type="hidden" name="kd_prodi" id="kd_prodi" value="<?= $d['kd_prodi'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis SKPI</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="kd_skpi" id="kd_skpi" onchange="SKPI()">
                                <option value="">--Silahkan Pilih--</option>
                                <?php
                                $jskpi = mysqli_query($koneksi,"SELECT * FROM skpi");
                                while($o=mysqli_fetch_array($jskpi)){
                                    if($o['kode_skpi'] == $d['kode_skpi']){
                                        echo '<option value='.$o['kode_skpi'].' selected>'.$o['jenis_skpi'].'</option>';
                                    } else{
                                        echo '<option value='.$o['kode_skpi'].'>'.$o['jenis_skpi'].'</option>';
                                    }
                                }
                                ?>
                            </select>
                            <input type="hidden" name="kd_skpi1" id="kd_skpi1" value="<?= $d['kode_skpi'] ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="status" id="status">
                            <option value="">--Silahkan Pilih--</option>
                                <?php
                                if($d['status'] == 0){
                                    echo "<option value='0' selected>Pendaftar Baru</option>";
                                    echo "<option value='1'>Mahasiswa</option>";
                                    echo "<option value='2'>Bukan Mahasiswa</option>";
                                }elseif($d['status'] == 1){
                                    echo "<option value='0'>Pendaftar Baru</option>";
                                    echo "<option value='1' selected>Mahasiswa</option>";
                                    echo "<option value='2'>Bukan Mahasiswa</option>";
                                }elseif($d['status'] == 2){
                                    echo "<option value='0'>Pendaftar Baru</option>";
                                    echo "<option value='1'>Mahasiswa</option>";
                                    echo "<option value='2' selected>Bukan Mahasiswa</option>";
                                }else{
                                    echo "<option value='0'>Pendaftar Baru</option>";
                                    echo "<option value='1'>Mahasiswa</option>";
                                    echo "<option value='2'>Bukan Mahasiswa</option>";
                                }
                                ?>
                            </select>
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
                    $id_mhs = $_POST['id_mhs'];
                    $nim = $_POST['nim'];
                    $nama_mhs = $_POST['nm_mhs'];
                    $tempat = $_POST['tempat'];
                    $tlahir = $_POST['tgl_lahir'];
                    $jk = $_POST['jk'];
                    $email = $_POST['email1'];
                    $ijazah = $_POST['ijazah'];
                    $pw = $_POST['pw'];
                    $password_md5 = md5($pw);
                    $gelar = $_POST['gelar'];
                    $tlulus = $_POST['t_lulus'];
                    $kd_prodi = $_POST['kd_prodi'];
                    $kd_skpi = $_POST['kd_skpi1'];
                    $status = $_POST['status'];

                    $query_edit = mysqli_query($koneksi,"UPDATE mahasiswa SET nim='$nim', nama_mhs='$nama_mhs', tempat_lahir='$tempat', tgl_lahir='$tlahir', jenis_kelamin='$jk', email='$email', password='$password_md5', no_ijazah='$ijazah', tgl_lulus='$tlulus', gelar='$gelar', kode_skpi='$kd_skpi', kd_prodi='$kd_prodi', status='$status' where id_mahasiswa='$id_mhs' ");

                    if(!$query_edit){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil diperbarui');</script>";
                    echo "<script>document.location = '../mahasiswa.php'; </script>";
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
    var selectOption = document.getElementById("prodi");
    var inputText = document.getElementById("kd_prodi");
    
    var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
    
    inputText.value = selectedOptionValue;
    }
    function validation() {
        var form = document.getElementById("Form");
        var email = document.getElementById("email1").value;
        var text = document.getElementById("text");
        var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

        if (email.trim() === "") {
            // Email kosong, atur teks dan warna ke nilai default
            form.classList.remove("Valid", "Invalid");
            text.innerHTML = "";
        } else if (email.match(pattern)) {
            // Email valid
            form.classList.add("Valid");
            form.classList.remove("Invalid");
            text.innerHTML = "Email anda adalah Email Valid";
            text.style.color = "#0a5c0a";
        } else {
            // Email tidak valid
            form.classList.add("Invalid");
            form.classList.remove("Valid");
            text.innerHTML = "Email tidak dengan format yang benar";
            text.style.color = "#FF0000";
        }
    }
    function limitNIM(input, maxLength) {
        if (input.value.length > maxLength) {
            // Jika panjang input melebihi maxLength, hapus karakter tambahan
            input.value = input.value.slice(0, maxLength);
        }
    }
    function convertToUppercase() {
        var inputField = document.getElementById("nm_mhs");
        inputField.value = inputField.value.toUpperCase();
    }
    function SKPI() {
        var selectOption = document.getElementById("kd_skpi");
        var inputText = document.getElementById("kd_skpi1");
        
        var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
        
        inputText.value = selectedOptionValue;
    }
</script>
<script>
    // Ambil elemen input A dan input B
    const inputA = document.getElementById("nim");
    const inputB = document.getElementById("pw");

    inputA.addEventListener("input", function () {
        inputB.value = inputA.value;
    });
</script>