<a href="?page=create_user">Cadastrar usuário</a>

<h2>Página inicial</h2>

<table class="table table-striped table-hover">

    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>

        <?php 
            $users = all('tb_accounts');
            foreach($users as $user):
        ?>

        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->email ?></td>
            <td>
                <a href="?page=edit_user&id=<?= $user->id ?>" class="btn btn-success">Editar</a>
            </td>
            <td>
                <a href="" class="btn btn-danger">Deletar</a>
            </td>
        </tr>

        <?php endforeach ?>
    </tbody>

</table>