
function inicialPopUp(popUpID){
    const popUp = document.getElementById(popUpID);
    console.log(popUp);
    popUp.classList.add('mostrar');
}

const botao = document.querySelector('.clickSugestao');
botao.addEventListener('click', function(){
    inicialPopUp('sugestaoProduto');
});

