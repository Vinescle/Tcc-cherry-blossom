<div class="menu-lateral">
    <div class="icones-principais">
        <a href="<?php echo $rota; ?>/home-adm">
            <ion-icon name="home-outline" id="home" class="icones-menu <?php echo $page == 'home' ? 'selecionado' : '' ?>"></ion-icon>
        </a>

        <a href="<?php echo $rota; ?>/home-adm/gerenciar.php">
            <ion-icon name="color-palette-outline" id="color-palette" class="icones-menu <?php echo $page === 'gerenciar' ? 'selecionado' : '' ?>"></ion-icon>
        </a>

        <a href="<?php echo $rota; ?>/home-adm/categorias.php">
            <ion-icon name="pricetag-outline" id="pricetag" class="icones-menu <?php echo $page === 'categorias' ? 'selecionado' : '' ?>"></ion-icon>
        </a>

        <a href="<?php echo $rota; ?>/home-adm/marcas.php">
            <ion-icon name="balloon-outline" id="balloon" class="icones-menu <?php echo $page === 'marcas' ? 'selecionado' : '' ?>"></ion-icon>
        </a>

        <a href="<?php echo $rota; ?>/home-adm/encomendas.php">
            <ion-icon name="bag-outline" id="bag" class="icones-menu <?php echo $page === 'encomendas' ? 'selecionado' : '' ?>"></ion-icon>
        </a>
    </div>

    <a href="<?php echo $rota; ?>/home-adm/configuracoes.php">
        <ion-icon name="settings-outline" id="settings" class="icone-engrenagem <?php echo $page === 'configuracoes' ? 'selecionado' : '' ?>"></ion-icon>
    </a>
</div>