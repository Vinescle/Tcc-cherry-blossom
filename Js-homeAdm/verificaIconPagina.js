const input = document.getElementById('pagina-verificacao');
const valorPagina = input.getAttribute('value');

if(valorPagina == 2){
    const icon = document.getElementById('color-palette');
    icon.classList.add('icone-selecionado');
}else if(valorPagina == 1){
    const icon = document.getElementById('home');
    icon.classList.add('icone-selecionado');
}