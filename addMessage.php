<?php

include 'init.php';

if (!is_logged()) {
    redirect('index-nao-logado.php');
}	

$userId = $_POST['user'];
$categoryId = $_POST[get_categories(category_info($category['id']))];
$message = $_POST['message'];


$handle = fopen(MESSAGES_FILE, 'a');
fwrite(
    $handle,
    join(SEPARATOR, [$userId, $categoryId, $message,"\n"])
);
fclose($handle);

redirect('index-logado.php');

?>
