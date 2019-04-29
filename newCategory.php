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
            <li><?php echo $user[0]; ?> <span><?php echo $user[2]; ?></span></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>

    <h1>Mural</h1>
    <form action="addCategory.php" method="POST" class="new-message">
        <fieldset>
            <legend>Nova categoria</legend>
            <input type="text" name="category" placeholder="categoria">
            <input type="submit" value="enviar">
        </fieldset>
    </form>
</body>
</html>