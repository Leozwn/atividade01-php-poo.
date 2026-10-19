<?php
require_once '/src/Planta.php';

$planta = new Planta('Suculenta', 'Echeveria elegans', 1.0);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Plantas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <main class="container">

        <h1>Catálogo de Plantas</h1>

        <p class="subtitulo">
            Cuidados simples para cultivar em casa.
        </p>

        <section class="cartao">

            <h2>
                <?= htmlspecialchars($planta->getNomePopular(), ENT_QUOTES) // Fica mais semantinco com o html e para dar menos erros  ?>
            </h2>

            <div class="informacao">
                <span class="rotulo">Espécie científica</span>

                <span class="valor">
                    <?= htmlspecialchars($planta->getEspecie(), ENT_QUOTES) ?>
                </span>
            </div>

            <div class="informacao">
                <span class="rotulo">Água recomendada por dia (L)</span>

                <span class="valor">
                     <?= htmlspecialchars($planta->getAguaPorDia(),ENT_QUOTES ) ?>
                </span>
            </div>

            <div class="destaque">
                <strong>Recomendação para sete dias (L)</strong>

                <p>
                     <?= htmlspecialchars($planta->getAguaPorSemana(),ENT_QUOTES) ?>
                </p>
            </div>

        </section>

        <footer>
            Projeto desenvolvido com PHP e Programação Orientada a Objetos.
        </footer>

    </main>

</body>
</html>
