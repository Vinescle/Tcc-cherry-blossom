<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Rodape</title>
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

        a:hover{
            color: #000000;
        }

        .rodape {
            margin: 200px 0px 0px 0px;
            padding: 30px 0px 0px 0px;
            border-top: 1px solid #A3B3CC;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10%;
        }

        .coluna-um {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .logo{
            max-width: 98px;
        }

        .coluna-um-link a {
            color: #FFFFFF;

        }


        .coluna-um-link {
            padding: 5px 15px;
            background-color: #FF83EF;
            border-radius: 85px;
            transition: 0.20s;

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

        .texto-coluna-dois{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .coluna-tres {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .conteudo-coluna-tres{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .noticias-coluna-tres{
            margin: 50px 0px 0px 0px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;

        }

        .noticias-coluna-tres input{
            width:418px; 
            height:38px;
            background-color: #FFEFFD;
            border: 1px solid #FF83EF;
            border-radius: 105px;
            padding: 0px 0px 0px 15px;
            font-family: 'Inter', sans-serif;
            font-size: 18px;
            color: #323232;
            outline: none;

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
            <h3 class="coluna-um-link"><a href="#">Sugestão de Produto</a></h3>
            <h3 class="coluna-um-link"><a href="#">Fale com o Vendedor</a></h3>
            <h4>Acompanhe nossas redes sociais</h4>
            <div class="redes-sociais">
                <ion-icon class="icone" name="logo-instagram"></ion-icon>
                <ion-icon class="icone" name="logo-facebook"></ion-icon>
                <ion-icon class="icone" name="logo-twitter"></ion-icon>
                <ion-icon class="icone" name="logo-tiktok"></ion-icon>
            </div>
        </div>
        <div class="coluna-dois">
            <div class="titulo-coluna-dois">
                <h3>Ajuda e Suporte</h3>
            </div>
            <div class="texto-coluna-dois">
                <p><a href="#">Como comprar</a></p>
                <p><a href="#">Cuidados Com os Produtos</a></p>
                <p><a href="#">Visualização 3D</a></p>
                <p><a href="#">O que é Papercraft?</a></p>
                <p><a href="#">O que é Hama Beads?</a></p>
                <p><a href="#">O que é Macramê?</a></p>
                <p><a href="#">O que é miçanga?</a></p>
            </div>
        </div>
        <div class="coluna-tres">
            <div class="titulo-coluna-tres">
                <h3>Institucional</h3>
            </div>
            <div class="conteudo-coluna-tres">
                <p><a href="#">Sobre Nós</a></p>
                <p><a href="#">Política de Privacidade</a></p>
                <p><a href="#">Termos de Uso e Navegação</a></p> 
            </div>
            <div class="noticias-coluna-tres">
                <h4>SE INSCREVA PARA RECEBER NOVIDADES!</h4>
                <input type="email" name="email-noticias" placeholder="Digite seu email">
            </div>
        </div>
    </footer>
</body>

</html>