<?php
require_once __DIR__ . '/../includes/header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Prestations - Bien-être</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/layout.css">
    <link rel="stylesheet" href="./assets/css/pages.css">
</head>
<body>

<section class="page-hero">
    <div class="container">
        <h1>Nos prestations <span class="highlight">Bien-être</span></h1>
        <p>Des soins relaxants pour prendre soin de votre corps et de votre esprit.</p>
    </div>
</section>

<section class="prestations-detail">
    <div class="container">

        <div class="prestations-grid">

            <div class="prestation-item">
                <span>Drainage lymphatique manuel – 1h00 (forfait 5 séances)</span>
                <strong>350€</strong>
                <a href="index.php#contact" class="btn btn-primary">Je reserve</a>
            </div>

            <div class="prestation-item">
                <span>Méthode Georges Dumont amincissante – 1 séance</span>
                <strong>80€</strong>
                <a href="index.php#contact" class="btn btn-primary">Je reserve</a>
            </div>

            <div class="prestation-item">
                <span>Nettoyage de peau</span>
                <strong>35€</strong>
                <a href="index.php#contact" class="btn btn-primary">Je reserve</a>
            </div>

            <div class="prestation-item">
                <span>Soin visage (massage drainant)</span>
                <strong>50€</strong>
                <a href="index.php#contact" class="btn btn-primary">Je reserve</a>
            </div>

            <div class="prestation-item">
                <span>Manucure et pose de semi-permanent</span>
                <strong>27€</strong>
                <a href="index.php#contact" class="btn btn-primary">Je reserve</a>
            </div>

            <div class="prestation-item">
                <span>Beauté des pieds et pose de vernis</span>
                <strong>27€</strong>
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
