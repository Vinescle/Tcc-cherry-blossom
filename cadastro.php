<?php
include './conexao.php';

// session_start();

$verificaSenha = false;
$verificaEmail = false;

if (isset($_GET['senhaIncorreta'])) {
    $verificaSenha = true;
}

if (isset($_GET['emailDuplicado'])) {
    $verificaEmail = true;
}

if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $nascimento = $_SESSION['nascimento'];
    $cpf = $_SESSION['cpf'];
    $receberEmails = $_SESSION['receberEmails'];
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
    <link href="<?php echo $rota; ?>/assets/imagens/logo.png" rel="shortcut icon" />
    <title>Cherry Blossom - Cadastro</title>
    <link href="<?php echo $rota; ?>/assets/css/base.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/base-adm.css" rel="stylesheet">
    <link href="<?php echo $rota; ?>/assets/css/cadastro.css" rel="stylesheet">
</head>

<body>
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
                        <button type="button" disabled class="botao-input login-button-input">
                            <ion-icon class="icone-input md hydrated fonte-2-rem" name="person-circle-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                        </button>
                        <input class="input-conjunto fonte-2-rem login-input" type="text" value='<?php echo $nome ?>' id='input-nome' name="nome" required autocomplete="disabled">
                    </div>
                </div>
                <div class="input">
                    <div>
                        <label class="input-text">E-mail</label>
                    </div>
                    <div class="input-container">
                        <button type="button" disabled class="botao-input login-button-input" <?php echo $verificaEmail ? "style='background-color:red !important;'" : "" ?>>
                            <ion-icon class="icone-input md hydrated fonte-2-rem" name="mail-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                        </button>
                        <input class="input-conjunto fonte-2-rem login-input" type="email" value='<?php echo $email ?>' name="email" required>
                    </div>
                    <?php echo $verificaEmail ? "<div class='mensagem-erro'>Email já cadastrado'</div>" : "" ?>
                </div>
                <div class="input">
                    <div>
                        <label class="input-text">Senha</label>
                    </div>
                    <div class="input-container" style="position: relative;">
                        <button type="button" disabled class="botao-input login-button-input">
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
                    <div>
                        <label class="input-text">Confirmar Senha</label>
                    </div>
                    <div class="input-container">
                        <button type="button" disabled class="botao-input login-button-input" <?php echo $verificaSenha ? 'style="background-color: red !important;"' : '' ?>>
                            <ion-icon class="icone-input md hydrated fonte-2-rem" name="lock-closed-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                        </button>
                        <input class="input-conjunto fonte-2-rem login-input" type="password" value="<?php echo isset($_SESSION['senhaConfirma']) ? $_SESSION['senhaConfirma'] : ""  ?>" name="senhaConfirma" id="senhaConfirma" required>
                    </div>
                    <?php echo $verificaSenha ? "<div class='mensagem-erro'>Confirmação de senha incorreta!</div>" : "" ?>
                </div>
                <div class="input">
                    <div>
                        <label class="input-text">Data de Nascimento</label>
                    </div>
                    <div class="input-corpo">
                        <div class="input-container">
                            <button type="button" disabled class="botao-input login-button-input">
                                <ion-icon class="icone-input md hydrated fonte-2-rem" name="calendar-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                            </button>
                            <input style="font-family: 'Inter';" class="input-conjunto fonte-2-rem login-input" type="date" value='<?php echo $nascimento ?>' name="nascimento" required minlength="10" maxlength="10">
                        </div>
                    </div>
                </div>
                <div class="input">
                    <div>
                        <label class="input-text">CPF</label>
                    </div>
                    <div class="input-container">
                        <button type="button" disabled class="botao-input login-button-input" <?php echo isset($_GET['cpfIncorreto']) ? "style='background-color:red !important;'" : "" ?>>
                            <ion-icon class="icone-input md hydrated fonte-2-rem" <?php echo isset($_GET['cpfIncorreto']) ? "style='background-color:red !important;'" : "" ?> name="document-text-outline" role="img" aria-label="person-circle-outline"></ion-icon>
                        </button>
                        <input id="cpf" class="input-conjunto fonte-2-rem login-input" <?php echo isset($_GET['cpfIncorreto']) ? "style='border: 1px solid red !important;' placeholder='CPF inválido'" : "" ?> type="text" value='<?php echo $cpf ?>' name="cpf" required>
                    </div>
                </div>
                <div class="div-checkbox">
                    <div class="checkbox">
                        <input type="checkbox" name="receberEmails">
                        <span>Desejo receber e-mails sobre futuras ofertas e novos produtos.</span>

                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="Termos" required>
                        <span>Declaro que li e concordo com os <a href="<?php echo $rota; ?>/rodape-sobre/termos.php" target="_blank">termos de uso </a>e <a href="<?php echo $rota; ?>/rodape-sobre/politicaPrivacidade.php" target="_blank">políticas de<br>
                                privacidade.</a></span>
                    </div>
                </div>
                <div class=" form-end">
                    <div class="form-end-submit">
                        <input type="submit" value="Cadastrar">
                    </div>
                    <div class="form-end-text">
                        <p>Já tem uma conta? Faça <a href="<?php echo $rota ?>/login.php">login</a></p>
                    </div>
                </div>
            </form>
        </div>
        <script src="<?php echo $rota; ?>/assets/js/senhaIcon.js"></script>
        <?php
        include('./imports.php');
        ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script>
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
    </main>
</body>
<?php
$_SESSION['nome'] = "";
$_SESSION['email'] = "";
$_SESSION['senha'] = "";
$_SESSION['nascimento'] = "";
$_SESSION['cpf'] = "";
$_SESSION['receberEmails'] = "";
session_destroy();
?>

</html>