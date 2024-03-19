<?php
$baglanti = mysqli_connect("localhost", "root", "", "odev_db");
mysqli_set_charset($baglanti, "utf8");
if ($baglanti) {
    echo ("Veri Tabani Baglantisi Kuruldu!");
} else {
    echo ("Veri Tabani Baglantisi Kurulamadi!");
}

$sonuc = mysqli_query($baglanti, "SELECT * FROM kitaplar ORDER BY kitap_id DESC LIMIT 4");


if (mysqli_num_rows($sonuc) > 0) {
    while ($row = mysqli_fetch_assoc($sonuc)) {
?>
        <div class="teklifbanner-urunler">

            <div class="urun-ad">
                <p class="urunler_ad_yazi"><?php echo $row['kitap_adi']; ?></p>
            </div>
            <div class="urun-yazar">
                <p class="urunler_yazar_yazi"><?php echo $row['yazar']; ?></p>
            </div>
            <button class="urun-fiyat">
                <p class="urunler_fiyat_yazi"><?php echo $row['fiyat'] ?></p>
            </button>
        </div>
<?php


    }
} else {
    echo ("Veri Bulunamadi");
}
?>