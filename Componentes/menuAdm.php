<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .icones-menu{
            transition: 0.4s;
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
    </style>
</head>
<body>
<div class="menu">
    <div class="icones-principais">
        <a href="./homeAdm.php"><ion-icon name="home-outline" id="home" class="icones-menu"></ion-icon></a>
        
        <a href="./homeAdmGerencia.php"><ion-icon name="color-palette-outline" id="color-palette" class="icones-menu"></ion-icon></a>
        

        <ion-icon name="pricetag-outline" class="icones-menu"></ion-icon>

        <ion-icon name="balloon-outline" class="icones-menu"></ion-icon>
    </div>

    <ion-icon name="settings-outline" class="icone-engrenagem"></ion-icon>
</div>
</body>
</html>


