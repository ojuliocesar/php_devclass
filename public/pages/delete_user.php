<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deletado = delete('tb_accounts', 'id', $id);

if($deletado) {
    return redirectToHome();
}

flash('message','Erro ao deletar');

redirectToHome();                   