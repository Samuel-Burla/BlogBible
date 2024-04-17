<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/lib/articlesList.php";
require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/pdo.php";
require_once __DIR__ . "/lib/articlesList.php";

$articles = getArticles($pdo, _HOME_ARTICLES_LIMIT_);


?>
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?php echo _IMAGE_ ?>./Bible1.jpg" alt="Bible" width="200">
    <h1 class="display-5 fw-bold text-body-emphasis">Study the Bible </h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="/articles.php" class="btn btn-primary btn-lg px-4 gap-3">See all</a>
        </div>
    </div>
</div>
<div class="row">
    <?php foreach ($articles as $key => $article) {
        require __DIR__ . "/lib/articlesPart.php";
    } ?>
</div>
<?php
require_once __DIR__ . "/templates/footer.php";
?>