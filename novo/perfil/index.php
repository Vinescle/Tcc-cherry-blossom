<?php
$page = 'home';
include '../conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo $rota; ?>/assets/imagens/logo.png" rel="shortcut icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/base-adm.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/home.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/pages/perfil/index.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-cabecalho.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/componentes/menu-lateral.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/pages/home-adm/index.css" rel="stylesheet">

    <title>Cherry Blossom - Adm</title>
</head>

<body>
    <?php
    include('../componentes/menu-cabeçalho.php');
    ?>

    <div class="coluna">
        <?php
        include('../componentes/menu-lateral-usuario.php');
        ?>

        <div class="conteudo-principal">
            <div class="main">
                <div class="agrupamento">
                    <div class="label-dadosBasicos">
                        <label class="label-titulo">Dados Básicos</label>
                    </div>

                    <div class="conjunto-dadosBasicos">
                        <div class="conjunto-divs">
                            <div class="w-160">
                                <label class="input-texto">Nome Completo</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="person-circle-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>

                            <div class="w-160">
                                <label class="input-texto">E-mail</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="mail-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>
                        </div>

                        <div class="conjunto-divs">
                            <div class="w-160">
                                <label class="input-texto">CPF</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="newspaper-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>

                            <div class="w-160">
                                <label class="input-texto">Telefone</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="call-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="agrupamento">
                    <div class="label-dadosBasicos">
                        <label class="label-titulo">Alterar Senha</label>
                    </div>

                    <div class="conjunto-dadosBasicos">
                        <div class="conjunto-divs">
                            <div class="w-160">
                                <label class="input-texto">Senha Atual</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="lock-closed-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>

                            <div class="w-160">
                                <label class="input-texto">Nova Senha</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="lock-open-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="agrupamento">
                    <div class="label-dadosBasicos">
                        <label class="label-titulo">Endereço</label>
                    </div>

                    <div class="conjunto-dadosBasicos">
                        <div class="conjunto-divs">
                            <div class="w-160">
                                <label class="input-texto">Nome do Recebedor</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="person-circle-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>

                            <div class="w-160">
                                <label class="input-texto">CEP</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="location-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>
                        </div>

                        <div class="conjunto-divs">
                            <div class="w-100">
                                <label class="input-texto">Estado</label>
                                <div class="input-container">
                                    <button class="botao-input" disabled="">
                                        <ion-icon class="icone-input md hydrated" name="map-outline"></ion-icon>
                                    </button>
                                    <select class="input-conjunto input-tiktok" name="idcategoria">
                                        <option selected></option>
                                        <?php
                                        while ($resultado = mysqli_fetch_array($resultadoCategorias)) {
                                        ?>
                                            <option value="<?php echo $resultado['id_categoria']; ?>">
                                                <?php echo $resultado['nome_categoria']; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="w-100">
                                <label class="input-texto">Cidade</label>
                                <div class="input-container">
                                    <button class="botao-input" disabled="">
                                        <ion-icon class="icone-input md hydrated" name="business-outline"></ion-icon>
                                    </button>
                                    <select class="input-conjunto input-tiktok" name="idcategoria">
                                        <option selected></option>
                                        <?php
                                        while ($resultado = mysqli_fetch_array($resultadoCategorias)) {
                                        ?>
                                            <option value="<?php echo $resultado['id_categoria']; ?>">
                                                <?php echo $resultado['nome_categoria']; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="conjunto-divs">
                            <div class="w-160">
                                <label class="input-texto">Bairro</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="trail-sign-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>

                            <div class="w-160">
                                <label class="input-texto">Rua</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="footsteps-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>
                        </div>

                        <div class="conjunto-divs">
                            <div class="w-160">
                                <label class="input-texto">Número</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="home-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>

                            <div class="w-160">
                                <label class="input-texto">Complemento</label>
                                <div class="input-container">
                                    <button class="botao-input">
                                        <ion-icon class="icone-input" name="flag-outline"></ion-icon>
                                    </button>
                                    <input class="input-conjunto" type="text" name="nomeProduto">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-salvar">
                        <button type="submit" class="botao-texto  min-width-botao centralizar margem-topo">
                            Salvar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('../imports.php');
    ?>
</body>

</html>