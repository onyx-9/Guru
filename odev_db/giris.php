<?php
@$kadi = $_POST["kadi"];
@$sifre = $_POST["sifre"];
$baglanti = mysqli_connect("localhost", "root", "", "odev_db");
$sonuc = mysqli_query($baglanti, "SELECT * from uyeler where
    kadi='" . $kadi . "' and sifre='" . $sifre . "' ");
mysqli_set_charset($baglanti, "utf8");
if (mysqli_num_rows($sonuc)) {
    $_SESSION["kadi"] = $kadi;
    $_SESSION["sifre"] = $sifre;
    header("Location:uyeler.php");
} else {
    if ($kadi == "" or $sifre == "") {
        echo "Lutfen kullanici adi ya da sifreyi bos birakmayiniz.";
    } else {
        echo "Kullanici Adi / Sifre Yanlis.";
    }
}
mysqli_close($baglanti);
