<?php
include './conexao.php';

// session_start();

$verifica = false;

if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $nascimento = $_SESSION['nascimento'];
    $cpf = $_SESSION['cpf'];
    $receberEmails = $_SESSION['receberEmails'];
    $verifica = true;
} else {
    $nome = "";
    $email = "";
    $senha = "";
    $nascimento = "";
    $cpf = "";
    $receberEmails = "";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/reset.css">
    <title>Cherry Blossom - Cadastro</title>
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/base-adm.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/cadastro.css" rel="stylesheet">
</head>

<body onload="checar()">
    <main>
        <div class="conteiner">
            <div class="conteiner-titulo">
                <p>Cadastro</p>
            </div>
            <form name="form" action="cadastroGrava.php" method="post" style="width: 80%;">
                <div class="input">
                    <div>
                        <label class="input-text">Nome Completo</label>
                    </div>
                    <div class="input-container">
                        <button type="button" class="botao-input login-button-input">
                            <ion-icon class="icone-input md hydrated fonte-2-rem" name="person-circle-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                        </button>
                        <input class="input-conjunto fonte-2-rem login-input" type="text" value='<?php echo $nome ?>' name="nome" required autocomplete="disabled">
                    </div>
                </div>
                <div class="input">
                    <div>
                        <label class="input-text">E-mail</label>
                    </div>
                    <div class="input-container">
                        <button type="button" class="botao-input login-button-input">
                            <ion-icon class="icone-input md hydrated fonte-2-rem" name="mail-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                        </button>
                        <input class="input-conjunto fonte-2-rem login-input" type="email" value='<?php echo $email ?>' name="email" required>
                    </div>
                </div>
                <div class="input">
                    <div>
                        <label class="input-text">Senha</label>
                    </div>
                    <div class="input-container" style="position: relative;">
                        <button type="button" class="botao-input login-button-input">
                            <ion-icon class="icone-input md hydrated fonte-2-rem" name="lock-open-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                        </button>
                        <input id="senha" class="input-conjunto fonte-2-rem login-input" type="password" value='<?php echo $senha ?>' name="senha" required minlength="8" maxlength="35">
                        <button class="input-eyes" type="button">
                            <ion-icon id="senhaIcon" class="icon-eyes" name="eye-off-outline"></ion-icon>
                            <!-- <ion-icon  class="icon-eyes" name="eye-outline"></ion-icon> -->
                        </button>
                    </div>
                </div>
                <div class="input">
                    <?php

                    if ($verifica) {
                    ?>
                        <div>
                            <label class="input-text">Confirmar Senha</label>
                        </div>
                        <div type="button" class="input-container">
                            <button class="botao-input login-button-input" style="background-color: red !important;">
                                <ion-icon class="icone-input md hydrated fonte-2-rem" name="lock-closed-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                            </button>
                            <input class="input-conjunto fonte-2-rem login-input" type="password" name="senhaConfirma" style="border: 1px solid red;" placeholder="Senha incorreta!!" autofocus required>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div>
                            <label class="input-text">Confirmar Senha</label>
                        </div>
                        <div class="input-container">
                            <button type="button" class="botao-input login-button-input">
                                <ion-icon class="icone-input md hydrated fonte-2-rem" name="lock-closed-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                            </button>
                            <input class="input-conjunto fonte-2-rem login-input" type="password" name="senhaConfirma" required>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="input">
                    <div>
                        <label class="input-text">Data de Nascimento</label>
                    </div>
                    <div class="input-corpo">
                        <div class="input-container">
                            <button type="button" class="botao-input login-button-input">
                                <ion-icon class="icone-input md hydrated fonte-2-rem" name="calendar-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                            </button>
                            <input style="font-family: 'Inter';" class="input-conjunto fonte-2-rem login-input" type="date" value='<?php echo $nascimento ?>' name="nascimento" required minlength="10" maxlength="10">
                        </div>
                    </div>
                    <div class="input">
                        <div>
                            <label class="input-text">CPF</label>
                        </div>
                        <div class="input-container">
                            <button type="button" class="botao-input login-button-input">
                                <ion-icon class="icone-input md hydrated fonte-2-rem" name="document-text-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                            </button>
                            <input id="cpf" class="input-conjunto fonte-2-rem login-input" type="text" value='<?php echo $cpf ?>' name="cpf" minlength="14" maxlength="14" required>
                        </div>
                    </div>
                    <div class="div-checkbox">
                        <div class="checkbox">
                            <input type="checkbox" name="receberEmails">
                            <span>Desejo receber emails sobre futuras ofertas e novos produtos.</span>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="Termos" required>
                            <span>Declaro que li e concordo com os <a href="#">termos de uso </a>e <a href="#">políticas de<br>
                                    privacidade.</a></span>
                        </div>
                    </div>
                    <div class="form-end">
                        <div class="form-end-submit">
                            <input type="submit" value="Cadastrar">
                        </div>
                        <div class="form-end-text">
                            <p>Já tem uma conta? Faça <a href="<?php echo $rota ?>/login.php">login</a></p>
                        </div>
                    </div>
            </form>
        </div>
        <?php
        if ($verifica) {
        ?>
            <script src="../js/checagemSenha.js"></script>
        <?php
        }
        ?>
        <script src="<?php echo $rota; ?>/assets/js/senhaIcon.js"></script>
        <script src="<?php echo $rota; ?>/assets/js/mascaraData.js"></script>
        <script src="<?php echo $rota; ?>/assets/js/mascaraSenha.js"></script>
        <script src="<?php echo $rota; ?>/assets/js/checagemSenha.js"></script>
        <?php
        include('./imports.php');
        ?>
    </main>
</body>
<?php
session_destroy();
?>

</html>