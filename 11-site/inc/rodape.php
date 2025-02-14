
<?php
// Definir o locale como 'pt_BR' (português do Brasil)
setlocale(LC_TIME, 'pt_BR.UTF-8');

// Criar um objeto DateTime
$data = new DateTime();

// Usar IntlDateFormatter para formatar a data por extenso
$fmt = new IntlDateFormatter('pt_BR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
$data_extenso = $fmt->format($data);

?>
 
</main>

        <footer class="bg-light text-center p-3 mt-3">
            <p>Site criado para curso Téc. Informática para Internet.</p>
            <p><?=$data_extenso?></p>
        </footer>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>