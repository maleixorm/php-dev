<?php

require "../../../bootstrap.php";

if (isEmpty()) {
    flash('message', 'Preencha todos os campos!');
    redirect("contato");
    
}

$validate = validate([
    'name' => 's',
    'lastname' => 's',
    'email' => 'e',
    'passwd' => 's'
]);

$cadastrado = create('users', $validate);

if ($cadastrado) {
    flash('message', 'Cadastro realizado com sucesso!', 'success');
    return redirect("create_user");
} else {
    flash('message', 'Erro ao tentar realizar o cadastro!');
    return redirect("create_user");
}
