<?php
include '../conexao/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Dados do Perfil</title>

    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/estilo-home.css" rel="stylesheet">
    <link href="../css/homePerfil/homePerfilDados.css" rel="stylesheet">
</head>

<body>
    <?php
    session_start();

    if (isset($_SESSION['logado'])) {
        include '../Componentes/cabecalhoHomeLogado.php';
    } else if (!isset($_SESSION['logado'])) {
        include '../Componentes/cabecalhoHome.php';
    }
    ?>

    <div class="conteudo-principal">
        <div class="agrupamento">
            <div class="label-dadosBasicos">
                <label class="label-titulo">Dados Básicos</label>
            </div>

            <div class="conjunto-dadosBasicos">
                <div class="conjunto-divs">
                    <div class="conjunto-informacoes">
                        <label class="input-texto">Nome do Produto</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="person-circle-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>

                    <div class="conjunto-informacoes">
                        <label class="input-texto">E-mail</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="mail-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>
                </div>

                <div class="conjunto-divs">
                    <div class="conjunto-informacoes">
                        <label class="input-texto">CPF</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="newspaper-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>

                    <div class="conjunto-informacoes">
                        <label class="input-texto">Telefone</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="call-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
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
                    <div class="conjunto-informacoes">
                        <label class="input-texto">Senha Atual</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="lock-closed-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>

                    <div class="conjunto-informacoes">
                        <label class="input-texto">Nova Senha</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="lock-open-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
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
                    <div class="conjunto-informacoes">
                        <label class="input-texto">Nome Completo</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="person-circle-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>

                    <div class="conjunto-informacoes">
                        <label class="input-texto">CEP</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="location-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>
                </div>

                <div class="conjunto-divs">
                    <div class="conjunto-informacoes">
                        <label class="input-texto">Estado</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="map-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>

                    <div class="conjunto-informacoes">
                        <label class="input-texto">Cidade</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="business-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>
                </div>

                <div class="conjunto-divs">
                    <div class="conjunto-informacoes">
                        <label class="input-texto">Bairro</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="trail-sign-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>

                    <div class="conjunto-informacoes">
                        <label class="input-texto">Rua</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="footsteps-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>
                </div>

                <div class="conjunto-divs">
                    <div class="conjunto-informacoes">
                        <label class="input-texto">Número</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="home-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>

                    <div class="conjunto-informacoes">
                        <label class="input-texto">Complemento</label>
                        <div class="conjunto-icone-input">
                            <ion-icon class="botao-icone" name="flag-outline"></ion-icon>
                            <input class="input-label-nome" type="text" name="nomeProduto">
                        </div>
                    </div>
                </div>
            </div>

            <div class="input-salvar">
                <button class="botao-salvar">
                    <input type="submit" value="Salvar">
                    Salvar
                </button>
            </div>
        </div>

        <script src="./js/verificaIconPagina.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>