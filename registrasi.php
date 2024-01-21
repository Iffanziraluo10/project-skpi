<?php include 'koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Form Registrasi SISKPI</title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/logos/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/logos/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/logos/favicon-16x16.png">
	<link rel="manifest" href="images/logos/site.webmanifest">
    <!---Custom CSS File--->
    <link rel="stylesheet" href="assets_regist/style2.css">
    
</head>
<body>
    <section class="container">
    <center>
        <img src="images/UNIKA.png" alt="logo" width="70px">
    </center>
    <header>Form Registrasi SISKPI</header>
    <form action="" method="POST" id="form-regist" class="form" autocomplete="off">
        <p>Silahkan isi data diri anda !</p>
        <div class="input-box">
            <label>Nama Lengkap</label>
            <input type="text" placeholder="Masukkan nama lengkap..." name="nlengkap" required>
        </div>

        <div class="input-box">
            <label>Tempat Lahir</label>
            <input type="text" placeholder="Masukkan tempat lahir..." name="tempat_lahir" required>
        </div>

        <div class="input-box">
            <label>Tanggal Lahir</label>
            <input type="date" placeholder="Masukkan tgl lahir..." name="tgl_lahir" required>
        </div>

        <div class="input-box">
            <label>NPM (Nomor Pokok Mahasiswa)</label>
            <input type="number" placeholder="Masukkan NPM..." name="npm" oninput="limitNPM(this, 9)" required id="npm">
            <input type="hidden" name="pw" required id="pw">
        </div>

        <div class="input-box">
            <label>Email</label>
            <input type="email" placeholder="Masukkan Email..." name="email" id="email" required onkeydown="validation()">
            <span id="text"></span>
        </div>

        <div class="input-box">
            <label>Nomor Ijazah Nasional</label>
            <input type="text" placeholder="Masukkan nomor ijazah..." name="ijazah" required>
        </div>

        <div class="input-box">
            <label>Program Studi</label>
            <div class="select-box">
                <select name="prodi" id="prodi">
                    <option value="">--Pilih Program Studi--</option>
                    <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM prodi");
                    while($d = mysqli_fetch_array($query)){
                        echo '<option value="'.$d['kd_prodi'].'">'.$d['nama_prodi'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="gender-box">
            <h3>Jenis Kelamin</h3>
            <div class="gender-option">
                <div class="gender">
                    <input type="radio" id="check-male" name="jk" value="Laki-laki">
                    <label for="check-male">Laki-laki</label>
                </div>
                <div class="gender">
                    <input type="radio" id="check-female" name="jk" value="Perempuan">
                    <label for="check-female">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="input-box">
            <label>Tanggal Kelulusan</label>
            <input type="date" placeholder="Masukkan tanggal kelulusan..." name="tkelulusan" required>
        </div>
        <div class="input-box">
            <label>Gelar yang diberikan</label>
            <input type="text" placeholder="Masukkan gelar..." name="gelar" required value="Sarjana Komputer (S.Kom)" readonly>
        </div>
        <div class="input-box">
            <label>Jenis Peminatan</label>
            <div class="select-box">
                <select name="peminatan" id="peminatan">
                    <option value="">--Pilih Peminatan--</option>
                    <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM skpi");
                    while($d = mysqli_fetch_array($query)){
                        echo '<option value="'.$d['kode_skpi'].'">'.$d['jenis_skpi'].'</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <button type="submit" name="kirim">Submit</button>
    </form>
    </section>
    <?php
    if(isset($_POST['kirim'])){
        $nama = $_POST['nlengkap'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $npm = $_POST['npm'];
        $ijazah = $_POST['ijazah'];
        $prodi = $_POST['prodi'];
        $email = $_POST['email'];
        $pw = $_POST['pw'];
        $password_md5 = md5($pw);
        $jk = $_POST['jk'];
        $tkelulusan = $_POST['tkelulusan'];
        $gelar = $_POST['gelar'];
        $peminatan = $_POST['peminatan'];

        $tambah = "INSERT INTO mahasiswa VALUES('','".$npm."','".$nama."','".$tempat_lahir."','".$tgl_lahir."','".$jk."','".$email."','".$password_md5."','".$ijazah."','".$tkelulusan."','".$gelar."','".$peminatan."','".$prodi."','',0 )";

        $query_tambah = mysqli_query($koneksi,$tambah);

        if(!$query_tambah){
            die('Invalid query:'.mysqli_error($koneksi));
        }

        echo "<script>alert('Berhasil ditambahkan');</script>";
        echo "<script>document.location = 'index.php?pesan=berhasil_daftar'; </script>";
    }
    ?>

<script>
    function limitNPM(input, maxLength) {
        if (input.value.length > maxLength) {
            // Jika panjang input melebihi maxLength, hapus karakter tambahan
            input.value = input.value.slice(0, maxLength);
        }
    }
</script>
<script>
    // Ambil elemen input A dan input B
    const inputA = document.getElementById("npm");
    const inputB = document.getElementById("pw");

    inputA.addEventListener("input", function () {
        inputB.value = inputA.value;
    });
</script>
<script>
    function validation() {
        var form = document.getElementById("form-regist");
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

</body>
</html>