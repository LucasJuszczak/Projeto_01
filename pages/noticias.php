<section class="header-noticias">
    <div class="center">
        <h2><i class="fa-solid fa-bell"></i></h2>
        <h2>Acompanhe as últimas notícias do portal</h2>
    </div>
    <!--center-->
</section>

<section class="container-portal">
    <div class="center">
        <div class="sidebar">
            <div class="box-content-sidebar">
                <h3><i class="fas fa-search"></i> Pesquisar: </h3>
                <form action="">
                    <input type="text" name="busca" placeholder="Digite..." required>
                    <input type="submit" name="acao" value="Pesquisar">
                </form>
            </div>
            <!--box-content-sidebar-->

            <div class="box-content-sidebar">
                <h3><i class="fas fa-list"></i> Selecione a Categoria: </h3>
                <form action="">
                    <select name="categoria" id="">
                        <option value="esportes">Esportes</option>
                        <option value="geral">Geral</option>
                    </select>
                </form>
            </div>
            <!--box-content-sidebar-->

            <div class="box-content-sidebar">
                <h3><i class="fas fa-user"></i> Sobre o autor: </h3>
                <div class="text-center">
                    <div>
                        <img src="<?php echo INCLUDE_PATH; ?>assets/img/local-trabalho.png">
                    </div>
                    <?php echo $infoSite['nome_autor']; ?>
                    <?php echo $infoSite['descricao']; ?>
                </div><!--text-center-->
            </div><!--box-content-sidebar-->
        </div><!--sidebar-->

        <div class="conteudo-portal">
            <div class="header-conteudo-portal">
                
            </div>
        </div>
    </div>
</section>