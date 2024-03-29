<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/lib/articlesList.php";
?>



<h1>Articles</h1>
<div class="row">
    <?php foreach ($articles as $key => $article) {
        require __DIR__ . "/lib/articlesPart.php";
    } ?>
</div>



<?php
require_once __DIR__ . "/templates/footer.php";
?>