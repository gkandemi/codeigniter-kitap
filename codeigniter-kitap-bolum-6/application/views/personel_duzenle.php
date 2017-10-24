<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Personel Düzenle</title>
    <?php $this->load->view("include"); ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Personel Düzenle</h3>

                <form action="<?php echo base_url("personel/update/$row->id"); ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="">Personelin Adı</label>
                        <input class="form-control" type="text" name="ad_soyad" value="<?php echo $row->ad_soyad; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email" value="<?php echo $row->email; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Telefon</label>
                        <input class="form-control" type="tel" name="telefon" value="<?php echo $row->telefon; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Adres</label>
                        <input class="form-control" type="text" name="adres" value="<?php echo $row->adres; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Departman</label>
                        <input class="form-control" type="text" name="departman" value="<?php echo $row->departman; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Personelin Resmi</label>
                        <input type="file" name="imgUrl" placeholder="Personelin Resmini Seçiniz">
                    </div>

                    <button class="btn btn-success" type="submit">Güncelle</button>
                    <a class="btn btn-danger" href="<?php echo base_url("personel");?>">iptal</a>


                </form>

            </div>
        </div>
    </div>

</body>
</html>