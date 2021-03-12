<html>
    <head>
        <title>PHP</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
        <br/><center><h1>PHP - HTML Forms - Form Doğrulama</h1></center><br/>
        <?php
            $msg = "";
            $nameErr = $emailErr = $genderErr = $websiteErr = "";
            $name = $email = $gender = $comment = $website = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["website"]) || empty($_POST["gender"])) {
                    if(empty($_POST["name"]))$nameErr = "İsim gerekli";
                    if(empty($_POST["email"]))$emailErr = "Email gerekli";
                    if(empty($_POST["website"]))$websiteErr = "Website gerekli";
                    if(empty($_POST["gender"]))$genderErr = "Cinsiyet gerekli";
                }
                else{
                    $msg = $_POST["name"] . " Tarafından giriş yapıldı.";
                }
                if (empty($_POST["comment"])) {
                    $comment = "";
                }
                else{
                    $msg = $_POST["name"] . " Tarafından giriş yapıldı.";
                }
            }
        ?>

        <div class = "container" style="width: 400px;">
            <!--htmlspecialchars(): Arama kısmında özel karakterler kullanımını engeller(Hacklenme olayını engellemek için)-->
         <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
            <input type = "text" class = "form-control" 
               name = "name" placeholder = "Full name" 
               autofocus><span class="error">* <?php echo $nameErr; ?></span></br>
            <input type = "text" class = "form-control"
               name = "email" placeholder = "E-mail" > <span class="error">* <?php echo $emailErr; ?></span<br/>
            <input type = "text" class = "form-control"
               name = "website" placeholder = "Website" > <span class="error">* <?php echo $websiteErr; ?></span<br/><br/>
            <textarea name="comment" rows="5" cols="40" placeholder="Comment"></textarea><br/><br/>
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <span class="error">* <?php echo $genderErr; ?></span><br/><br/>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "submit">Gönder</button>
         </form>
			
         <p><?php print($msg); ?></p>
      </div> 
    </body>
</html>