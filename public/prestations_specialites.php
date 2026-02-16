<?php
require_once __DIR__ . '/../includes/header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Prestations - Spécialités</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/layout.css">
    <link rel="stylesheet" href="./assets/css/pages.css">
</head>
<body>

<section class="page-hero">
    <div class="container">
        <h1>Nos prestations <span class="highlight">Spécialités</span></h1>
        <p>Des techniques expertes pour sublimer votre beauté naturelle.</p>
    </div>
</section>

<section class="prestations-detail">
    <div class="container">

        <div class="prestations-grid">

            <div class="prestation-item">
                <span>Microblading (tatouage poil à poil – reconstruction de la forme)</span>
                <strong>210€</strong>
                <a href="index.php#contact" class="btn btn-primary">Je reserve</a>
            </div>

            <div class="prestation-item">
                <span>Retouches de microblading</span>
                <strong>80€</strong>
                <a href="index.php#contact" class="btn btn-primary">Je reserve</a>
            </div>

        </div>

        <div class="btn-group retour-btn">
            <a href="index.php#prestations" class="btn btn-secondary">← Retour aux prestations</a>
        </div>

    </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>

</body>
</html>
