<!DOCTYPE html>
<html lang="en, pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css">
    <title>Painel de controle</title>
</head>

<body>
    <div class="box-login">
        <?php
        if (isset($_POST['acao'])) {
            $user = $_POST['user'];
            $password = $_POST['password'];
            $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.usuarios`
                    WHERE  user = ? AND password = ?");
            $sql->execute(array($user, $password));
            if($sql ->rowCount() == 1);
                $_SESSION['login'] == true;
                $_SESSION['user'] == $user;
                $_SESSION['password'] == $password;
                header('location: ' .INCLUDE_PATH_PAINEL);
                die();
        }else{
            echo '<div class="erro-box"> Usuário ou senha incorretos!</div>';
        }
    
    
        ?>

        <form action="" method="post">
            <input type="text" name="user" placeholder="Login" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="acao" value="Logar">
        </form>
    </div>
</body>

</html>