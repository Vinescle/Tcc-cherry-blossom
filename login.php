<?php
include './conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cherry Blossom - Cadastro</title>
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/base-adm.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/cadastro.css" rel="stylesheet">
</head>

<body>
    <main style="display: flex; align-items: center; justify-content: center; height: 100vh;">
        <div class="conteiner">
            <div class="conteiner-titulo">
                <p>Login</p>
            </div>
            <form action="./verificaLogin.php" method="post" style="width: 80%;">
                <div class="input w-100">
                    <div>
                        <label class="input-text">E-mail</label>
                    </div>
                    <div class="input-container">
                        <button class="botao-input login-button-input">
                            <ion-icon class="icone-input md hydrated fonte-2-rem" name="mail-outline" role="img" aria-label="person circle outline"></ion-icon>
                        </button>
                        <input class="input-conjunto fonte-2-rem login-input" type="email" name="email">
                    </div>
                </div>
                <div class="input w-100">
                    <div>
                        <label class="input-text">Senha</label>
                    </div>
                    <div class="input-container">
                        <button class="botao-input login-button-input">
                            <ion-icon class="icone-input md hydrated fonte-2-rem" name="lock-open-outline" role="img" aria-label="person circle outline"></ion-icon>
                        </button>
                        <input class="input-conjunto fonte-2-rem login-input" type="password" name="senha">
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