<?php

require "../../../bootstrap.php";

if (isEmpty()) {
    flash('message', 'Preencha todos os campos!');
    redirect("contato");
    
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's'
]);

$data = [
    'quem' => $validate->email,
    'para' => 'desenvolvimento@marcosaleixo.com.br',
    'mensagem' => $validate->message,
    'assunto' => $validate->subject
];

if (send($data)) {
    flash('message', 'Sua mensagem foi enviada com sucesso!', 'success');
    redirect("contato");
}