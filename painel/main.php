<?php
    if(isset($_GET['logout'])){
        Painel::logout();
    }
?>

<!DOCTYPE html>
<html lang="en, pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL;?>css/style.css">
    <title>Painel de controle</title>
</head>

<body>

    <!--Barra Lateral Esquerda-->
    <aside>
        <div class="box-usuario">
            <div class="avatar-usuario">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="nome-usuario">
                <h2><?php echo $_SESSION['nome'];?></h2>
                <p><?php echo pegaCargo($_SESSION['cargo']);?></p>
            </div>
        </div>
    </aside>

    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="logout">
                <a href="<?php echo INCLUDE_PATH_PAINEL;?>?logout">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </a>
            </div>
            <!--logout-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </header>
</body>

</html>