<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <?php $this->load->view("include"); ?>
</head>
<body class="login">

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h3 class="text-center">Kullanıcı Giriş</h3>
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

            <form class="login_form" method="post" action="<?php echo base_url("kullanici/login");?>">

                <div class="form-group">
                    <label for="exampleInputEmail1">E-posta Adresi</label>
                    <input type="email" name="email"  class="form-control" id="email" placeholder="E-posta Adresinizi giriniz.">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Şifre</label>
                    <input type="password" name="sifre" class="form-control" id="sifre" placeholder="Şifrenizi giriniz.">
                </div>

                <div class="row">
                    <div class="form-group col-md-5">
                        <input type="text" name="captcha" class="form-control" id="captcha" placeholder="Doğrulama kodunu giriniz.">
                    </div>

                    <div class="col-md-3">
                        <!-- captcha Kodu Gelecek -->
                        <?php echo $captcha["image"]; ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-default">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
