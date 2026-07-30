function mensagemSucesso(mensagem){
    Swal.fire({
        title: "Sucesso!",
        text: mensagem,
        icon: 'success',
    })
}

function mensagemErro(mensagem){
    Swal.fire({
        title: "Erro!",
        text: mensagem,
        icon: 'error',
    })
}


function confirmarRemocao(mensagem, event) {
    event.preventDefault(); // intercepta o evento e evita o for de ser enviado
    Swal.fire({ // exibe o diálogo de confirmação
        title: "Atenção!",
        text: mensagem,
        icon: 'question',
        showCancelButton: true,
    }).then((result) => { // verifica a respost do usuário
        if (result.isConfirmed){
            event.target.submit(); // SE o usuário confirmou, o formulário é enviado
        }
        return false; // se o usuário nao confirmou, o formulário não é enviado e retorna false
    })
}


$("#formCadastroCliente").validate({
    rules: {
        // As regras são definidas para cada campo com base no NAME
        nome: {
            required: true,
            minlength: 3
        },
        cpf: {
            required: true,
            minlength: 14,
            maxlength: 14
        },
        email: {
            required: true,
            email: true
        }
    },
    messages: {
        nome: {
            required: "O nome é obrigatório.",
            minlength: "O nome deve conter pelo menos 3 caracteres."
        },
        cpf: {
            required: "O CPF é obrigatório.",
            minlength: "O CPF deve conter exatamente 14 caracteres.",
            maxlength: "O CPF deve conter exatamente 14 caracteres."
        }
    },
    errorElement: "span",
    errorClass: "text-danger",
})
