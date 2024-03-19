<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru</title>
    <link rel="stylesheet" type="text/css" href="guru.css">
</head>

<body>

    <div id="minibanner">
        <div class="minibanner-orta"><a>100TL üzeri alışverişlerde kargo bedava!</a></div>
    </div>



    <header id="banner">

        <div id="banner-top">
            <div class="logodiv"><a href="guru.php"><img class="logo" src="guru/guru3.png" alt="logo"></a></div>
            <input class="search" type="text" placeholder="Hemen Ara!">
            <button class="loginbutton" onclick="location.href= 'index.php'" type="submit">
                <img class="loginlogo" src="guru/loginlogo.png"><a class="logintext"> <b>Giris Yap</b> <br> <a>veya Kaydol</a> </a></button>


            </button>
        </div>

        <div id="banner-bottom">
            <ul>
                <li><a>Kategoriler</a></li>
                <li><a>Son Eklenen</a></li>
                <li><a>Popüler Kitaplar</a></li>
                <li><a>Yazarlar</a></li>
            </ul>
        </div>


    </header>


    <div id="kayanreklam">
        <div class="kayan-item">
            <img src="yuklenenresimler/q3.jpg" alt="">
            <img src="yuklenenresimler/q5.jpg" alt=""> <!--1920x1080 foto lazim-->
            <img src="yuklenenresimler/q4.jpg" alt="">
            <img src="yuklenenresimler/q6.jpg" alt="">

        </div>
    </div>

    <div id="teklifbanner">
        <div class="arayuzdiv">
            <div class="arayuz-sekme"></div>

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
                                <p onclick="location.href= 'ayrinti1.html'" class="urunler_ayrinti_yazi">Ayrıntılar</p>
                            </button>
                        </div>
                    </div>

            <?php


                }
            } else {
                echo ("Veri Bulunamadi");
            }
            ?>

            <div id="kategori">
                <?php
                $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");
                mysqli_set_charset($baglanti, "utf8");
                if (!$baglanti) {
                    echo ("Veri Tabani Baglantisi Kurulmadı!");
                }

                $sonuc = mysqli_query($baglanti, "SELECT * FROM kategoriler ORDER BY kategori_id DESC LIMIT 1");


                if (mysqli_num_rows($sonuc) > 0) {
                    while ($row = mysqli_fetch_assoc($sonuc)) {
                ?>
                        <div id="kategori">
                            <div class="kategori1-kayandiv">
                                <div class="kategori1-urunler">
                                    <button onclick="location.href= 'tarih.php'" class="kategori-button">
                                        <p class="kategori-yazi">ROMAN</p>
                                    </button>
                                </div>
                                <div class="kategori1-urunler">
                                    <button class="kategori-button" onclick="location.href= 'tarih.php'">
                                        <p class="kategori-yazi">TARIH</p>
                                    </button>
                                </div>
                                <div class="kategori1-urunler">
                                    <button class="kategori-button" onclick="location.href= 'tarih.php'">
                                        <p class="kategori-yazi">FELSEFE</p>
                                    </button>
                                </div>
                                <div class="kategori1-urunler">
                                    <button class="kategori-button" onclick="location.href= 'tarih.php'">
                                        <p class="kategori-yazi">BILIM</p>
                                    </button>
                                </div>
                                <div class="kategori1-urunler">
                                    <button class="kategori-button" onclick="location.href= 'tarih.php'">
                                        <p class="kategori-yazi">COCUK</p>
                                    </button>
                                </div>
                        <?php


                    }
                } else {
                    echo ("Veri Bulunamadi");
                }
                        ?>
                            </div>


                            <div id="footer"></div>

</body>

</html>