<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "../../lib/articlesList.php";
require_once __DIR__ . "../../lib/pdo.php";


if (isset($_GET['page'])) {
    $page = (int)$_GET['page'];
}else{
    $page = 1;
}

$articles = getArticles($pdo, _ADMIN_ARTICLES_LIMIT_, $page);


?>


<h2 class="py-5">Articles</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $article) { ?>
            <tr>
                <th><?= $article['id'] ?></th>
                <td><?= $article['title'] ?></td>
                <td><?= $article['content'] ?></td>
                <td>Modifier | Supprimer</td>
            </tr>

        <?php } ?>
    </tbody>
</table>


<?php require_once __DIR__ . "/templates/footer.php"; ?>