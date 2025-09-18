<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASSIVE</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include "views/cabecera.php"; ?>

    <main>
        <section class="container">
            <div class="hero">
                <h1>Nuevo Drop MASSIVE</h1>
                <p>Explorá nuestra nueva colección.</p>
                <a class="btn" href="#">Comprar ahora</a>
            </div>

            <div class="productos-grid">
                <?php foreach ($productos as $p): ?>
                    <article class="producto">
                        <div class="img-wrap">
                            <img src="<?= $p->imagen ?>" alt="<?= htmlspecialchars($p->nombre) ?>">
                        </div>
                        <div class="info">
                            <h3><?= htmlspecialchars($p->nombre) ?></h3>
                            <div class="meta"><?= htmlspecialchars($p->categoria) ?> · $<?= $p->precio ?></div>
                            <a class="btn" href="#">Ver más</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <?php include "views/pie.php"; ?>

</body>

</html>