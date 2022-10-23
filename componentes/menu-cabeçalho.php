<?php
$sqlCategoriasMenu = "SELECT * FROM tb_categoria";
$resultadoCategoriasMenu = mysqli_query($conexao, $sqlCategoriasMenu);
?>

<header class="cabecalho">
    <div class="cabecalho-logo">
        <a href="<?php echo $rota; ?>"><img src="<?php echo $rota; ?>/assets/imagens/logo.png" class="logo-menu"></a>
        <div class="cabecalho-menu">
            <div class="dropdown-center">
                <button class="limpa-botao" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                    <img src="<?php echo $rota; ?>/assets/icones/menu.svg" class="icones-cabecalho_menu" id="checkboxMenu">
                    <h2 class="botao-menu">MENU</h2>
                </button>
                <ul class="dropdown-menu">
                    <label class="titulo-categorias">Categorias</label>
                    <?php
                    while ($resultado = mysqli_fetch_array($resultadoCategoriasMenu)) {
                    ?>
                        <label class="titulo-texto"><a href='#<?php echo $resultado['id_categoria'] ?>'> <?php echo $resultado['nome_categoria'] ?></a></label>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="cabecalho-pesquisa">
        <form>
            <div class="formulario-pesquisa">
                <button class="botao-enviar" type="submit">
                </button>
                <input class="botao-pesquisa" type="TEXT">
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
                    if ($_SESSION['permissao'] == 0) {
                    ?>
                        <label class="titulo-texto"><a href="<?php echo $rota; ?>/perfil/index.php">Minha conta</a></label>
                        <label class="titulo-texto"><a href="<?php echo $rota; ?>/perfil/historico.php">Minhas compras</a></label>
                        <label class="titulo-texto"><a href="<?php echo $rota; ?>?deslogar=1">Sair</a></label>
                    <?php
                    } else {
                    ?>
                        <label class="titulo-texto"><a href="<?php echo $rota; ?>/perfil/historico.php">Painel</a></label>
                        <label class="titulo-texto"><a href="<?php echo $rota; ?>?deslogar=1">Sair</a></label>
                    <?php
                    }
                    ?>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</header>