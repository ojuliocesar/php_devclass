<h3 class="main-subtitle">Account</h3>

<form action="/pages/form/create_user.php" method="POST" role="form">

    <?=getFlash('message')?>


    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu email">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

</form>