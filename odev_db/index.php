<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üyelik Sistemi</title>
    <style>
        table {
            font-family: tahoma;
            background-color: black;
        }

        td {
            background-color: white;
            font-size: 120%;
        }
    </style>
</head>

<body>
    <table width="80%" border="2" height="250" align="center">
        <tr>
            <td colspan="2" align="center" height="70%">
                <h2>ÜYE KAYIT SİSTEMİ</h2>

            </td>
        </tr>
        <tr>
            <td width="15%" valign="top">
                <a href="index.php?go=uyeler">Üyeler</a><br>
                <a href="index.php?go=kayit">Yeni Kayıt</a><br>
                <a href="index.php?go=giris">Giriş</a><br>
                <a href="index.php?go=sil">Üye Sil</a><br>
                <a href="index.php?go=kitapekleh">Kitap Ekle</a><br>
            </td>
            <td width="600" height="400" valign="top" align="center">
                <?php
                switch (@$_GET["go"]) {
                    case "kayit":
                        include "kayit.html";
                        break;
                    case "giris":
                        include "giris.html";
                        break;
                    case "sil":
                        include "sil.html";
                        break;
                    case "kitapekleh":
                        include "kitapekleh.php";
                        break;
                    default:
                        include "index.html";
                        break;
                }
                ?>
            </td>
        </tr>
    </table>
</body>

</html>