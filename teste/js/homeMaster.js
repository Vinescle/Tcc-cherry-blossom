// botoes 
const botaoHome = document.getElementById('home');
const botaoPaleta = document.getElementById('color-palette');
const botaoTagPreco = document.getElementById('pricetag');
const botaoBalao = document.getElementById('balloon');
const botaoConfig = document.getElementById('settings');

//conteudos
const homeAdm = document.getElementById('homeAdm');
const homeAdmCategoria = document.getElementById('homeAdmCategoria');
const homeAdmConfig = document.getElementById('homeAdmConfig');
const homeAdmGerencia = document.getElementById('homeAdmGerencia');
const homeAdmMarca = document.getElementById('homeAdmMarca');


// FAZER O DO BOTÃO CONFIG


document.addEventListener('click',function(e){
    console.log(e.target.id);
    
})

botaoPaleta.addEventListener('click',function(){
    homeAdmGerencia.classList.remove('hidden');
    homeAdm.classList.add('hidden');
    homeAdmCategoria.classList.add('hidden');
    homeAdmConfig.classList.add('hidden');
    homeAdmMarca.classList.add('hidden');


    botaoPaleta.classList.add('icone-selecionado');
    botaoHome.classList.remove('icone-selecionado');
    botaoTagPreco.classList.remove('icone-selecionado');
    botaoBalao.classList.remove('icone-selecionado');
    botaoConfig.classList.remove('icone-selecionado');
})

botaoHome.addEventListener('click',function(){
    homeAdmGerencia.classList.add('hidden');
    homeAdm.classList.remove('hidden');
    homeAdmCategoria.classList.add('hidden');
    homeAdmConfig.classList.add('hidden');
    homeAdmMarca.classList.add('hidden');


    botaoPaleta.classList.remove('icone-selecionado');
    botaoHome.classList.add('icone-selecionado');
    botaoTagPreco.classList.remove('icone-selecionado');
    botaoBalao.classList.remove('icone-selecionado');
    botaoConfig.classList.remove('icone-selecionado');
})

botaoTagPreco.addEventListener('click',function(){
    homeAdmGerencia.classList.add('hidden');
    homeAdm.classList.add('hidden');
    homeAdmCategoria.classList.remove('hidden');
    homeAdmConfig.classList.add('hidden');
    homeAdmMarca.classList.add('hidden');


    botaoPaleta.classList.remove('icone-selecionado');
    botaoHome.classList.remove('icone-selecionado');
    botaoTagPreco.classList.add('icone-selecionado');
    botaoBalao.classList.remove('icone-selecionado');
    botaoConfig.classList.remove('icone-selecionado');
})

botaoBalao.addEventListener('click',function(){
    homeAdmGerencia.classList.add('hidden');
    homeAdm.classList.add('hidden');
    homeAdmCategoria.classList.add('hidden');
    homeAdmConfig.classList.add('hidden');
    homeAdmMarca.classList.remove('hidden');


    botaoPaleta.classList.remove('icone-selecionado');
    botaoHome.classList.remove('icone-selecionado');
    botaoTagPreco.classList.remove('icone-selecionado');
    botaoBalao.classList.add('icone-selecionado');
    botaoConfig.classList.remove('icone-selecionado');
})

