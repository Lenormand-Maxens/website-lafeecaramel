<?php
// Pour inclure le header 
require_once __DIR__ . '/../includes/header.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lafeecaramel</title>
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/layout.css">
    <link rel="stylesheet" href="./assets/css/pages.css">
</head>
<body>

    <section id="hero">
        <div class="container">
            <h1>Bienvenue chez <span class="highlight">la fée caramel</span></h1>
            <p>Découvrez nos délicieuses créations sucrées et laissez-vous tenter par nos gourmandises !</p>
            <a href="#prestations" class="btn">Nos prestations</a>
            <a href="#produits" class="btn">Nos produits</a>
            <img src="./assets/images/hero-image.jpg" alt="Image de la fée caramel" class="hero-image">
        </div>
    </section>

<?php
//Pour inclure le footer
require_once __DIR__ . '/../includes/footer.php';
?>
<script src="./assets/js/app.js"></script>
</body>
</html>
