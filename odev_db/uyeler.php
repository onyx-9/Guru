<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uyeler</title>
</head>

<body>
    <table align="center" border="1" bgcolor="white" width="600">
        <tr align="center">
            <td>>Sıra No</td>
            <td>Üye No</td>
            <td>Kullanıcı Adı</td>
            <td>Şifre</td>
            <td>E-Posta</td>


        </tr>
        <?php
        $baglanti = mysqli_connect("localhost", "root", "", "odev_db");
        $sonuc = mysqli_query($baglanti, "SELECT * FROM uyeler");
        mysqli_set_charset($baglanti, "utf8");
        $sayac = 0;
        while ($satir = mysqli_fetch_row($sonuc)) {
            $sayac = $sayac + 1;
            echo  "<tr>
            <td width='55' align='right'>$sayac</td>
            <td width='70' align='right'>$satir[3]</td>
            <td> $satir[0]</td>
            <td> $satir[1]</td>
            <td width='75'>$satir[2]</td>
            
            </tr>";
        }
        mysqli_close($baglanti);
        ?>
    </table>
    <?php
    echo "<center>Admin sayfasina hosgeldiniz!";
    echo "<a href=cikis.php>Guvenli cikis</a></center>";
    ?>
</body>

</html>