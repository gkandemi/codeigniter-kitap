<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Personel Listesi</title>
    <?php $this->load->view("include"); ?>
</head>
<body>

<div class="container">
    <h3 class="text-center">Personel Listesi</h3>
    <hr>

    <?php

    $alert = $this->session->userdata("alert");

    if($alert){ ?>

        <!-- Mesaj Kutusunun HTML Kodları -->
        <div class="alert <?php echo $alert["type"]; ?>" role="alert">
            <!-- Alert içeriği -->
            <strong><?php echo $alert["title"]; ?></strong>
            <span><?php echo $alert["message"]; ?></span>
        </div>

    <?php } ?>

    <a class="btn btn-sm btn-primary" href="<?php echo base_url("personel/insert_form"); ?>">Yeni ekle</a><br><br>

    <table class="table table-hover table-bordered table-striped">
        <thead>
        <th>#id</th>
        <th>Resim</th>
        <th>
            Ad Soyad
            <a href="<?php echo base_url("personel/order/ad_soyad/ASC");?>">[A-z]</a>
            <a href="<?php echo base_url("personel/order/ad_soyad/DESC");?>">[Z-a]</a>
        </th>
        <th>
            E-mail
            <a href="<?php echo base_url("personel/order/email/ASC");?>">[A-z]</a>
            <a href="<?php echo base_url("personel/order/email/DESC");?>">[Z-a]</a>
        </th>
        <th>
            Telefon
            <a href="<?php echo base_url("personel/order/telefon/ASC");?>">[0-9]</a>
            <a href="<?php echo base_url("personel/order/telefon/DESC");?>">[9-0]</a>
        </th>
        <th>
            Departman
            <a href="<?php echo base_url("personel/order/departman/ASC");?>">[A-z]</a>
            <a href="<?php echo base_url("personel/order/departman/DESC");?>">[Z-a]</a>
        </th>
        <th>
            Adres
            <a href="<?php echo base_url("personel/order/adres/ASC");?>">[A-z]</a>
            <a href="<?php echo base_url("personel/order/adres/DESC");?>">[Z-a]</a>
        </th>
        <th>İşlemler</th>
        </thead>
        <tbody>
        <?php foreach ($result as $row) { ?>

            <tr>
                <td>#<?php echo $row->id; ?></td>
                <td width="40">
                    <img class="img-responsive" width="40" src="<?php echo base_url("uploads/$row->imgUrl");?>" alt="">
                </td>
                <td><?php echo $row->ad_soyad; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->telefon; ?></td>
                <td><?php echo $row->departman; ?></td>
                <td><?php echo $row->adres; ?></td>
                <td>
                    <a class="btn btn-xs btn-warning" href="<?php echo base_url("personel/update_form/$row->id"); ?>">Düzenle</a>
                    <a class="btn btn-xs btn-danger" href="<?php echo base_url("personel/delete/$row->id"); ?>">Sil</a>
                </td>
            </tr>

        <?php } ?>
        </tbody>

    </table>

    <?php

    $user = get_user();

    if($user){ ?>

    <?php echo $user["kullanici_adi"];?> olarak giriş yapıldı,
        <a href="<?php echo base_url("kullanici/logout"); ?>">Çıkış yap</a>

    <?php } ?>

</div>

</body>
</html>
