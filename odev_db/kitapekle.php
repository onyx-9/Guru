<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $baglanti = mysqli_connect("127.0.0.1", "root", "", "odev_db");

    if ($baglanti) {
        echo ("Veri Tabani Baglantisi Kuruldu!");
    } else {
        echo ("Veri Tabani Baglantisi Kurulamadi!");
    }

    $kitap_adi = $_POST['kadi'];
    $kitap_turu = $_POST['turk'];
    $yazari = $_POST['yazar'];
    $sayfa = $_POST['sayfa'];
    $yili = $_POST['yili'];
    $dili = $_POST['dili'];
    $fiyat = $_POST['fiyat'];
    $barkod = $_POST['barkod'];




    $dosya_adi = basename($_FILES["kapak_foto"]["name"]);
    $dosya_yolu = "uploads/" . $dosya_adi;

    if (move_uploaded_file($_FILES["kapak_foto"]["tmp_name"], $dosya_yolu)) {
        $sql = "INSERT INTO kitaplar (kitap_adi, kitap_turu, yazar,sayfa, yili, dili, fiyat, barkod, kapak_foto)
        VALUES ('$kitap_adi', '$kitap_turu','$yazari', '$sayfa',' $yili', '$dili', '$fiyat', '$barkod', '$dosya_yolu')";

        if (mysqli_query($baglanti, $sql)) {
            echo "Yeni Kitap Eklendi.";
        } else {
            echo "Hata: " . $sql . "<br>" . mysqli_error($baglanti);
        }
    } else {
        echo "Dosya yükleme hatası.";
    }

    mysqli_close($baglanti);
}
