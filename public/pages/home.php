<h2>Página Inicial</h2>
<br><?= get('message'); ?><br>
<br>
<a href="/?page=create_user" class="btn btn-secondary">Cadastrar Usuário</a>
<br><br>

<div class="table-responsive">
    <table class="table table-striped table-hover table-borderless table-primary align-middle">
        <thead class="table-light">
            <caption>
                Listagem de Usuários
            </caption>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php 
                $users = all('users');
                foreach ($users as $user):
            ?>
            <tr class="table-primary">
                <td scope="row"><?= $user->id; ?></td>
                <td><?= $user->name; ?></td>
                <td><?= $user->email; ?></td>
                <td><a href="?page=edit_user&id=<?= $user->id; ?>" class="btn btn-warning">Editar</a></td>
                <td><a href="?page=delete_user&id=<?= $user->id; ?>" class="btn btn-danger">Deletar</a></td>
            </tr>
        <?php endforeach; ?>    
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>
</div>
