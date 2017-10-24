<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Personel Düzenle</title>
</head>
<body>
<h3>Personel Düzenle</h3>
<form action="<?php echo base_url("personel/update/$row->id"); ?>" method="post">
    
    Personelin Adı <br><input type="text" name="ad_soyad" value="<?php echo $row->ad_soyad; ?>"> <br><br>

    Email <br><input type="email" name="email" value="<?php echo $row->email; ?>"> <br><br>

    Telefon <br><input type="tel" name="telefon" value="<?php echo $row->telefon; ?>"> <br><br>

    Adres <br><input type="text" name="adres" value="<?php echo $row->adres; ?>"> <br><br>

    Departman <br><input type="text" name="departman" value="<?php echo $row->departman; ?>"> <br><br>
    
    <button type="submit">Güncelle</button>
     <a href="<?php echo base_url("personel");?>">iptal</a>
</form>
</body>
</html>
