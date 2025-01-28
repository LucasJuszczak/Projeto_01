<div class="box-content">

<h2><i class ="fas ga-edit"></i> Editar usuário</h2>

<form method ="post"enctype="multipart/form-data">
    <?php
        if(isset($_POST['acao'])){
            Painel::messageToUser('sucesso', 'Atualizado com sucesso!');
        }
        ?>
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="Nome" required value="<?php echo $_SESSION['nome']; ?>">
    </div>
    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" name="password" required value="<?php echo $_SESSION['password']; ?>">
    </div>
    <div class="form-group">
        <label for="imagem">Imagem:</label>
        <input type="file" name="imagem">
        <input type="hidden" name="imagem_atual" value ="<?php echo $_SESSION['img']; ?>">>
    </div>
    <div class="form-group">
        <input type="submit" name="acao" value="Atualizar">
    </div>
    </div>
    
</form>