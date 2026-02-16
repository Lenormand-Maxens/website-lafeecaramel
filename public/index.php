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

        <!-- SECTION HERO -->
    <section id="home">
        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-text">
                    <h1>Bienvenue chez <span class="highlight">la fée caramel</span></h1>
                    <p>Découvrez nos soins de beauté naturels et nos produits artisanaux sélectionnés avec soin. Offrez-vous un moment de bien-être dans une ambiance chaleuureuse et apaisante.</p>
                    <div class="btn-group">
                        <a href="#prestations" class="btn btn-primary">Nos prestations</a>
                        <a href="#produits" class="btn btn-secondary">Nos produits</a>
                    </div>
                </div>
                <div>
                    <img src="./assets/images/hero-image.jpg" alt="La Fée Caramel" class="hero-image">
                </div>
            </div>
        </div>
    </section>
    <section id="prestations">
        <div class="container">
            <h2>Nos prestations</h2>
            <div class="prestations-list">
                <div class="card">
                    <h3>Épilations</h3>
                    <p>Découvrez nos services d'épilation pour une peau douce et lisse.</p>
                    <a class="btn btn-primary" href="prestations_epilation.php">Cliquez-ici</a>
                </div>
                <div class="card">
                    <h3>Spécialités</h3>
                    <p>Nos spécialités de soins naturels pour un bien-être optimal.</p>
                    <a class="btn btn-primary" href="prestations_specialites.php">Cliquez-ici</a>
                </div>
                <div class="card">
                    <h3>Bien-être</h3>
                    <p>Offrez-vous un moment de détente avec nos soins de bien-être.</p>
                    <a class="btn btn-primary" href="prestations_bienetre.php">Cliquez-ici</a>
                </div>
            </div>
        </div>
    </section>

    <section id="produits">
        <div class="container">
            <div class="produits-wrapper">
                <div class="produits-text">
                    <h2>Cire épilatoire artisanale</h2>
                    <p class="produits-price">30€</p>
                    <p class="produits-description">
                        Découvrez notre cire artisanale, fabriquée à la main avec des ingrédients 100% naturels soigneusement sélectionnés. 
                        Formulée pour respecter votre peau et offrir un résultat doux et durable.
                    </p>
                    <ul class="produits-features">
                        <li>Ingrédients naturels et biologiques</li>
                        <li>Fabrication 100% artisanale</li>
                        <li>Adaptée à tous les types de peau</li>
                        <li>Résultat durable jusqu'à 4 semaines</li>
                    </ul>
                    <div class="btn-group">
                        <a class="btn btn-primary" href="./public/articles.php">Commander</a>
                        <a class="btn btn-secondary" href="./public/articles.php">En savoir +</a>
                    </div>
                </div>
                <div>
                    <img src="./assets/images/cirefeecaramel.png" alt="Image de nos produits" class="produits-image">
                </div>
            </div>
        </div>
    </section>
    <section id="histoire">
        <div class="container">
            <div class="histoire-wrapper">
                <div>
                    <img src="./assets/images/Mon-histoire.png" alt="Image de notre histoire" class="histoire-image">
                </div>
                <div class="histoire-text">
                    <span class="histoire-intro">100% Naturelle & Bio</span>
                    <h2>Mon Histoire</h2>
                    <p class="histoire-description">
                        Bienvenue dans mon univers ! Je suis passionnée par l'art de l'épilation au sucre, une technique ancestrale que j'ai perfectionnée avec une formule exclusive 100% naturelle.
                    </p>
                    <p class="histoire-description">
                        Ma pâte de sucre bio, préparée avec amour à base de citron, sucre et eau, est conçue pour offrir une épilation tout en douceur, respectueuse de votre peau et de l'environnement.
                    </p>
                    <p class="histoire-comment">
                        "Chaque soin est un moment de bien-être, dans une ambiance chaleureuse qui sent bon le Sud de la France, la bonne humeur et le soleil."
                    </p>
                    <p class="histoire-description">
                        De l'épilation au microblading en passant par les soins beauté des mains et des pieds, je vous accueille à La Fare-les-Oliviers pour prendre soin de vous avec délicatesse et expertise.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="galerie">
        <div class="container">
            <div class="galerie-wrapper">
                <div class="card">
                    <img src="./assets/images/galerie/galerie-cile.webp" alt="Image de notre histoire" class="histoire-image">
                </div>
                <div class="card">
                    <img src="./assets/images/galerie/galerie-cire.jpg" alt="Image de notre histoire" class="histoire-image">
                </div>
                <div class="card">
                    <img src="./assets/images/galerie/galerie-crane.jpeg" alt="Image de notre histoire" class="histoire-image">
                </div>
                <div class="card">
                    <img src="./assets/images/galerie/galerie-dos.jpeg" alt="Image de notre histoire" class="histoire-image">
                </div>
                <div class="card">
                    <img src="./assets/images/galerie/galerie-epilation.jpg" alt="Image de notre histoire" class="histoire-image">
                </div>
                <div class="card">
                    <img src="./assets/images/galerie/galerie-maquillage.jpg" alt="Image de notre histoire" class="histoire-image">
                </div>
            </div>
        </div>
    </section>

    <section id="avis">
        <div class="container">
            <h2>Avis clients</h2>

            <div class="avis-wrapper">

                <div class="avis-card">

                    <div class="avis-header">
                        <div class="avis-logo">RC</div>
                        <div>
                            <div class="avis-name">Rene Couverture</div>
                            <div class="avis-date">Avis Google</div>
                        </div>
                    </div>

                    <div class="avis-etoile">
                        ★★★★★
                    </div>

                    <div class="avis-comment">
                        Il n'a pas mis de commentaire.
                    </div>

                </div>

            </div>
        </div>
    </section>



    <section id="contact">
        <div class="container">
            <div class="contact-wrapper">

                <div class="contact-info">
                    <h2>Contact</h2>
                    <p class="contact-intro">
                        Une question ? Une prise de rendez-vous ?  
                        Je vous réponds avec plaisir.
                    </p>

                    <div class="contact-details">
                        <p><strong>Téléphone :</strong> 06 70 37 81 74</p>
                        <p><strong>Email :</strong> lafeecaramel13580@gmail.com</p>
                        <p><strong>Adresse :</strong> La Fare-les-Oliviers</p>
                    </div>

                    <p class="contact-note">
                        Je vous accueille sur rendez-vous dans une ambiance chaleureuse et apaisante.
                    </p>
                </div>

                <div class="contact-form">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>

            </div>
        </div>
    </section>


<?php
//Pour inclure le footer
require_once __DIR__ . '/../includes/footer.php';
?>
<script src="./assets/js/app.js"></script>
</body>
</html>
