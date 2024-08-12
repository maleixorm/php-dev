<?php

require "../../../bootstrap.php";

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isEmpty()) {
    flash('message', 'Preencha todos os campos!');
    redirect("edit_user&id=".$id);
    
}

$validate = validate([
    'name' => 's',
    'lastname' => 's',
    'email' => 'e',
    'passwd' => 's'
]);

$atualizado = update('users', $validate, ['id', $id]);
// dd($atualizado);

if ($atualizado) {
    flash('message', 'Cadastro atualizado com sucesso!', 'success');
    return redirect("home");
} else {
    flash('message', 'Erro ao tentar atualizar o cadastro!');
    return redirect("edit_user&id=".$id);
}