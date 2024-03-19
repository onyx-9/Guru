<?php
$baglanti = mysqli_connect("localhost", "root", "", "odev_db");
$sonuc = mysqli_query($baglanti, "SELECT * FROM resimler");
mysqli_set_charset($baglanti, "utf8");
if ($row = mysqli_fetch_row($sonuc)) {
    foreach ($sonuc as $row) {
?>
        <img src="<?php echo $row["resim_adi"]; ?>" weight="100" height="100" alt=“Resim açıklaması" />
<?php
    }
} else {
    echo "Henüz hiç resim yok.";
}
?>