//Quando o usuário clicar no botão, alterne entre ocultar e mostrar o conteúdo do menu suspenso
function abrirDropdownConta() {
    document.getElementById("dropdownConta").classList.toggle("Show");
  }
  
  //Feche o menu suspenso se o usuário clicar fora dele
  window.onclick = function(e) {
    if (!e.target.matches('.btnConta')) {
    var myDropdown = document.getElementById("dropdownConta");
      if (myDropdown.classList.contains('Show')) {
        myDropdown.classList.remove('Show');
      }
    }
  }