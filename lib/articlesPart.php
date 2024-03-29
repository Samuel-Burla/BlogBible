<div class="card col-md-4 p-0">
    <img src="/assets/images/<?= $article["image"] ?>" height="250" class="card-img-top" alt="Bible">
    <div class="card-body">
        <h5 class="card-title"><?= $article["title"] ?></h5>
        <p class="card-text"><?= $article["content"] ?></p>
        <a href="/article.php?id=<?= $key ?>" class="btn btn-primary">See more</a>
    </div>
</div>