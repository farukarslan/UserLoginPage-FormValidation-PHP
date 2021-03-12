<html>
    <head>
        <title>PHP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
        <br/><center><h1>PHP - HTML Forms</h1></center><br/>
        <?php
            $msg = "";
            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                if ($_POST['username'] == 'user' &&  $_POST['password'] == '1234') {
                    $msg = "Kullanıcı: " . $_POST['username'] . " başarılı bir şekilde bağlanmıştır.";
                }
                else{
                    $msg = "Login işlemi başarısız.";
                }
            }
        ?>

        <div class = "container" style="width: 400px;">
            <!--htmlspecialchars(): Arama kısmında özel karakterler kullanımını engeller(Hacklenme olayını engellemek için)-->
         <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "Kullanıcı Adı" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Şifre" required><br/>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         <p><?php print($msg); ?></p>
      </div> 
    </body>
</html>