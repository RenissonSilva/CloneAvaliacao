<?php
    include 'init.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];
    $date = $_POST['date'];
    $telefone = $_POST['telefone'];

?>

<?php if ($senha != $senha2): ?>
    <h1>Senhas não podem ser diferentes</h1>
    <a href="#" onclick="history.go(-1)">Voltar</a>
    <?php exit() ?>
<?php endif ?>
<?php if ($senha == ''): ?>
    <h1>Senha não pode ser vazia</h1>
    <a href="#" onclick="history.go(-1)">Voltar</a>
    <?php exit() ?>
<?php endif ?>

<?php
$data = join(SEPARATOR, [$username, $email, $name, sha1($senha),$date,$telefone]) . "\n";
$handle = fopen(USERS_FILE, 'a');
fwrite($handle, $data);
redirect('reg_login.php?mes_reg=Usuário cadastrado com sucesso');

?>