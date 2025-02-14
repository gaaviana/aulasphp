<?php include "inc/cabecalho.php"?>
<h2>Entre em contato conosco</h2>

<form action="#" method="POST">
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="mensagem">Mensagem:</label><br>
    <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>

    <button type="submit">Enviar</button>
</form>

<?php include "inc/rodape.php"?>