<?php

// function send($data) {
//     $to = 'moyoshoyo.arq@gmail.com';
//     $subject = $data->subject;
//     $message = $data->message;
//     $header = "From: {$data->email}" . "/r/n" . 
//     'Reply-to: naosei' . "/r/n" . 
//     'X-Mailer: PHP/' . phpversion();

//     return mail($to, $subject, $message, $header);
// }

function send(array $data) {
  $email = new PHPMailer\PHPMailer\PHPMailer;
  $email->CharSet = 'UTF-8';
  $email->SMTPSecure = 'plain';
  $email->isSMTP();
  $email->Host = 'smtp.mailtrap.io';
  $email->Port = 2525;
  $email->SMTPAuth = true;
  $email->Username = 'be579e6ed080d5';
  $email->Password = '56ab62e62c2779';
  $email->isHTML(true);
  $email->setFrom('');
  $email->FromName = $data['quem'];
  $email->addAddress($data['para']);
  $email->Body = $data['mensagem'];
  $email->Subject = $data['assunto'];
  $email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceite ver HTML';
  $email->MsgHTML($data['mensagem']);

  return $email->send();
}