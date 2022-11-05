<?php
$page = 'carrinho';
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
    <link href="<?php echo $rota; ?>/assets/css/pages/perfil/carrinho.css" rel="stylesheet">
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
                        <label class="label-titulo">Frete</label>
                    </div>

                    <div class="conjunto-dadosBasicos espacamento-enderecos espaco-entre">
                        <div class="conjunto-divs">
                            <div class="conjunto-label-input">
                                <label class="input-texto">Endereço de destino:</label>
                            </div>

                            <?php
                            if ($resultadoInfo['fk_id_endereco'] != 0) {
                            ?>
                                <div class="conjunto-label-input" style="margin-left: 10px;">
                                    <p class="texto-detalhes">Recebedor: <?php echo $resultadoInfoEndereco['nm_recebedor'] ?></p>
                                    <p class="texto-detalhes"><?php echo $resultadoInfoEndereco['cep'] ?> - <?php echo $resultadoInfoEndereco['rua'] ?>, <?php echo $resultadoInfoEndereco['numero'] ?> - <?php echo $resultadoInfoEndereco['complemento'] ?>, <?php echo $resultadoInfoEndereco['bairro'] ?>, <?php echo $resultadoInfoEndereco['cidade'] ?> - <?php echo $resultadoInfoEndereco['estado'] ?></p>
                                </div>
                            <?php
                            } else {
                            ?>
                                <a class="botao-texto min-width-botao margem-topo" href="<?php echo $rota ?>/perfil">
                                    Adicionar Endereço
                                </a>
                            <?php
                            }
                            ?>
                        </div>

                        <div class="enderecos" id="enderecos">
                        </div>

                    </div>

                    <div class="label-dadosBasicos">
                        <label class="label-titulo">Produtos</label>
                    </div>

                    <div class="conjunto-dadosBasicos" id="carrinho-container">

                    </div>

                    <div class="input-salvar">
                        <a href="#" id="botao-comprar" onclick="(function (data){
                                     if(data.href == '<?php echo $rota ?>/perfil/carrinho.php#')
                                        alert('Selecione uma forma de entrega!');
                                   }
                        )(this);">
                            <button class="botao-texto  min-width-botao centralizar margem-topo">
                                Continuar
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('../imports.php');
    ?>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        const containerProdutosCarrinho = document.querySelector("#carrinho-container");

        async function setaCarrinho() {
            const response = await axios.get("<?php echo $rota ?>/api/carrinho/index.php");
            containerProdutosCarrinho.innerHTML = response.data;
            checaCalcularCarrinho();
        }
        setaCarrinho();

        async function reduzQuantidade(id) {
            const response = await axios.get(`<?php echo $rota ?>/api/carrinho/reduzQuantidade.php?id=${id}`);
            containerProdutosCarrinho.innerHTML = response.data;
            checaCalcularCarrinho();
        }

        async function adicionaQuantidade(id) {
            const response = await axios.get(`<?php echo $rota ?>/api/carrinho/adicionaQuantidade.php?id=${id}`);
            containerProdutosCarrinho.innerHTML = response.data;
            checaCalcularCarrinho();
        }

        async function deletaProduto(id) {
            const response = await axios.get(`<?php echo $rota ?>/api/carrinho/deletaProduto.php?id=${id}`);
            containerProdutosCarrinho.innerHTML = response.data;
            checaCalcularCarrinho();
        }

        async function calcularFrete() {
            const fretes = await axios.get("<?php echo $rota ?>/api/carrinho/calcula-frete.php?carrinho=1")

            const enderecosContainer = document.querySelector('#enderecos');

            enderecosContainer.innerHTML = '';
            Object.entries(fretes.data).forEach(([key, frete]) => {
                const center = document.createElement("div");
                center.classList.add("center");

                const tabelaConteudo = document.createElement("div");
                tabelaConteudo.classList.add("tabela-checkbox_conteudo");
                center.appendChild(tabelaConteudo);

                const input = document.createElement("input");
                input.id = "frete" + frete.Codigo;
                input.value = frete.Valor;
                input.type = "checkbox";

                const label = document.createElement("label");
                label.setAttribute("for", "frete" + frete.Codigo);
                label.classList.add("center");

                input.name = (frete.Codigo == 40010 ? 'Sedex' : "Pac");
                input.setAttribute("onclick", "apenasUm(this)");

                tabelaConteudo.appendChild(input);
                tabelaConteudo.appendChild(label);

                const labelOpcoes = document.createElement("label");
                labelOpcoes.classList.add("texto-label");

                labelOpcoes.innerHTML = `R$${frete.Valor} - ${(frete.Codigo == 40010 ? 'Sedex' : "Pac")} (1 a ${frete.PrazoEntrega} dias úteis)`

                center.appendChild(labelOpcoes);

                enderecosContainer.appendChild(center);
            });
        }

        async function checaCalcularCarrinho() {
            <?php
            if ($resultadoInfo['fk_id_endereco'] != 0) {
            ?>
                await calcularFrete();
            <?php
            }
            ?>
        }

        function apenasUm(checkbox) {
            const checkboxes = document.querySelectorAll('input[type=checkbox]');
            checkboxes.forEach((item) => {
                if (item !== checkbox) item.checked = false
            });

            let valorTotal = parseFloat(document.querySelector("#total-carrinho").value);
            valorTotal += parseFloat(checkbox.value.replace(',', '.').replace(' ', ''));

            document.querySelector('#preco-total-exibicao').innerHTML = "Total: R$" + valorTotal.toFixed(2).toString().replaceAll('.', ',')
            const botao = document.querySelector("#botao-comprar");
            botao.href = "<?php echo $rota; ?>/componentes/checkot-carrinho.php?frete=" + checkbox.name;
        }
    </script>
</body>

</html>