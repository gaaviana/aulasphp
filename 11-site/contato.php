<?php include "inc/cabecalho.php" ?>
<h2>Entre em contato conosco</h2>

<form action="#" method="POST">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <select class="form-select" aria-label="Default select example">
        <option selected>Assuto</option>
        <option value="1">Duvida</option>
        <option value="2">Critica</option>
        <option value="3">Elogio</option>
        <option value="3">outro</option>
    </select>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label"></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

<?php include "inc/rodape.php" ?>