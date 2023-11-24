document.addEventListener('DOMContentLoaded', function () {
    // Obter elementos do DOM
    var abrirModalBtn = document.getElementById('abrirModalbtn');
    var fecharModalBtn = document.getElementById('fecharModalbtn');
    var modal = document.getElementById('modal-conta');

    // Adicionar evento de clique para abrir o modal
    abrirModalBtn.addEventListener('click', function () {
      document.body.style.overflow = "hidden";

      modal.style.display = 'block';
    });
  
    // Adicionar evento de clique para fechar o modal
    fecharModalBtn.addEventListener('click', function () {
      document.body.style.overflowY = "visible";
      document.body.style.overflowX = "hidden";

      modal.style.display = 'none';
    });

  });