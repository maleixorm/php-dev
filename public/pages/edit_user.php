<h1>Atualizar Cadastro de Usuários</h1>
<br><?= get('message'); ?><br><br>

<?php
    $user = find('users', 'id', $_GET['id']);
?>

<form action="../pages/forms/update_user.php" method="POST" role="form" class="d-flex form-group">
    <div class="">
        <div class="mb-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $user->name; ?>" />
        </div>
        <input type="hidden" name="id" value="<?= $user->id; ?>">
        <div class="mb-3">
            <label for="" class="form-label">Sobrenome</label>
            <input type="text" name="lastname" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $user->lastname; ?>" />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">E-mail</label>
            <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $user->email; ?>" />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Senha</label>
            <input type="text" name="passwd" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $user->passwd; ?>" />
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>