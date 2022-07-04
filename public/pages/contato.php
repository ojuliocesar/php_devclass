<h3 class="main-subtitle">Contato</h3>

<?=getFlash('message')?>

<form action="./pages/form/contato.php" method="POST" role="form">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu email">
    </div>

    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Mensagem</label>
        <textarea name="message" class="form-control"  cols="30" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    <?php require_once 'form/return_home.php' ?>

</form>