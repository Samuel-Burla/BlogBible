<?php
require_once __DIR__ . "../../lib/menu.php";
require_once __DIR__ . "../../lib/session.php";

$head_title = $_SERVER["SCRIPT_NAME"];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title><?= $mainMenu[basename($head_title)]["head_title"] ?></title>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    D.Y.F.
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <?php foreach ($mainMenu as $key => $itemMenu) { ?>
                    <?php if (!array_key_exists("exclude", $itemMenu)) { ?>
                        <li><a href="<?= $key ?>" class="nav-link px-2 link-secondary"><?= $itemMenu["title"] ?></a></li>
                    <?php  } ?>
                <?php } ?>
            </ul>

            <div class="col-md-3 text-end">
                <?php if (isset($_SESSION['user'])) { ?>
                    <a href="logout.php" class="btn btn-primary">Deconnexion</a>
                <?php } else { ?>
                    <a href="login.php" class="btn btn-outline-primary me-2">Connexion</a>
                <?php } ?>
            </div>
        </header>
    </div>
    <main>