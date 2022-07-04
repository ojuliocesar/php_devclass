<h1 class="main-title">Página inicial</h1>

<?=getFlash('message')?>

<table class="main-table table table-striped table-hover">

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
                <a href="?page=delete_user&id=<?= $user-> id ?>" class="btn btn-danger">Deletar</a>
            </td>
        </tr>

        <?php endforeach ?>
    </tbody>

</table>
<footer class="main-footer">
    <a href="?page=create_user" class="btn btn-primary">Cadastrar usuário</a>

    <a href="?page=contato" class="btn btn-primary">Contato</a>
</footer>