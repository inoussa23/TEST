<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../assets/css/style.css">


<body>



    <!-- MAIN -->
    <main>
        <section>
            <div class="container contact-container">
                <h1 style="font-size: 35px;">Connectez-vous à votre</h1>

                <form action="../../index.php?controller=admin_create" method="post">

                    <div>
                        <input type="text" name="title" placeholder="Sous titre de l'article">
                    </div>

                    <div>
                        <input type="text" name="subtitle" placeholder=" Sous titre de l'article" value="">
                    </div>
                    <div>

                        <textarea  name="content" rows="4" cols="50" placeholder="Entrer le contenu de l'article">
</textarea>
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



</body>

</html>