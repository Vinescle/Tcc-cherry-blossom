<?php
$page = 'home';
include '../conexao.php';
include '../verifica-logado.php';

// session_start();
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM tb_usuarios WHERE id_usuario = $id";
$resultado = mysqli_query($conexao, $sql);
$resultadoInfo = mysqli_fetch_array($resultado);

if ($resultadoInfo['fk_id_endereco'] != 0) {
    $sqlEndereco = "SELECT * FROM tb_endereco where fk_id_usuario = $id LIMIT 1";
    $resultado = mysqli_query($conexao, $sqlEndereco);
    $resultadoInfoEndereco = mysqli_fetch_array($resultado);
}

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
    include('../componentes/menu-cabecalho.php');
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
                    <form action="./dados basicos/alteraDados.php" id="form-perfil" method="POST" onsubmit="return validateForm()">
                        <div class="conjunto-dadosBasicos">
                            <div class="conjunto-divs">
                                <div class="w-160">
                                    <label class="input-texto">Nome Completo</label>
                                    <div class="input-container">
                                        <button class="botao-input">
                                            <ion-icon class="icone-input" name="person-circle-outline"></ion-icon>
                                        </button>
                                        <input class="input-conjunto" type="text" name="nome_usuario" value="<?php echo $resultadoInfo['nome_usuario'] ?>" id="input-nome" required>
                                    </div>
                                </div>

                                <div class="w-160">
                                    <label class="input-texto">E-mail</label>
                                    <div class="input-container">
                                        <button class="botao-input">
                                            <ion-icon class="icone-input" name="mail-outline"></ion-icon>
                                        </button>
                                        <input class="input-conjunto" type="text" name="email_usuario" value="<?php echo $resultadoInfo['email_usuario'] ?>" required>
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
                                        <input id="cpf-perfil" class="input-conjunto" type="text" name="cpf_usuario" value="<?php echo $resultadoInfo['cpf_usuario'] ?>" minlength="14" required>
                                    </div>
                                </div>

                                <div class="w-160">
                                    <label class="input-texto">Telefone</label>
                                    <div class="input-container">
                                        <button class="botao-input">
                                            <ion-icon class="icone-input" name="call-outline"></ion-icon>
                                        </button>
                                        <input id="telefone" onkeyup="mascaraFone(event)" class="input-conjunto" type="text" required name="telefone_usuario" maxlength="15" value="<?php echo $resultadoInfo['telefone'] ? $resultadoInfo['telefone'] : '' ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-salvar">
                            <button type="submit" class="botao-texto  min-width-botao centralizar margem-topo">
                                Salvar dados alterados
                            </button>
                        </div>
                    </form>

                </div>

                <div class="agrupamento">
                    <div class="label-dadosBasicos">
                        <label class="label-titulo">Alterar Senha</label>
                    </div>
                    <form action="./senha/alteraSenha.php" method="POST">
                        <input type="text" style="display: none;" name="email_usuario" value="<?php echo $resultadoInfo['email_usuario'] ?>">

                        <div class="conjunto-dadosBasicos">
                            <div class="conjunto-divs">
                                <?php
                                if (isset($_GET['senhaNova'])) {
                                    if ($_GET['senhaNova'] == 0) {
                                ?>
                                        <div class="w-160">
                                            <label class="input-texto">Senha Atual</label>
                                            <div class="input-container">
                                                <button class="botao-input" style="background-color: red;">
                                                    <ion-icon class="icone-input" name="lock-closed-outline" style="background-color: red;"></ion-icon>
                                                </button>
                                                <input class="input-conjunto" type="text" name="senhaAtual" style="border-color: red;" placeholder="*Senha incorreta*">
                                            </div>
                                        </div>

                                        <div class="w-160">
                                            <label class="input-texto">Nova Senha</label>
                                            <div class="input-container">
                                                <button class="botao-input" style="background-color: red;">
                                                    <ion-icon class="icone-input" name="lock-open-outline" style="background-color: red;"></ion-icon>
                                                </button>
                                                <input class="input-conjunto" type="text" name="novaSenha" style="border-color: red;">
                                            </div>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <script>
                                            setTimeout(function() {
                                                alert('Sua senha foi alterada com Sucesso!');
                                            }, 400);
                                        </script>

                                        <div class="w-160">
                                            <label class="input-texto">Senha Atual</label>
                                            <div class="input-container">
                                                <button class="botao-input">
                                                    <ion-icon class="icone-input" name="lock-closed-outline"></ion-icon>
                                                </button>
                                                <input class="input-conjunto" type="text" name="senhaAtual">
                                            </div>
                                        </div>

                                        <div class="w-160">
                                            <label class="input-texto">Nova Senha</label>
                                            <div class="input-container">
                                                <button class="botao-input">
                                                    <ion-icon class="icone-input" name="lock-open-outline"></ion-icon>
                                                </button>
                                                <input class="input-conjunto" type="text" name="novaSenha">
                                            </div>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class="w-160">
                                        <label class="input-texto">Senha Atual</label>
                                        <div class="input-container">
                                            <button class="botao-input">
                                                <ion-icon class="icone-input" name="lock-closed-outline"></ion-icon>
                                            </button>
                                            <input class="input-conjunto" type="text" name="senhaAtual">
                                        </div>
                                    </div>

                                    <div class="w-160">
                                        <label class="input-texto">Nova Senha</label>
                                        <div class="input-container">
                                            <button class="botao-input">
                                                <ion-icon class="icone-input" name="lock-open-outline"></ion-icon>
                                            </button>
                                            <input class="input-conjunto" type="text" name="novaSenha">
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="input-salvar">
                            <button type="submit" class="botao-texto  min-width-botao centralizar margem-topo">
                                Salvar nova senha
                            </button>
                        </div>
                    </form>

                </div>

                <div class="agrupamento">
                    <div class="label-dadosBasicos">
                        <label class="label-titulo">Endereço</label>
                    </div>
                    <form action="./endereco/endereco.php" method="POST">
                        <input type="text" name="fk_id_endereco" value="<?php echo $resultadoInfo['fk_id_endereco'] ?>" style="display: none;">
                        <div class="conjunto-dadosBasicos">
                            <div class="conjunto-divs">
                                <div class="w-160">
                                    <label class="input-texto">Nome do Recebedor</label>
                                    <div class="input-container">
                                        <button class="botao-input">
                                            <ion-icon class="icone-input" name="person-circle-outline"></ion-icon>
                                        </button>
                                        <input class="input-conjunto" type="text" name="nomeRecebedor" value="<?php echo isset($resultadoInfoEndereco) ?  $resultadoInfoEndereco['nm_recebedor'] : " "; ?>">
                                    </div>
                                </div>

                                <div class="w-160">
                                    <label class="input-texto">CEP</label>
                                    <div class="input-container">
                                        <button class="botao-input">
                                            <ion-icon class="icone-input" name="location-outline"></ion-icon>
                                        </button>
                                        <input class="input-conjunto" type="text" name="CEP" value="<?php echo isset($resultadoInfoEndereco) ?  $resultadoInfoEndereco['cep'] : " "; ?>">
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
                                        <select class="input-conjunto input-tiktok" name="idestado" id="estado" onchange="listarCidades(this)">
                                            <?php
                                            if ($resultadoInfo['fk_id_endereco'] == 0) {
                                            ?>
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
                                        <select class="input-conjunto input-tiktok" name="idcidade" id="cidade">
                                            <?php
                                            if ($resultadoInfo['fk_id_endereco'] == 0) {
                                            ?>
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
                                        <input class="input-conjunto" type="text" name="bairro" value="<?php echo isset($resultadoInfoEndereco) ?  $resultadoInfoEndereco['bairro'] : " "; ?>">
                                    </div>
                                </div>

                                <div class="w-160">
                                    <label class="input-texto">Rua</label>
                                    <div class="input-container">
                                        <button class="botao-input">
                                            <ion-icon class="icone-input" name="footsteps-outline"></ion-icon>
                                        </button>
                                        <input class="input-conjunto" type="text" name="rua" value="<?php echo isset($resultadoInfoEndereco) ?  $resultadoInfoEndereco['rua'] : " "; ?>">
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
                                        <input class="input-conjunto" type="text" name="numero" value="<?php echo isset($resultadoInfoEndereco) ?  $resultadoInfoEndereco['numero'] : " "; ?>">
                                    </div>
                                </div>

                                <div class="w-160">
                                    <label class="input-texto">Complemento</label>
                                    <div class="input-container">
                                        <button class="botao-input">
                                            <ion-icon class="icone-input" name="flag-outline"></ion-icon>
                                        </button>
                                        <input class="input-conjunto" type="text" name="complemento" value="<?php echo isset($resultadoInfoEndereco) ?  $resultadoInfoEndereco['complemento'] : " "; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-salvar">
                            <button type="submit" class="botao-texto  min-width-botao centralizar margem-topo">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/marcaraTelefone.js"></script>
    <?php
    include('../imports.php');
    ?>
    <script>
        const selectEstado = document.querySelector("#estado");
        const selectCidade = document.querySelector("#cidade");

        const estadoPreenchido = "<?php echo !empty($resultadoInfoEndereco['estado']) ? $resultadoInfoEndereco['estado'] : '' ?>";
        const cidadePreenchida = "<?php echo !empty($resultadoInfoEndereco['cidade']) ? $resultadoInfoEndereco['cidade'] : '' ?>";

        async function listarEstados() {
            const response = await axios.get(
                "https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome"
            );
            response.data.forEach((estado) => {
                const option = document.createElement("option");
                option.innerHTML = estado.nome;
                option.value = estado.sigla;
                if (estadoPreenchido != "") {
                    if (estado.sigla == estadoPreenchido) {
                        option.setAttribute("selected", "selected");
                    }
                }
                selectEstado.appendChild(option);
            });
        }

        async function listarCidades(estado) {
            const response = await axios.get(
                `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estado.value}/municipios?orderBy=nome`
            );
            selectCidade.innerHTML = '';

            response.data.forEach((cidade) => {
                const option = document.createElement("option");
                option.innerHTML = cidade.nome;
                option.value = cidade.nome;
                if (cidadePreenchida != "") {
                    if (cidade.nome == cidadePreenchida) {
                        option.setAttribute("selected", "selected");
                    }
                }
                selectCidade.appendChild(option);
            });
        }

        window.onload = async function() {
            await listarEstados();
            if (cidadePreenchida != "") {
                await listarCidades({
                    value: estadoPreenchido
                });
            } else {
                await listarCidades({
                    value: "AC"
                });
            }
        }

        function validateForm() {
            event.preventDefault()
            var errors = false;
            if (document.getElementById("cpf-perfil").value.length != 14) {
                errors = true;
                alert("CPF deve conter 14 caracteres!");
            } else {
                errors = false;
            }
            if (errors == false) {
                document.getElementById("form-perfil").submit();
            }
        }

        $("#input-nome").mask('A', {
            translation: {
                A: {
                    pattern: /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ'\s]+$/g,
                    recursive: true
                },
            },
        });
        $("#cpf").mask('000.000.000-00', {
            reverse: true
        });
    </script>
</body>

</html>