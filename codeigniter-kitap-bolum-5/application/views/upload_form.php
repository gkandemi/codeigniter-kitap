<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Upload Form</title>
</head>
<body>

<form action="<?php echo base_url("uploadtest/upload");?>" method="post" enctype="multipart/form-data">
    <input type="file" name="userFile" placeholder="Upload Edilecek Dosyayı Seçiniz">
    <button type="submit">Yükle</button>
</form>

</body>
</html>
