<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <link rel="stylesheet" href="./assets/css/admin.css">
</head>

<body>
    <h1>Tous les articles</h1>
    <a href="views/admin/create.php">Créer un nouvel article</a>
    <br>
    <br>
    <div>
        <table style="width: 100%;">
            <thead>
                <tr>
                    <th>#Id</th>
                    <th>Titre</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php foreach ($articles as $article): ?>
                <tr>
                    <td>
                        <?= $article->id; ?>
                    </td>
                    <td>
                        <?= $article->title; ?>
                    </td>
                    <td>
                        <a href="index.php?controller=admin_edit&id=<?= $article->id; ?>">Editer</a>
                        <a href="index.php?controller=admin_delete&id=<?= $article->id; ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>