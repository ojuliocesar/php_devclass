
<form action="/pages/form/create_user.php" method="POST" role="form">

    <legend>Account</legend>

    <?=getFlash('message')?>


    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-control" name="senha" placeholder="Digite seu nome">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>