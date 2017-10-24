<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Personel Ekle</title>
</head>
<body>

<h3>Personel Ekle</h3>

<form action="<?php echo base_url("personel/insert"); ?>" method="post">

    Personelin Adı <br><input type="text" name="ad_soyad"> <br><br>

    Email <br><input type="email" name="email"> <br><br>

    Telefon <br><input type="tel" name="telefon"> <br><br>

    Adres <br><input type="text" name="adres"> <br><br>

    Departman <br><input type="text" name="departman"> <br><br>

    <button type="submit">Kaydet</button>
    <a href="<?php echo base_url("personel");?>">iptal</a>
</form>
</body>
</html>

