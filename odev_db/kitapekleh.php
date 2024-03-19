<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitap Ekle</title>
</head>

<body>
    <form action="kitapekle.php" method="post" enctype="multipart/form-data">
        <table border="0" bgcolor="#94b7d5">
            <tr bgcolor="#94b7d5">
                <td colspan="2" align="center">
                    <strong>Kitap Ekle</strong>
                </td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="200">Kitap Adi</td>
                <td width="147" bgcolor="#ffffff">
                    <input type="text" name="kadi" size="15" id="kadi">
                </td>
            </tr>
            <tr bgcolor=" #ffffff">
                <td width="169">Kitap Turu</td>
                <td width="147" bgcolor="#ffffff">
                    <input type="text" name="turk" size="15" id="turk">
                </td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="169">Yazar</td>
                <td width="147" bgcolor="#ffffff">
                    <input type="text" name="yazar" size="15" id="yazar">
                </td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="169">Sayfa</td>
                <td width="147" bgcolor="#ffffff">
                    <input type="text" name="sayfa" size="15" id="sayfa">
                </td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="169">Yili</td>
                <td width="147" bgcolor="#ffffff">
                    <input type="text" name="yili" size="15" id="yili">
                </td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="169">Dili</td>
                <td width="147" bgcolor="#ffffff">
                    <input type="text" name="dili" size="15" id="dili">
                </td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="169">Fiyat</td>
                <td width="147" bgcolor="#ffffff">
                    <input type="text" name="fiyat" size="15" id="fiyat">
                </td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="169">Barkod</td>
                <td width="147" bgcolor="#ffffff">
                    <input type="text" name="barkod" size="15">
                </td>
            </tr>
            <tr bgcolor="#ffffff">
                <td width="169">Kapak Foto</td>
                <td width="147" bgcolor="#ffffff">
                    <input type="file" name="kapak_foto" size="15">
                </td>
            </tr>


            <tr bgcolor="#ffffff">
                <td colspan="2" align="right">
                    <input type="submit" name="kaydet" value="Kaydet">
                    <input type="reset" name="sil" value="Temizle">
                </td>
            </tr>
            </tr>
        </table>
    </form>
</body>

</html>