<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mural</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Voltar</a></li>
        </ul>
    </nav>
    <h1>Mural</h1>
    <form action="auth.php" method="POST">
        <fieldset>
            <span class="msg">Login ou senha incorreto</span>
            <legend>Login</legend>
            <input type="text" name="username" placeholder="Nome de usuário" value="">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="ok">
        </fieldset>
    </form>
    <hr>
    <form action="register.php" method="POST">
        <fieldset>
            <span class="msg">Usuário cadastrado com sucesso</span>
            <legend>Registro</legend>
            <input type="text" placeholder="Nome de usuário" name="username" value="">
            <input type="email" placeholder="E-mail" name="email" value="">
            <input type="text" placeholder="Nome" name="name" value="">
            <input type="password" placeholder="Senha" name="senha">
            <input type="password" placeholder="Confirme a senha" name="senha2">
            <input type="date" placeholder="Data de Nascimento" name="date" value="">
            <input type="tel" placeholder="Telefone" name="telefone" value="">
            <input type="submit" name="submit" value="ok">
        </fieldset>
    </form>
</body>
</html>