//Quando o usuário clicar no botão, alterne entre ocultar e mostrar o conteúdo do menu suspenso
function abrirDropdownConta() {
    var dropdownConta = document.getElementById("dropdownConta");

    if (dropdownConta.style.display === "" || dropdownConta.style.display === "none") {
      dropdownConta.style.display = "block";
    } else {
      dropdownConta.style.display = "none";
    }
}
  
  //Feche o menu suspenso se o usuário clicar fora dele
  document.addEventListener("click", function(event) {
    var dropdowns = document.getElementsByClassName("dropdownConta");
    for (var i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i].querySelector("#dropdownConta");
        if (openDropdown.style.display === "block" && !event.target.closest('.dropdownConta')) {
            openDropdown.style.display = "none";
        }
    }
});