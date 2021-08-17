    //Função para validação do formulário
function validar() {
    //Criação e declaração das variáveis
    var nome = document.getElementById("name");
    var email = document.getElementById("email");
    var telefone = document.getElementById("telefone");
    var select = document.getElementById("select");
      
    if (nome.value == "") {     // Verficar se o campo do formulário está vazio
        alert("Nome não informado");
        nome.focus();   // Caso esteja vazio o input já ficará selecionado
        return;     // retorna a função sem olhar as outras linhas
          
}   if (email.value == "") {
        alert("E-mail não informado");
        email.focus();
        return;

 } if (telefone.value == "") {
        alert("Telefone não informado");
        telefone.focus();
        return;

 } if (select.value == "") {
        alert("Selecione um Plano");
        select.focus();
        return;
 }
    alert("Pré Matrícula realizada com sucesso, entraremos em contato!!");
}


// Função para usar Somente números em um campo