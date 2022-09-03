const checkboxMenu = document.getElementById('checkboxMenu');
const checkboxLogin = document.getElementById('checkboxUser');
const menuR = document.getElementsByClassName('categorias-menu');

var contagemLogin = 0;
var contagemMenu = 0;

const menu = checkboxMenu.getAttribute('value');
const login = checkboxLogin.getAttribute('value');

checkboxLogin.addEventListener('click', function(){
    contagemLogin++;
    if(contagemLogin == 2){
        checkboxLogin.checked = false;
        contagemLogin = 0;
    }else{
        checkboxMenu.checked = false;
    }
})

checkboxMenu.addEventListener('click', function(){
    contagemMenu++;
    if(contagemMenu == 2){
        checkboxMenu.checked = false;
        menuR.classList.remove('robertinho');
        contagemMenu = 0;
    }else{
        checkboxMenu.checked = true;
        menuR.classList.add('robertinho');
    }
})

document.addEventListener('click',function (e) {
    
    console.log(e.target.className);
    if(e.target.className != 'icones-cabecalho_menu' || 'categorias-checkbox'){
        checkboxLogin.checked = false;
        checkboxMenu.checked = false;
        menuR.classList.remove('robertinho');

        
        contagemLogin = 0;
        contagemMenu = 0;
    }
});



