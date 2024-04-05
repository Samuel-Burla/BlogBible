<?php
require_once __DIR__ . "/lib/articlesList.php";
require_once __DIR__ . "/lib/menu.php";
require_once __DIR__ . "/lib/pdo.php";

$error = false;

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $article = getArticle($pdo, $id);
    if ($article) {
        $mainMenu["article.php"] = ["title" => $article["title"], "head_title" => substr($article["content"], 0, 50), "exclude" => true];
    } else {
        $error = true;
    }
} else {
    $error = true;
}

require_once __DIR__ . "/templates/header.php";
$imagePath = getImage($article["image"])
?>

<?php if (!$error) { ?>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?= $imagePath ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $article["title"] ?></h1>
            <p class="lead"><?= $article["content"] ?></p>
        </div>
    </div>


<?php } else { ?>

    <h1>Page not found</h1>
<?php } ?>


<?php
require_once __DIR__ . "/templates/footer.php";
?>