<?php
include "koneksi.php";

$nama = $_REQUEST['nama'];
$jenisKelamin = $_POST['jenisKelamin'];
$umur = $_REQUEST['umur'];
$alamat = $_REQUEST['alamat'];
$NOIP = $_SERVER['REMOTE_ADDR'];
$pekerjaan = $_POST['pekerjaan'];

if (trim($nama) == "") {
    include "appointment.html";
    echo "Nama belum diisi, ulangi kembali";
} elseif (trim($umur) == "") {
    include "appointment.html";
    echo "Umur masih kosong, ulangi kembali";
} elseif (trim($alamat) == "") {
    include "appointment.html";
    echo "Alamat masih kosong, ulangi kembali";
} elseif (trim($pekerjaan) == "") {
    include "appointment.html";
    echo "Pekerjaan masih kosong, ulangi kembali";
} else {
    $NOIP = $_SERVER['REMOTE_ADDR'];

    $sql = " INSERT INTO tb_user (nama,kelamin,umur,alamat,no_ip,tanggal,pekerjaan)
    VALUES ('$nama','$jenisKelamin','$umur','$alamat','$NOIP',NOW(),'$pekerjaan')";
    mysqli_query($koneksi, $sql)
        or die("SQL Error 2" . mysqli_error($koneksi));
    echo "<meta http-equiv='refresh' content='0; url=konsultasi.php?page=konsultasi'>";
}

?>