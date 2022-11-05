<footer class="rodape">
    <div class="coluna-um">
        <img class="logo" src="<?php echo $rota; ?>/assets/imagens/logo.png" alt="logo-cherry-blossom" width="98px">
        <h3 class="coluna-um-link"><a class="clickSugestao" type="button" data-bs-toggle="modal" data-bs-target="#modalSugestao">SUGESTÃO DO PRODUTO</a></h3>
        <h3 class="coluna-um-link"><a href="<?php echo $configAdm['url_whatsapp']; ?>">FALE COM O VENDEDOR</a></h3>
        <h4 class="coluna-um-redes-sociais">Acompanhe nossas redes sociais</h4>
        <div class="redes-sociais">
            <a href="<?php echo $configAdm['url_instagram']; ?>">
                <ion-icon class="icone" name="logo-instagram"></ion-icon>
            </a>
            <a href="<?php echo $configAdm['url_facebook']; ?>">
                <ion-icon class="icone" name="logo-facebook"></ion-icon>
            </a>
            <a href="<?php echo $configAdm['url_twitter']; ?>">
                <ion-icon class="icone" name="logo-twitter"></ion-icon>
            </a>
            <a href="<?php echo $configAdm['url_tiktok']; ?>">
                <ion-icon class="icone" name="logo-tiktok"></ion-icon>
            </a>

        </div>
    </div>
    <div class="coluna-dois">
        <div class="titulo-coluna-dois">
            <h3 class="colunas-titulos">AJUDA E SUPORTE</h3>
        </div>
        <div class="texto-coluna-dois">
            <p class="texto-colunas"><a href="<?php echo $rota; ?>/rodape-sobre/oQueE.php">O que é Papercraft?</a></p>
            <p class="texto-colunas"><a href="<?php echo $rota; ?>/rodape-sobre/oQueE.php">O que é Hama Beads?</a></p>
            <p class="texto-colunas"><a href="<?php echo $rota; ?>/rodape-sobre/oQueE.php">O que é Macramê?</a></p>
            <p class="texto-colunas"><a href="<?php echo $rota; ?>/rodape-sobre/oQueE.php">O que é miçanga?</a></p>
        </div>
    </div>
    <div class="coluna-tres">
        <div class="titulo-coluna-tres">
            <h3 class="coluna-institucional">INSTITUCIONAL</h3>
        </div>
        <div class="conteudo-coluna-tres">
            <p class="texto-colunas"><a href="<?php echo $rota; ?>/rodape-sobre/sobre-nos.php">Sobre Nós</a></p>
            <p class="texto-colunas"><a href="<?php echo $rota; ?>/rodape-sobre/politicaPrivacidade.php">Política de Privacidade</a></p>
            <p class="texto-colunas"><a href="<?php echo $rota; ?>/rodape-sobre/termos.php">Termos de Uso e Navegação</a></p>
        </div>
        <div class="noticias-coluna-tres">
            <h4 class="texto-footer-input">SE INSCREVA PARA RECEBER NOVIDADES!</h4>
            <form class="form-enviar-email" action="./componentes/emailnoticias.php" method="POST">
                <input style="color: #323232;" type="email" name="email-noticias" placeholder="Digite seu email">
                <!-- <input class="botao-enviar-email" type="submit" value="Cadastrar-se"> -->
            </form>
        </div>
    </div>
</footer>

<div class="modal fade" id="modalSugestao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="popup-conteudo">
                    <div class="popup-fechar"><button class="popup-icone-close">
                            <ion-icon id='fechar' name="close-outline">
                        </button></ion-icon>
                    </div>
                    <div class="popup-config">
                        <div class="popup-cabecalho">
                            <div class="popup-icone">
                                <ion-icon class="popup-icone-svg" name="brush-outline"></ion-icon>
                            </div>
                            <p class="popup-titulo">Sugestão de Produto</p>
                            <p class="popup-texto">Compartilhe suas ideias para temas e produtos!</p>
                        </div>
                        <form class="popup-form" action="<?php echo $rota ?>/enviaSugestaoProduto.php" method="POST">
                            <input class="config-tamanho" type="text" name="sugestaoProduto" placeholder="Digite sua sugestão">
                            <input class="popup-form-button" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>