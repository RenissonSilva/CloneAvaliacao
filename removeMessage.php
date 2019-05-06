<?php 

include 'init.php';

$id = $_GET['id'];

$messages = file('messages.csv');

unset($messages[$id]);

$data = join('', $messages);

$handle = fopen('messages.csv', 'w');

fwrite($handle, $data);

redirect('index-logado.php');

?>