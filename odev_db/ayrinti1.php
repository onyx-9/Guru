<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="guru.css">
</head>

<body>

    <?php
    $baglanti = mysqli_connect("localhost", "root", "", "odev_db");
    mysqli_set_charset($baglanti, "utf8");
    if (!$baglanti) {
        echo ("Veri Tabani Baglantisi Kurulmadı!");
    }

    $sonuc = mysqli_query($baglanti, "SELECT * FROM kitaplar ORDER BY kitap_id DESC LIMIT 5");


    if (mysqli_num_rows($sonuc) > 0) {
        while ($row = mysqli_fetch_assoc($sonuc)) {
    ?>

            <div class="teklifbanner-urunler">
                <div class="urun-foto">
                    <div class="foto"> <img src="<?php echo $row['kapak_foto']; ?>" alt=""></div>
                </div>
                <div class="bilgi">
                    <div class="urun-ad">
                        <p class="urunler_ad_yazi"><?php echo $row['kitap_adi']; ?></p>
                    </div>
                    <div class="urun-yazar">
                        <p class="urunler_yazar_yazi"><?php echo $row['yazar']; ?></p>
                    </div>
                    <button class="urun-fiyat">
                        <p class="urunler_fiyat_yazi"><?php echo $row['fiyat'] ?></p>
                    </button>
                    <button class="urun-ayrinti">
                        <p onclick="location.href= 'ayrint1.php'" class="urunler_ayrinti_yazi">Ayrıntılar</p>
                    </button>
                </div>
            </div>

    <?php


        }
    } else {
        echo ("Veri Bulunamadi");
    }
    ?>






    <div class="ayrinti-anadiv">


    </div>










</body>

</html>