<?php

include 'init.php';

if (!is_logged()) {
    redirect('index-nao-logado.php');
}	

$userId = $_POST['user'];
$categoryId = $_POST['category'];
$message = $_POST['message'];


$handle = fopen(MESSAGES_FILE, 'a');
fwrite(
    $handle,
    join([$userId, $categoryId, $message,"\n"])
);
fclose($handle);

redirect('index-logado.php');

?>
