
function inicialPopUp(popUpID){
    const popUp = document.getElementById(popUpID);
    console.log(popUp);
    popUp.classList.add('mostrar');
    document.addEventListener('click', (e) => {
        console.log(e.target.id);
        if(e.target.id == popUpID || e.target.id == 'fechar'){
            popUp.classList.remove('mostrar');
        }
    })

}

const botao = document.querySelector('.clickSugestao');
botao.addEventListener('click', function(){
    inicialPopUp('sugestaoProduto');
});

const fecha = document.getElementById('fechar');
const popUp = document.getElementById('popUpID');
fecha.addEventListener('click', function(){
    popUp.classList.remove('mostrar');
});

