const senhaIcon = document.querySelector("#senhaIcon");
const senha = document.querySelector("#senha");

senhaIcon.addEventListener("click", function () {
    this.classList.toggle("eye-off-outline");
    const type = senha.getAttribute("type") === "password" ? "text" : "password";
    senha.setAttribute("type", type);
    const icon = senhaIcon.getAttribute("name") === "eye-off-outline" ? "eye-outline" : "eye-off-outline";
    senhaIcon.setAttribute("name", icon);
})
