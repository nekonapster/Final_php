<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- IMPORT CSS -->
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>login</title>
</head>
<body class="bdy_login">
    <?php
    echo "PAGINA LOGIN: OK"
    ?>

<div class="formularioLogin">
    <form class="formulario" action="" method="POST">
        <br>
        <label for="">Usuario</label>
        <br>
        <input type="text" name="usu">
        <br>
        <br>
        <label for="">Pass</label>
        <br>
        <input type="password" name="pass">
        <br>
        <input class="enviarLog" type="submit">
    </form>
    
</div> 

    <br>
    <a class="click" href="./grid.html">click</a>

</body>
</html>