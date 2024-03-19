<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../assets/css/style.css">


<body>
    <!-- HEADER -->
    <header class="contact-header">
        <div class="navigation">
            <a href="./index.html" class="logo">Bloggy</a>

            <nav>
                <label for="mobile">Menu</label>
                <input type="checkbox" id="mobile">

                <ul class="mobile-menu">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./about.html">About</a></li>
                    <!-- <li><a href="./sample-post.html">Sample Post</a></li> -->
                    <?php if (!isset($_SESSION['user'])) : ?>
                        <li><a href="./login.php">Se connecter</a></li>
                        <li><a href="./signup.php">Creer un compte</a></li>
                    <?php else : ?>

                        <li><a href="#"><?= $_SESSION['user']["name"] ?></a></li>
                        <li><a href="index.php?controller=logout">Se déconnecter</a></li>
                    <?php endif; ?>

                </ul>
            </nav>
        </div>

        <!-- <div class="banner">
            <h1>Créer un compte</h1>
        </div> -->
    </header>
    <!-- FIN HEADER -->


    <!-- MAIN -->
    <main>
        <section>
            <div class="container contact-container">
                <h1 style="font-size: 35px;">Connectez-vous à votre compte</h1>

                <form action="../index.php?controller=login" method="post">

                    <div>
                        <input type="email" name="email" placeholder="Email address">
                    </div>

                    <div>
                        <input type="password" name="password" placeholder="Phone Number" value="">
                    </div>

                    <!-- Button -->
                    <div>
                        <input type="submit" value="Send" class="send-message">
                    </div>
                </form>
            </div>
            <hr>
        </section>
    </main>
    <!-- FIN MAIN -->


    <!-- FOOTER -->
    <footer>
        <div>
            <ul>
                <li><a href="https://github.com/new">&rationals;</a></li>
                <li><a href="https://github.com/new">&rationals;</a></li>
                <li><a href="https://github.com/new">&rationals;</a></li>
            </ul>
            <p>Copyright &copy; Bloggy 2024 | Design: Kolga</p>
        </div>
    </footer>
    <!-- FIN FOOTER -->

</body>

</html>