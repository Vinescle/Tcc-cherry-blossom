<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Rodape</title>
    <link href="../imagens/site/Logo_PNG_normal.png" rel="shortcut icon" />
    <style>
    
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;700&display=swap');

        * {
            margin: 0px;
            padding: 0px;
            color: #323232;
            font-family: 'Inter', sans-serif;
            font-size: 24px;
            text-decoration: none;
        }

        a:hover {
            color: #000000;
        }

        .rodape {
            margin: 0px 0px 0px 0px;
            padding: 5px 130px 30px 130px;
            border-top: 1px solid #A3B3CC;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            gap: 5%;
        }

        .coluna-um {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        .coluna-um-redes-sociais {
            font-size: 15px;
            font-weight: 700;
        }

        .logo {
            max-width: 70px;
        }

        .coluna-um-link a {
            color: #FFFFFF;
        }


        .coluna-um-link {
            padding: 5px 15px;
            background-color: #FF83EF;
            border-radius: 85px;
            transition: 0.20s;
            margin: 4px 0 0 0;

            font-size: 15px;
            font-weight: 600;
        }

        .coluna-um-link:hover {
            background-color: #EC56D9;
        }

        .icone {
            height: 35px;
        }

        .coluna-dois {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .texto-coluna-dois {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .coluna-tres {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .conteudo-coluna-tres {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .noticias-coluna-tres {
            margin: 0px 0px 0px 0px;
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .noticias-coluna-tres input {
            width: 300px;
            height: 28px;
            background-color: #FFEFFD;
            border: 1px solid #FF83EF;
            border-radius: 105px;
            padding: 0px 0px 0px 15px;
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            color: #323232;
            outline: none;

        }

        .colunas-titulos {
            font-size: 17px;
            font-weight: 700;
            margin: 0px;
        }

        .texto-colunas {
            font-size: 15px;
            margin: 0px;
            font-weight: 500;
        }

        .texto-footer-input {
            font-size: 14px;
            font-weight: 700;
            margin: 0px;
        }

        .coluna-institucional {
            font-size: 17px;
            font-weight: 700;
            margin: 0 0 15px 0;
        }

        

        /* .noticias-coluna-tres input:hover{
            background-color: #FFEFFD;
            border: 1px solid #FF83EF;
            border-radius: 105px;
            font-family: 'Inter', sans-serif;
            color: #323232;
        } */
    </style>
</head>

<body>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <footer class="rodape">
        <div class="coluna-um">
            <img class="logo" src="./imagens/site/Logo_PNG_normal.png" alt="logo-cherry-blossom" width="98px">
            <h3 class="coluna-um-link"><a class="clickSugestao" href="#">SUGESTÃO DO PRODUTO</a></h3>
            <h3 class="coluna-um-link"><a href="#">FALE COM O VENDEDOR</a></h3>
            <h4 class="coluna-um-redes-sociais">Acompanhe nossas redes sociais</h4>
            <div class="redes-sociais">
                <ion-icon class="icone" name="logo-instagram"></ion-icon>
                <ion-icon class="icone" name="logo-facebook"></ion-icon>
                <ion-icon class="icone" name="logo-twitter"></ion-icon>
                <ion-icon class="icone" name="logo-tiktok"></ion-icon>
            </div>
        </div>
        <div class="coluna-dois">
            <div class="titulo-coluna-dois">
                <h3 class="colunas-titulos">AJUDA E SUPORTE</h3>
            </div>
            <div class="texto-coluna-dois">
                <p class="texto-colunas"><a href="#">Como comprar</a></p>
                <p class="texto-colunas"><a href="#">Cuidados Com os Produtos</a></p>
                <p class="texto-colunas"><a href="#">O que é Papercraft?</a></p>
                <p class="texto-colunas"><a href="#">O que é Hama Beads?</a></p>
                <p class="texto-colunas"><a href="#">O que é Macramê?</a></p>
                <p class="texto-colunas"><a href="#">O que é miçanga?</a></p>
            </div>
        </div>
        <div class="coluna-tres">
            <div class="titulo-coluna-tres">
                <h3 class="coluna-institucional">INSTITUCIONAL</h3>
            </div>
            <div class="conteudo-coluna-tres">
                <p class="texto-colunas"><a href="#">Sobre Nós</a></p>
                <p class="texto-colunas"><a href="#">Política de Privacidade</a></p>
                <p class="texto-colunas"><a href="#">Termos de Uso e Navegação</a></p>
            </div>
            <div class="noticias-coluna-tres">
                <h4 class="texto-footer-input">SE INSCREVA PARA RECEBER NOVIDADES!</h4>
                <input type="email" name="email-noticias" placeholder="Digite seu email">
            </div>
        </div>
    </footer>
</body>

</html>