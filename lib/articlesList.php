<?php


function getArticles(PDO $pdo, int|null $limit = null, int|null $page = null): array
{
    $sql = "SELECT * FROM `articles` ORDER BY id DESC";
    if ($limit && $page) {
        $sql .= " LIMIT :offset, :limit";
    } else if($limit) {
        $sql .= " LIMIT :limit";
    }
    $query = $pdo->prepare($sql);

    if ($limit) {
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    if ($page) {
        $offset = ($page - 1) * $limit;
        $query->bindValue(":offset", $offset, PDO::PARAM_INT);
    }
    $query->execute();
    $articles = $query->fetchAll(PDO::FETCH_ASSOC);
    return $articles;
}

function getArticle(PDO $pdo, int $id = null): array|bool
{
    $sql = "SELECT * FROM `articles` WHERE id= :id";
    $query = $pdo->prepare($sql);
    $query->bindvalue(":id", $id, PDO::PARAM_INT);
    $query->execute();
    $article = $query->fetch(PDO::FETCH_ASSOC);

    return $article;
}
function getImage($image)
{
    if ($image === null) {
        return _IMAGE_ . "Bible7.jpg";
    }
}
