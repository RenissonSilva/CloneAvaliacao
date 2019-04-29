<?php 
    include 'init.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mural</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
        $user=currentUser();
    ?>

    <nav>
        <ul>
            <li><?php echo $user[0]; ?> <span><?php echo $user[2]; ?></span></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
        <?php 
            print_r(get_categories());
        ?>

    <h1>Mural</h1>
    <h3>Mensagens</h3>
    <?php $categories = get_categories() ?>
    <form action="addMessage.php" class="new-message" method="POST">
        <fieldset>
            <legend>Nova mensagem</legend>
            <textarea name="message" cols="30" rows="10" placeholder="Mensagem"></textarea>
            <select name="category" required="">
                <option value="" readonly>Escolha a categoria</option>
                <option value="" disabled>--</option>
                <?php foreach ($categories as $categoria): ?>
                    <option value="<?php $categoria[category] ?>"> <?php echo($categoria[category]); ?> </option>
                <?php endforeach ?>
            </select>
            <a href="newCategory.php">Nova categoria</a>
            <input type="submit" value="enviar">
        </fieldset>
    </form>


    <div class="message">
        <div class="category category-0">Aviso</div>
        <div class="message-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quidem quis nihil deleniti laboriosam, non aspernatur minus quod maxime consequuntur dicta nemo consectetur, nesciunt quo magni atque, magnam, asperiores suscipit. <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo maxime voluptatibus repudiandae numquam earum ex cumque aliquid voluptatum reiciendis dolorum animi, corporis illum aperiam, laborum iure. Ad pariatur, rerum doloribus.
        </div>
        <div class="author_date">
            <div class="author">Bruce Banner <span>(hulk)</span></div>
            <div class="date">19/04/2019</div>
        </div>
    </div>

    <div class="message from-user">
        <div class="category category-1">Pergunta <a href="removeMessage.php?id=16" class="del" title="Remover mensagem">&times;</a></div>
        <div class="message-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa praesentium, rerum fugiat magnam ratione doloremque enim numquam aspernatur exercitationem ut dolore earum dolorem, id voluptas et eveniet ea, accusantium repudiandae?
        </div>
        <div class="author_date">
            <div class="author">Peter Quill <span>(starlord)</span></div>
            <div class="date">17/04/2019</div>
        </div>
    </div>

    <div class="message">
        <div class="category category-2">Procurando</div>
        <div class="message-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas itaque perspiciatis neque ut commodi omnis mollitia quod iure ipsa enim quae incidunt, porro quas consequuntur natus repudiandae voluptatem illo ab.
        </div>
        <div class="author_date">
            <div class="author">Tony Stark <span>(ironman)</span></div>
            <div class="date">16/04/2019</div>
        </div>
    </div>

    <div class="message from-user">
        <div class="category category-5">Encontrado <a href="removeMessage.php?id=14" class="del" title="Remover mensagem">&times;</a></div>
        <div class="message-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi nisi dolor sunt, unde delectus magnam odit quos harum provident voluptas placeat quas facilis, iusto excepturi blanditiis distinctio amet enim molestiae.
        </div>
        <div class="author_date">
            <div class="author">Peter Quill <span>(starlord)</span></div>
            <div class="date">16/04/2019</div>
        </div>
    </div>
</body>
</html>