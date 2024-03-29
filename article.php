<?php
require_once __DIR__ . "/lib/articlesList.php";
require_once __DIR__ . "/lib/menu.php";

$currentArticle = $_GET["id"];

$mainMenu["article.php"] = ["title" => $articles[$currentArticle]["title"], "head_title" => substr($articles[$currentArticle]["content"], 0, 50), "exclude" => true];

require_once __DIR__ . "/templates/header.php";

?>


<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img src="/assets//images/<?= $articles[$currentArticle]["image"] ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $articles[$currentArticle]["title"] ?></h1>
        <p class="lead"><?= $articles[$currentArticle]["content"] ?></p>
    </div>
</div>


<?php
require_once __DIR__ . "/templates/footer.php";
?>