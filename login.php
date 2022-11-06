<?php
include './conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cherry Blossom - Cadastro</title>
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/cadastro.css" rel="stylesheet">
</head>

<body>
    <main style="display: flex; align-items: center; justify-content: center; height: 100vh;">
        <div class="conteiner">
            <div class="conteiner-titulo">
                <p>Login</p>
            </div>
            <form action="./verificaLogin.php" method="post">
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
                        <input type="submit" value="Entrar">
                    </div>
                    <div class="form-end-text">
                        <p>Ainda não tem uma conta? <a href="<?php echo $rota; ?>/cadastro.php">Cadastre-se</a></p>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php
    include('./imports.php');
    ?>
</body>

</html>