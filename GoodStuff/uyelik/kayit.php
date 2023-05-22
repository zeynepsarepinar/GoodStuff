<?php


include("baglanti.php");

$username_err = "";
$email_err = "";
$parola_err = "";
$parolatkr_err = "";

//kaydet tuşuna basılmadan kaydetmemes*4i için 

if (isset($_POST["kaydet"])) {
    //Kullanıcı adı doğrulama
    if (empty($_POST["kullaniciadi"])) {
        $username_err = "Kullanıcı adı boş geçilemez";
    } else if (strlen($_POST["kullaniciadi"]) < 6) {
        $username_err = "Kullanıcı adı en az 6 karakter olmalı";
    } else if (!preg_match('/^[a-z\d_]{2,20}$/i', $_POST["kullaniciadi"])) {
        $username_err = "Kullanıcı adı büyük küçük harf ve rakamlardan oluşmalıdır.";
    } else {
        $username = $_POST["kullaniciadi"];
    }

    //Email Doğrulama
    if (empty($_POST["email"])) {
        $email_err = "Email alanı boş geçilemez.";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format";
    } else {
        $email = $_POST["email"];
    }

    //Parola doğrulama 
    if (empty($_POST["parola"])) {
        $parola_err = "Parola boş geçilemez";
    } else if (strlen($_POST["parola"]) < 6) {
        $parola_err = "Kullanıcı adı en az 6 karakter olmalı";
    } else {
        $parola = password_hash($_POST["parola"], PASSWORD_DEFAULT);
    }

    //Parola Tekrar doğrulaması
    if (empty($_POST["parolatkr"])) {
        $parolatkr_err = "Parola tekarı boş geçilemez";
    } else if ($_POST["parola"] != $_POST["parolatkr"]) {
        $parolatkr_err = "Parolalar aynı değil";
    } else {
        $parolatkr = $_POST["parolatkr"];
    }


    if (isset($username) && isset($email) && isset($parola)) {

        $ekle = "INSERT INTO kullanicilar(kullanici_adi, email, parola) VALUES ('$username','$email','$parola')";
        //KULLANİCİLAR İÇERİSİNE VERİTABNINDAKİ ALANLAR YAZILIR
        $calistirekle = mysqli_query($baglanti, $ekle);

        if ($calistirekle) {
            echo '<div class="alert alert-success" role="alert">
        ÜYELİĞİNİZ BAŞARI İLE OLUŞTURULDU
      </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
        KAYIT EKLENİRKEN BİR PROBLEM OLUŞTURULDU
      </div>';
        }

        mysqli_close($baglanti);
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container p-5">
        <div class="card p-5">
            <form action="kayit.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1">Kullancı Adı</label>
                    <input type="text" class="form-control 
                    <?php
                    if (!empty($username_err)) {
                        echo "is-invalid";
                    }
                    ?>
                              
                    " id="exampleInputEmail1" name="kullaniciadi">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?php
                        echo $username_err;
                        ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control 
                    <?php
                    if (!empty($username_err)) {
                        echo "is-invalid";
                    }
                    ?>
                    
                    " id="exampleInputEmail1" name="email">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?php
                        echo $email_err;
                        ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1">Parola</label>
                    <input type="password" class="form-control 
                    <?php
                    if (!empty($parola_err)) {
                        echo "is-invalid";
                    }
                    ?>  
                    " id="exampleInputPassword1" name="parola">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?php
                        echo $parola_err;
                        ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1">Parola Tekrar</label>
                    <input type="password" class="form-control 
                    <?php
                    if (!empty($parolatkr_err)) {
                        echo "is-invalid";
                    }
                    ?>
                    
                    " id="exampleInputPassword1" name="parolatkr">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?php
                        echo $parolatkr_err;
                        ?>
                    </div>
                </div>

                <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>
            </form>

        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>