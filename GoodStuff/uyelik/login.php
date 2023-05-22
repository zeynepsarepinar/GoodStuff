<?php


include("baglanti.php");

$username_err = "";

$parola_err = "";


//login tuşuna basılmadan kaydetmemesi için 

if (isset($_POST["giris"])) {
    //Kullanıcı adı doğrulama
    if (empty($_POST["kullaniciadi"])) {
        $username_err = "Kullanıcı adı boş geçilemez";
    } else {
        $username = $_POST["kullaniciadi"];
    }



    //Parola doğrulama 
    if (empty($_POST["parola"])) {
        $parola_err = "Parola boş geçilemez";
    } else if (strlen($_POST["parola"]) < 6) {
        $parola_err = "Kullanıcı adı en az 6 karakter olmalı";
    } else {
        $parola = $_POST["parola"];
    }



    if (isset($username) && isset($parola)) {

        //kullanıcı adı kısmı için unique değerini seçtik 
        //yani sonuç 0 ya da bir döner
        $secim = "SELECT * FROM kullanicilar WHERE kullanici_adi = '$username'";
        $calistir = mysqli_query($baglanti, $secim);
        $kayitsayisi = mysqli_num_rows($calistir); // ya 0 ya da 1

        if ($kayitsayisi > 0) {
            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $hashlisifre = $ilgilikayit["parola"];

            if (password_verify($parola, $hashlisifre)) {
                session_start();
                $_SESSION["kullanici_adi"] = $ilgilikayit["kullanici_adi"];
                $_SESSION["email"] = $ilgilikayit["email"];
                header("location:profile.php");
            } else {
                echo '<div class="alert alert-danger" role="alert">
            Parola yanlış
      </div>';
            }
        } else {
            echo '<div class="alert alert-danger" role="alert">
        Kullanıcı adı bulunamadı
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Stuff</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

    <!--
- custom css link
-->
    <link rel="stylesheet" href="./assets/css/style-prefix.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>


    <div class="container p-5">
        <div class="card p-5">
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1">Kullanıcı Adı</label>
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


                <button type="submit" name="giris" class="btn btn-primary">Giris Yap</button>
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