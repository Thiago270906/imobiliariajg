<h2>Lista de cidades</h2>

<?php foreach ($cidades as $cidade): ?>

    ID: <?=  $cidade->getId(); ?> <br>
    Nome: <?=  $cidade->getNome(); ?> <br>
    Estado: <?=  $cidade->getEstado(); ?> <br>
    <a href="index.php?edit=18id=<?= $cidade->getId(); ?>">Editar</a>
    <hr>

<?php endforeach; ?>