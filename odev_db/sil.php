<?php
@$kadi = $_POST["kadi"];
session_start();
ob_start();
$baglanti = mysqli_connect("localhost", "root", "", "odev_db");
$sonuc = mysqli_query($baglanti, "DELETE from uyeler where kadi='" . $kadi . "'");
mysqli_set_charset($baglanti, "utf8");
if ($sonuc && $kadi != "") {
    echo "<center>" . $kadi . " Barasiyla silindi</center>";
} else {
    echo "<center>Silme Basarisiz. Lutfen kullanici adinizi kontrol edin</center>";
}
mysqli_close($baglanti);
echo "<center>Cikis yaptiniz. Anasayfaya yonlendiriliyorsunuz!</center>";
header("Refresh: 2; url=uyeler.php");
