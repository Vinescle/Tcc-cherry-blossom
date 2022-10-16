<div class="menu-lateral">
    <div class="icones-principais">
        <a href="<?php echo $rota; ?>/perfil">
            <ion-icon name="person-outline" id="home" class="icones-menu <?php echo $page == 'home' ? 'selecionado' : '' ?>"></ion-icon>
        </a>

        <a href="<?php echo $rota; ?>/perfil/historico.php">
            <ion-icon name="file-tray-full-outline" id="color-palette" class="icones-menu <?php echo $page === 'historico' ? 'selecionado' : '' ?>"></ion-icon>
        </a>

        <a href="<?php echo $rota; ?>/perfil/carrinho.php">
            <ion-icon name="cart-outline" id="pricetag" class="icones-menu <?php echo $page === 'carrinho' ? 'selecionado' : '' ?>"></ion-icon>
        </a>
    </div>

    <a href="https://api.whatsapp.com/send?1=pt_BR&phone=554898384729">
        <ion-icon name="logo-whatsapp" id="settings" class="icone-engrenagem <?php echo $page === 'configuracoes' ? 'selecionado' : '' ?>"></ion-icon>
    </a>
</div>