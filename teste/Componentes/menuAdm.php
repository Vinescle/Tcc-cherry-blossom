<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        .icone{
            font-size: 35px;
            color: #EC55D9;
        }
        .icones-menu{
            transition: 0.4s;
            border-radius: 10px;
        }
        .icones-menu:hover{
            background-color: #EC55D9;
            color:white;
        }

        .icone-engrenagem{
            transition: 0.4s;
        }

        .icone-engrenagem:hover{
            background-color: #EC55D9;
            color:white;
        }

        .botao-icone{
            cursor: pointer;
            background-color: #FFCEF9;
            padding: 8px 10px;
            border-radius: 50px;
            border: none;
        }
    </style>
</head>
<body>
<div class="menu">
    <div class="icones-principais">
        <button id="home" class="botao-icone icone-selecionado" ><ion-icon name="home-outline" class="icone"></ion-icon></button>

        <button id="color-palette" class="botao-icone" ><ion-icon name="color-palette-outline" class="icone"></ion-icon></button>
       
        <button id="pricetag" class="botao-icone"><ion-icon name="pricetag-outline" class="icone"></ion-icon></button>

        <button id="balloon" class="botao-icone "><ion-icon name="balloon-outline" class="icone"></ion-icon></button>
       

    </div>

        <button id="settings" class="botao-icone"><ion-icon name="settings-outline" ></ion-icon></button>
        <!-- class="icone-engrenagem" -->

</div>
</body>
</html>


