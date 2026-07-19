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
