function enviarFormulario(){
    const nome = document.getElementById('nome').value;
    const telefone = document.getElementById('numero').value;
    const email = document.getElementById('email').value;
    const observacao = document.getElementById('obs').value;

    if(nome !== "" && telefone !== "" && email !== "" && observacao !== ""){
        document.getElementById('mensagem').textContent = "Formulário enviado com sucesso! :D";
        document.getElementById('form').reset();
        setTimeout(function() {
            document.getElementById('mensagem').textContent = "";
        }, 5000);
    } else {
        document.getElementById('mensagem').textContent = "Preencha os campos restantes!";
        setTimeout(function() {
            document.getElementById('mensagem').textContent = "";
        }, 5000);
    }
}