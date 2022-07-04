<?php $user = find('tb_accounts', 'id', $_GET['id']); ?>

<h3 class="main-subtitle">Update Account</h3>

<form action="/pages/form/update_user.php" method="POST" role="form">

    <?=getFlash('message')?>

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite o Nome" value="<?= $user->name ?>"> 
    </div>

    <input type="hidden" name="id" value="<?= $user->id ?>">

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" placeholder="Digite o Sobrenome" value="<?= $user->sobrenome ?>">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite o Email" value="<?= $user->email ?>">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>

</form>