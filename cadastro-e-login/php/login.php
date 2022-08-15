<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/reset.css">
    <title>Cherry Blossom - Cadastro</title>
    <link rel="stylesheet" href="../style/login.css">
</head>

<body>
    <main>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <div class="conteiner">
            <div class="conteiner-titulo">
                <p>Login</p>
            </div>
            <form action="verificaLogin.php" method="post">
                <div class="input">
                    <div>
                        <label class="input-text">E-mail</label>
                    </div>
                    <div class="input-corpo">
                        <button class="input-button" type="submit" disabled>
                            <ion-icon class="icon-config carta" name="mail-outline"></ion-icon>
                        </button>
                        <input class="config-tamanho" type="email" name="email">
                    </div>
                </div>
                <div class="input">
                    <div>
                        <label class="input-text">Senha</label>
                    </div>
                    <div class="input-corpo">
                        <button class="input-button" disabled>
                            <ion-icon class="icon-config" name="lock-open-outline"></ion-icon>
                        </button>
                        <input class="config-tamanho" type="password" name="senha">
                    </div>
                </div>
                <div class="form-end">
                    <div class="form-end-submit">
                        <input type="submit" value="Entrar" name="senha">
                    </div>
                    <div class="form-end-text">
                        <p>Ainda não tem uma conta? <a href="#">Cadastre-se</a></p>
                    </div>
                </div>
            </form>
        </div>
    </main>

</body>

</html>