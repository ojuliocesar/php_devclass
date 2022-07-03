<?php

require "../../../bootstrap.php";

if (isEmpty()) {
    flash('message','Preencha todos os campos');

    return redirect('create_user');
}

$validate = validate([
    'nome' => 's',
    'sobrenome' => 's',
    'email' => 'e',
    'senha' => 's'
]);

$cadastrado = create('tb_accounts', $validate);

dd($cadastrado);

// if ($cadastrado) {
//     flash('message', 'Cadastrado com sucesso', 'success');

//     return redirect('create_user');
// }

// flash('message', 'Erro ao cadastrar');

// redirect('create_user');
