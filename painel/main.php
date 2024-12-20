<?php
if (isset($_GET['logout'])) {
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
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
    <title>Painel de controle</title>
</head>

<body>

    <!--Barra Lateral Esquerda-->
    <aside>
        <div class="box-usuario">
            <?php if ($_SESSION['img'] == '') { ?>
            <div class="avatar-usuario">
                <i class="fa-solid fa-user"></i>
            </div>
            <?php } else { ?>

            <div class="imagem-usuario">
                <img src="<?php echo INCLUDE_PATH_PAINEL; ?>uploads/<?php echo $_SESSION['img']; ?>" alt="">
            </div>
            <?php } ?>

            <div class="nome-usuario">
                <h2><?php echo $_SESSION['nome']; ?></h2>
                <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
            </div>
        </div>

        <div class="items-menu">
            <h2>Cadastro</h2>
            <a href="">Slide</a>
            <a href="<?php echo INCLUDE_PATH_PAINEL;?>cadastrar-depoimento">Depoimentos</a>
            <a href="">Serviços</a>
            <h2>Gestão</h2>
            <a href="">Slide</a>
            <a href="">Depoimentos</a>
            <a href="">Serviços</a>
            <h2>Usuário</h2>
            <a href="">Editar</a>
            <a href="">Adicionar</a>
            <h2>Configuração</h2>
            <a href="">Editar</a>
        </div>
    </aside>

    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="logout">
                <a href="<?php echo INCLUDE_PATH_PAINEL; ?>?logout">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </a>
            </div>
            <!--logout-->

            <div class="home-btn">
                <a href="<?php echo INCLUDE_PATH_PAINEL; ?>">
                    <i class="fa-solid fa-house" aria-hidden="true"></i>
                </a>
            </div>
            <!--home-btn-->

            <div class="clear"></div>
        </div>
        <!--center-->
    </header>

    <div class="content">
        <?php
            Painel::loadPage();
        ?>
    </div>
    <!--content-->

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Jquery -->

    <script src="<?php echo INCLUDE_PATH_PAINEL; ?>js/main.js"></script>
</body>

</html>