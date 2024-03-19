 <!DOCTYPE html>
 <html lang="fr">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Bloggy - Sample post</title>
     <link rel="stylesheet" href="./assets/css/style.css">
     <!-- 
    Google Fonts
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&family=Roboto:wght@900&display=swap"
        rel="stylesheet">

    Font Awesome
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

 <body>
     <!-- HEADER -->
     <header class="sample-post-header">
         <div class="navigation">
             <a href="./index.php" class="logo">Bloggy</a>

             <nav>
                 <label for="mobile">Menu</label>
                 <input type="checkbox" id="mobile">

                 <ul class="mobile-menu">
                     <li><a href="./index.php">Home</a></li>
                     <li><a href="./about.html">About</a></li>
                     <?php if (!isset($_SESSION['user'])) : ?>
                         <li><a href="views/login.php">Se connecter</a></li>
                         <li><a href="views/signup.php">Creer un compte</a></li>
                     <?php else: ?>

                     <li><a href="#"><?= $_SESSION['user']["name"] ?></a></li>
                     <li><a href="index.php?controller=logout">Se déconnecter</a></li>
                     <?php endif; ?>

                 </ul>
             </nav>
         </div>

         <div class="banner post-banner">
             <h1><?= $article->title ?></h1>
             <p><?= $article->subtitle ?></p>
             <small>Posted by <a href="">Author</a> on <?= $article->created ?></small>
         </div>
     </header>
     <!-- FIN HEADER -->


     <!-- MAIN -->
     <main>
         <section>
             <div class="container sample-post-container" style="font-size: 20px; line-height:25px">
                 <?= nl2br($article->content) ?>
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