<?php
session_start();
include_once "donneesutilisateur.php";
$errorMsg = "Invalid username or password.";
$submitted = isset($_POST["sub"]);
if ($submitted) {
    $login = $POST["login"];
    $password = $POST["password"];

    foreach ($datauser as $user) {
        if ($user['login'] == $login && $user['password'] == $password) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $user['$login'];
            header("Location: /bienvenue.php");
            die();
        }
    }
    $_SESSION[$errorMsg] = $errorMsg;
}

?>

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
        include "header.php";
    ?>

    <main>
        <div class="connexion">
            <form method="post" action="bienvenue.php">
                <label for="login">Login</label>
                <input type="text" name="login" id="login">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <input type="submit" value="Connexion">
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
                    <?php include "hebergement.php"; ?>
                    <?php foreach ($hebergements as $hebergement) { ?>
                        <article>
                            <a href="single_hebergement.php?id=<?= $hebergement["id"]; ?>">
                                <img src="<?= $hebergement["img"] ?>" alt="<?= $hebergement["alt"] ?>">

                                <div class="infozone">
                                    <h3><?= $hebergement["nom"] ?></h3>
                                    <p>Nuit à partir de <?= $hebergement["prix"] ?>€</p>
                                    <div class="rating">
                                        <i class="<?=$hebergement["rating1"];?>"></i>
                                        <i class="<?=$hebergement["rating2"];?>"></i>
                                        <i class="<?=$hebergement["rating3"];?>"></i>
                                        <i class="<?=$hebergement["rating4"];?>"></i>
                                        <i class="<?=$hebergement["rating5"];?>"></i>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php } ?>
                </div>
                <a href="#">Afficher plus</a>
            </div>

            <aside>
                <div>
                    <h2>Les plus populaires</h2>
                    <i class="fa-solid fa-chart-line"></i>
                </div>

                <div id="aside_card">
                    <?php include "populaire.php"; ?>
                    <?php foreach ($populaires as $populaire) { ?>
                        <article>
                            <a href="#">
                                <img src="<?= $populaire["img"] ?>" alt="<?= $populaire["alt"] ?>">

                                <div class="infozone">
                                    <div>
                                        <h3><?= $populaire["nom"] ?></h3>
                                        <p><?= $populaire["prix"] ?></p>
                                    </div>
                                    <div class="rating">
                                        <i class="<?= $populaire["rating1"] ?>"></i>
                                        <i class="<?= $populaire["rating2"] ?>"></i>
                                        <i class="<?= $populaire["rating3"] ?>"></i>
                                        <i class="<?= $populaire["rating4"] ?>"></i>
                                        <i class="<?= $populaire["rating5"] ?>"></i>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php } ?>
                </div>
            </aside>
        </section>

        <section id="activites">
            <h2>Activités à Marseille</h2>
            <div>
                <?php include "activites.php"; ?>
                <?php foreach ($activites as $activite) { ?>
                    <a href="#">
                        <figure>
                            <img src="<?= $activite["img"] ?>" alt="<?= $activite["alt"] ?>">

                            <figcaption>
                                <?= $activite["nom"] ?>
                            </figcaption>
                        </figure>
                    </a>
                <?php } ?>
            </div>
        </section>
    </main>

    <?php
        include "footer.php";
    ?>
</body>
</html>