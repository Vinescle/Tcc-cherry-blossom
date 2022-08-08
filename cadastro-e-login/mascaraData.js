const data = document.getElementById("data");
data.addEventListener("keypress", somenteNumeros);
data.addEventListener("keypress", formataData);

function somenteNumeros(e) {
    var charCode = (e.which) ? e.which : e.keyCode

    if (charCode > 31 && (charCode < 48 || charCode > 57))
        e.preventDefault();
}

function formataData(e) {
    var v = e.target.value.replace(/\D/g, "");

    v = v.replace(/(\d{2})(\d)/, "$1/$2")

    v = v.replace(/(\d{2})(\d)/, "$1/$2")

    e.target.value = v;
}