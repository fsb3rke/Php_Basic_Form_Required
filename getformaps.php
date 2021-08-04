<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="getformaps.css">
    <title>Document</title>
</head>
<body>
    <?php

    $var1err = "null username";
    $var2err = "null password";
    $var3err = "null email";
    $varErrcolor = "<span style='color: red;'>";

    $var1 = $_POST["username"];
    $var2 = $_POST["password"];
    $var3 = $_POST["email"]."@gmail.com";





    ?>
    <div class="jumbotron text-center hobaa">
    <h1>
        <?php
            if (empty($_POST["username"])) {
                $var1 = $var1err;
            }
        if ($var1 == $var1err) {
            echo "Hoş geldin ".$varErrcolor.$var1."</span>";
        }
        else {
            echo "Hoş geldin ".$var1;
        }
        ?>
        <br>
    </h1>
    </div>
    <div class="jumbotron text-center hobaa">
    <h1>
        <?php
            if (empty($_POST["password"])) {
                $var2 = $var2err;
            }
        if ($var2 == $var2err) {
            echo "Şifren: ".$varErrcolor.$var2."</span>";
        }
        else {
            echo "Şifren: ".$var2;
        }
        ?>
        <br>
    </h1>
    </div>
    <div class="jumbotron text-center hobaa">
    <h1>
    <?php
        if (empty($_POST["email"])) {
            $var3 = $var3err;
        }
        if ($var3 == $var3err) {
            echo "Email adresin: ".$varErrcolor.$var3."</span>";
        }
        else {
            echo "Email adresin: ".$var3;
        }
        ?>
        <br>
    </h1>
    </div>
</div>
</body>
</html>