const senhaConfirma = document.getElementById("senhaConfirma");
const senha = document.getElementById("senha");

document.addEventListener("load",checar);

function checar(){
    if(senhaConfirma.value != senha.value){
        senhaConfirma.setCustomValidity("Senhas são diferentes");
    }
}