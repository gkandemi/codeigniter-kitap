<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Personel Ekle</title>
    <?php $this->load->view("include"); ?>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Personel Ekle</h3>

                <form action="<?php echo base_url("personel/insert"); ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Personelin Adı</label>
                        <input class = "form-control" type="text" name="ad_soyad">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class = "form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Telefon</label>
                        <input class = "form-control" type="tel" name="telefon">
                    </div>
                    <div class="form-group">
                        <label>Adres</label>
                        <input class = "form-control" type="text" name="adres">
                    </div>
                    <div class="form-group">
                        <label>Departman</label>
                        <input class = "form-control" type="text" name="departman">
                    </div>

                    <div class="form-group">
                        <label for="">Personelin Resmi</label>
                        <input type="file" name="imgUrl" placeholder="Personelin Resmini Seçiniz">
                    </div>

                    <button class="btn btn-success" type="submit">Kaydet</button>
                    <a class="btn btn-danger" href="<?php echo base_url("personel");?>">iptal</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>