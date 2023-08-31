
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booki</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/2bb90c57b5.js" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        include 'header.php';
    ?>

    <main>
        <div>
            <?php
                $username = $_POST['login'];
                $password = $_POST['password'];
                if ($username == $datauser[0]['login'] && $password == $datauser[0]['password']) {
                    echo "Bonjour " . $username . " !";
                    setcookie("username", $username, time() + 3600,);
                    } else {
                    session_start();
                    $_SESSION['$errorMsg'] = "Pas les bons identifiants !";
                    header("Location: index.php");
                }
                if (isset($_POST['Se déconnecter'])) {
                    setcookie("username", $username, time() - 3600,);
                    echo "Vous êtes déconnecté";
                }   
            ?>
            ?>
            <form method="post" action="index.php">
                <input type="submit" value="Se déconnecter">
            </form>
        </div>
        <section id="findhebergement">
            <h1>Trouvez votre hébergement pour des vacances de rêve</h1>
            <p>En plein centre ville ou en pleine nature</p>

            <form action="POST">
                <i class="fa-solid fa-location-dot"></i>
                <input id="searchCity" type="text" placeholder="Marseille, France">
                <input id="search" type="submit" value="Rechercher">
                <button id="displayOnMobile"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
            </form>

            <div>
                <h3>Filtres</h3>
                <ul id="filters">
                    <li><a href="#"><i class="fa-solid fa-money-bill-1-wave"></i> Économique</a></li>
                    <li><a href=""><i class="fa-solid fa-person"></i> Familial</a></li>
                    <li><a href=""><i class="fa-solid fa-heart"></i> Romantique</a></li>
                    <li><a href=""><i class="fa-solid fa-dog"></i> Animaux autorisés</a></li>
                </ul>
            </div>
            

            <p id="findHebergement"><i class="fa-solid fa-info"></i> Plus de 500 logements sont disponibles dans cette ville</p>
        </section>

        <section id="hebergementAndPopulaire">
            <div id="hebergements">
                <h2>Hébergement à Marseille</h2>

                <div>

                    <article>
                        <a href="#">
                            <img src="img/hotelduport.jpg" alt="Hotel du port">

                            <div class="infozone">
                                <h3>Hôtel du port</h3>
                                <p>Nuit à partir de 52€</p>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star empty"></i>
                                </div>
                            </div>
                        </a>
                    </article>

                    <article>
                        <a href="#">
                            <img src="img/hotelchezamina.jpg" alt="Hôtel Chez Amina">

                            <div class="infozone">
                                <h3>Hôtel Chez Amina</h3>
                                <p>Nuit à partir de 96€</p>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star empty"></i>
                                </div>
                            </div>
                        </a>
                    </article>

                    <article>
                        <a href="#">
                            <img src="img/hotellesmouettes.jpg" alt="Hôtel les mouettes">

                            <div class="infozone">
                                <h3>Hôtel les mouettes</h3>
                                <p>Nuit à partir de 76€</p>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star empty"></i>
                                </div>
                            </div>
                        </a>
                    </article>

                    <article>
                        <a href="#">
                            <img src="img/hoteldelamer.jpg" alt="Hôtel de la mer">

                            <div class="infozone">
                                <h3>Hôtel de la mer</h3>
                                <p>Nuit à partir de 46€</p>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star empty"></i>
                                </div>
                            </div>
                        </a>
                    </article>

                    <article>
                        <a href="#">
                            <img src="img/aubergelacanebière.jpg" alt="Auberge La Canebière">
                            
                            <div class="infozone">
                                <h3>Auberge La Canebière</h3>
                                <p>Nuit à partir de 25€</p>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star empty"></i>
                                </div>
                            </div>
                        </a>
                    </article>

                    <article>
                        <a href="#">
                            <img src="img/aubergelepanier.jpg" alt="Auberge Le panier">
    
                            <div class="infozone">
                                <h3>Auberge Le panier</h3>
                                <p>Nuit à partir de 23€</p>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star empty"></i>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <a href="#">Afficher plus</a>
            </div>

            <aside>
                <div>
                    <h2>Les plus populaires</h2>
                    <i class="fa-solid fa-chart-line"></i>
                </div>

                <div id="aside_card">
                    <article>
                        <a href="#">
                            <img src="img/aubergelacanebière.jpg" alt="Auberge La Canebière">
    
                            <div class="infozone">
                                <div>
                                    <h3>Auberge La Canebière</h3>
                                    <p>Nuit à partir de 25€</p>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star empty"></i>
                                </div>
                            </div>
                        </a>
                    </article>
    
                    <article>
                        <a href="#">
                            <img src="img/chambred'hoteaucoeurdel'eau.jpg" alt="Chambre d'hôtes au coeur de l'eau">
    
                            <div class="infozone">
                                <div>
                                    <h3>Chambre d'hôtes au coeur de l'eau</h3>
                                    <p>Nuit à partir de 71€</p>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star empty"></i>
                                </div>
                            </div>
                        </a>
                    </article>
    
                    <article>
                        <a href="#">
                            <img src="img/hotelbleuetblanc.jpg" alt="Hôtel Bleu et Blanc">
    
                            <div class="infozone">
                                <div>
                                    <h3>Hôtel Bleu et Blanc</h3>
                                    <p>Nuit à partir de 68€</p>
                                </div>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star empty"></i>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>

            </aside>
        </section>

        <section id="activites">
            <h2>Activités à Marseille</h2>
            <div>
                <a href="#">
                    <figure>
                        <img src="img/vieuxport.jpg" alt="Vieux port">
                        <figcaption>
                            Vieux-Port
                        </figcaption>
                    </figure>
                </a>
                <a href="#">
                    <figure>
                        <img src="img/fortdepomègues.jpg" alt="Fort de pomègues">
                        <figcaption>Fort de pomègues</figcaption>
                    </figure>
                </a>
                <a href="#">
                        <figure>
                        <img src="img/Parcnational.jpg" alt="Parc national des Calanques">
                        <figcaption>Parc national des Calanques</figcaption>
                    </figure>
                </a>
                <a href="#">
                        <figure>
                        <img src="img/Notredame.jpg" alt="Activités près de Notre-Dame-de-la-Garde">
                        <figcaption>Notre-Dame-de-la-Garde</figcaption>
                    </figure>
                </a>
            </div>
        </section>
    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>