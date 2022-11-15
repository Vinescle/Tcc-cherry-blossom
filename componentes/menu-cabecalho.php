<?php
$sqlCategoriasMenu = "SELECT * FROM tb_categoria";
$resultadoCategoriasMenu = mysqli_query($conexao, $sqlCategoriasMenu);
?>

<header class="cabecalho">
    <div class="cabecalho-logo">
        <a href="<?php echo $rota; ?>"><img src="<?php echo $rota; ?>/assets/imagens/logo.png" class="logo-menu"></a>
        <div class="cabecalho-menu">
            <div class="dropdown">
                <a class="limpa-botao toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                    <img src="<?php echo $rota; ?>/assets/icones/menu.svg" class="icones-cabecalho_menu" id="checkboxMenu">
                    <h2 class="botao-menu">MENU</h2>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <label class="titulo-categorias">Categorias</label>

                    <?php
                    while ($resultado = mysqli_fetch_array($resultadoCategoriasMenu)) {
                        $sqlSubCategoriasMenu = "SELECT * FROM tb_sub_categoria WHERE fk_id_categoria = $resultado[id_categoria]";
                        $resultadoSubCategoriasMenu = mysqli_query($conexao, $sqlSubCategoriasMenu);
                    ?>
                        <li class="dropdown hover-dropdown dropend w-100">
                            <a class="titulo-texto toggle" href='<?php echo $rota . '/pesquisa.php?categoria=' . $resultado['id_categoria'] ?>'> <?php echo $resultado['nome_categoria'] ?></a>
                            <ul class="dropdown-menu" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translateX(6.1rem);">
                                <?php
                                while ($resultadoSub = mysqli_fetch_array($resultadoSubCategoriasMenu)) {
                                ?>
                                    <li><a class="titulo-texto" href="<?php echo $rota . '/pesquisa.php?categoria=' . $resultado['id_categoria'] . '&sub_categorias[]=' . $resultadoSub['id_sub_categoria'] ?>"><?php echo $resultadoSub['nome_sub_categoria'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <div class="cabecalho-pesquisa">
        <form action="<?php echo $rota ?>/pesquisa.php" method="GET">
            <div class="formulario-pesquisa">
                <button class="botao-enviar" type="submit"></button>
                <input required class="botao-pesquisa" type="TEXT" name="pesquisaProduto">
            </div>
        </form>
        <a href="<?php echo $rota; ?>/perfil/carrinho.php">
            <img src="<?php echo $rota; ?>/assets/icones/carrinho.svg" class="icones-cabecalho icone-cabecalho_pesquisa">
        </a>
        <div class="dropdown-center">
            <button class="limpa-botao" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                <img src="<?php echo $rota; ?>/assets/icones/pessoa.svg" class="icones-cabecalho icone-cabecalho_pesquisa" id="checkboxUser">

            </button>
            <ul class="dropdown-menu">
                <label class="titulo-login">Perfil</label>
                <?php
                if (!isset($_SESSION['logado'])) {
                ?>
                    <label class="titulo-texto"><a href="<?php echo $rota; ?>/login.php">Login</a></label>
                    <label class="titulo-texto"><a href="<?php echo $rota; ?>/cadastro.php">Registrar</a></label>
                <?php
                } else {
                ?>
                    <label class="titulo-texto"><a href="<?php echo $rota; ?>/perfil/index.php">Minha conta</a></label>
                    <label class="titulo-texto"><a href="<?php echo $rota; ?>/perfil/historico.php">Minhas compras</a></label>
                    <?php
                    if ($_SESSION['permissao'] == 1) {
                    ?>
                        <label class="titulo-texto"><a href="<?php echo $rota; ?>/home-adm/index.php">Painel</a></label>
                    <?php
                    }
                    ?>
                    <label class="titulo-texto"><a href="<?php echo $rota; ?>?deslogar=1">Sair</a></label>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</header>