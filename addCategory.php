<?php

include 'init.php';

if (!is_logged()) {
    redirect('index-nao-logado.php');
}

$category = $_POST['category'];

$handle = fopen(CATEGORIES_FILE, 'a');
fwrite(
    $handle,
    join([$category,"\n"])
);
fclose($handle);

redirect('index-logado.php');

?>
