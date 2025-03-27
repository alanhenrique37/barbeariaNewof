// Espera o carregamento do DOM
document.addEventListener("DOMContentLoaded", function() {
    // Obtém os elementos
    const barbeiroSim = document.getElementById("barbeiroSim");
    const campoBarbeiro = document.getElementById("campoBarbeiro");

    // Verifica se a opção "Sim" foi selecionada
    barbeiroSim.addEventListener("change", function() {
        if (barbeiroSim.checked) {
            campoBarbeiro.style.display = "block"; // Mostra o select de barbeiro
        }
    });

    // Verifica se a opção "Não" foi selecionada
    const barbeiroNao = document.getElementById("barbeiroNao");
    barbeiroNao.addEventListener("change", function() {
        if (barbeiroNao.checked) {
            campoBarbeiro.style.display = "none"; // Esconde o select de barbeiro
        }
    });
});
   
