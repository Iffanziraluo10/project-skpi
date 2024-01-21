<?php
    include "../../koneksi.php";
    if (isset($_POST['komp'])) {
        $kompetensi = $_POST["komp"];

        $sql = "SELECT * FROM sub_kompetensi where kd_kompetensi= '$kompetensi'";
        $hasil = mysqli_query($koneksi, $sql); ?>
        <option value="">Pilih Sub Kompetensi</option>
        <?php
        while ($data = mysqli_fetch_array($hasil)) {
            ?>
            <option value="<?php echo $data['id_sub'] ?>"><?= $data['nama_sub'] ?></option>
            <?php
        }
    }

?>