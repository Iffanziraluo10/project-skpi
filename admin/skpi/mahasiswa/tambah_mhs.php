<?php include '../sidebar/header.php' ?>

<?php include '../sidebar/navbar.php' ?>


<main id="main" class="main">

    <section class="section dashboard">
    <!-- tabel data -->
    <div class="row">
        
        <div class="col">
        <div class="card info-card sales-card">
            <div class="card-body">
                <h1 class="card-title fs-3">Tambah Data Mahasiswa</h1>
                <a href="../mahasiswa.php" class="btn btn-success mb-4"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                
                <form action="" method="POST" autocomplete="off" enctype="multipart/form-data" id="Form">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nim" name="nim" required oninvalid="this.setCustomValidity('Silahkan diisi')" oninput="limitNIM(this, 9)">
                            <!-- password -->
                            <input type="hidden" class="form-control" name="pw" id="pw">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nm_mhs" name="nm_mhs" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" required oninvalid="this.setCustomValidity('Silahkan diisi')" onkeydown="validation()">
                            <span id="text"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat" name="tempat" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="jk" id="jk">
                                <option value="">--Silahkan Pilih--</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">No Ijazah</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ijazah" name="ijazah" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lulus</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl_lulus" name="tgl_lulus" required oninvalid="this.setCustomValidity('Silahkan diisi')">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Program Studi</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="prodi" id="prodi" onchange="Prodi()">
                                <option value="">--Silahkan Pilih--</option>
                                <?php
                                $query = "SELECT * FROM prodi ";
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $row['kd_prodi']; ?>"><?php echo $row['nama_prodi']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <input type="hidden" name="kd_prodi" id="kd_prodi">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Gelar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control bg-light" id="gelar" name="gelar" required oninvalid="this.setCustomValidity('Silahkan diisi')" readonly value="Sarjana Komputer (S.Kom)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jenis SKPI</label>
                        <div class="col-sm-10">
                            <select class="form-select" name="kd_skpi" id="kd_skpi" onchange="SKPI()">
                                <option value="">--Silahkan Pilih--</option>
                                <?php
                                $query = "SELECT * FROM skpi ";
                                $result = mysqli_query($koneksi, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $row['kode_skpi']; ?>"><?php echo $row['jenis_skpi']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            <input type="hidden" name="kd_skpi1" id="kd_skpi1">
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
                    $nim = $_POST['nim'];
                    $nama_mhs = $_POST['nm_mhs'];
                    $email = $_POST['email'];
                    $pw = $_POST['pw'];
                    $password_md5 = md5($pw);
                    $tempat = $_POST['tempat'];
                    $tgl_lahir = $_POST['tgl_lahir'];
                    $jk = $_POST['jk'];
                    $ijazah = $_POST['ijazah'];
                    $lulus = $_POST['tgl_lulus'];
                    $kd_prodi = $_POST['kd_prodi'];
                    $gelar = $_POST['gelar'];
                    $kd_skpi = $_POST['kd_skpi'];

                    $query_tambah = mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('','".$nim."','".$nama_mhs."','".$tempat."','".$tgl_lahir."','".$jk."','".$email."','".$password_md5."','".$ijazah."','".$lulus."','".$gelar."','".$kd_skpi."','".$kd_prodi."','',1)");

                    if(!$query_tambah){
                        die('Invalid query:'.mysqli_error($koneksi));
                    }
    
                    echo "<script>alert('Berhasil ditambahkan');</script>";
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
    function convertToUppercase() {
        var inputField = document.getElementById("nm_mhs");
        inputField.value = inputField.value.toUpperCase();
    }
    function limitNIM(input, maxLength) {
        if (input.value.length > maxLength) {
            // Jika panjang input melebihi maxLength, hapus karakter tambahan
            input.value = input.value.slice(0, maxLength);
        }
    }
    function Prodi() {
        var selectOption = document.getElementById("prodi");
        var inputText = document.getElementById("kd_prodi");
        
        var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
        
        inputText.value = selectedOptionValue;
    }
    function SKPI() {
        var selectOption = document.getElementById("kd_skpi");
        var inputText = document.getElementById("kd_skpi1");
        
        var selectedOptionValue = selectOption.options[selectOption.selectedIndex].value;
        
        inputText.value = selectedOptionValue;
    }
    function validation() {
        var form = document.getElementById("Form");
        var email = document.getElementById("email").value;
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
</script>

<script>
    // Ambil elemen input A dan input B
    const inputA = document.getElementById("nim");
    const inputB = document.getElementById("pw");

    inputA.addEventListener("input", function () {
        inputB.value = inputA.value;
    });
</script>