function apagar() {
    // Seleciona todos os elementos de input na página
    var inputs = document.querySelectorAll('input');

    // Limpa os valores de todos os inputs
    inputs.forEach(function(input) {
        input.value = '';
    });
}