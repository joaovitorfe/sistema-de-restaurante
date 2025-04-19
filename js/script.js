document.querySelector('form').addEventListener('submit', function (event) {
    let nomeCliente = document.getElementById('nome_cliente').value;
    if (nomeCliente.trim() === '') {
        alert('Por favor, informe seu nome.');
        event.preventDefault();
    }
});
