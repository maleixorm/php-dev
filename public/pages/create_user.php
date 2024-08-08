<h1>Cadastro de Usuários</h1>
<br><?= get('message'); ?>
<form action="" method="POST" role="form" class="d-flex">
    <legend>Form title</legend>
    <div class="col">
        <div class=" form-group mb-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" />
        </div>
        <div class=" form-group mb-3">
            <label for="" class="form-label">Sobrenome</label>
            <input type="text" name="lastname" id="" class="form-control" placeholder="" aria-describedby="helpId" />
        </div>
        <div class=" form-group mb-3">
            <label for="" class="form-label">E-mail</label>
            <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" />
        </div>
        <div class=" form-group mb-3">
            <label for="" class="form-label">Senha</label>
            <input type="text" name="passwd" id="" class="form-control" placeholder="" aria-describedby="helpId" />
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>