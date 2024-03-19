<?php
@$kadi = $_POST["kadi"];
@$sifre = $_POST["sifre"];
@$eposta = $_POST["eposta"];
$baglanti = mysqli_connect("localhost", "root", "", "odev_db");
$sonuc = mysqli_query($baglanti, "INSERT INTO uyeler 
    (kadi,sifre,eposta) VALUES ('$kadi','$sifre','$eposta')");
mysqli_set_charset($baglanti, "utf8");
if ($sonuc && $kadi != "") {
    echo ("Sorgu Başarılı!");
} else {
    echo ("Sorgu Hatalı!");
}
mysqli_close($baglanti);
