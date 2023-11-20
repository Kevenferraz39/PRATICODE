//Quando o usuário clicar no botão, alterne entre ocultar e mostrar o conteúdo do menu suspenso
function abrirDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  //Feche o menu suspenso se o usuário clicar fora dele
  window.onclick = function(e) {
    if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  }