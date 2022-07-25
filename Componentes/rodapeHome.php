<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Rodape</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;400;500;700&display=swap');
        *{
            margin: 0px;
            padding: 0px;
            color: #323232;
            font-family: 'Inter', sans-serif;
        }
        .rodape{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 180px;
        }

        .coluna-um{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .coluna-um-link a{
            text-decoration: none;
            color: #FFFFFF;


        }

        .coluna-um-link{
            padding: 5px 15px;
            background-color: #FF83EF;
            border-radius: 85px;

        }

        .icone{
            height: 35px;
        }

    </style>
</head>
<body>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <footer class="rodape">
        <div class="coluna-um">
            <img src="../imagens/site/Logo_PNG_normal.png" alt="logo-cherry-blossom" width="98px">
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
            <h3>Ajuda e Suporte</h3>
            <p>Como comprar</p>
            <p>Cuidados Com os Produtos</p>
            <p>Visualização 3D</p>
            <p>O que é Papercraft?</p>
            <p>O que é Hama Beads?</p>
            <p>O que é Macramê?</p>
            <p>O que é miçanga?</p>
        </div>
        <div class="coluna-tres">
            <h3>Institucional</h3>
            <p>Sobre Nós</p>
            <p>Política de Privacidade</p>
            <p>Termos de Uso e Navegação</p>
            <h3>Se inscreva para receber novidades!</h3>
            <input type="TEXT" name="email-noticias">
        </div>
    </footer>
</body>
</html>