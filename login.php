<?php
require_once __DIR__ . "/templates/header.php";
require_once __DIR__ . "/lib/session.php";
require_once __DIR__ . "/lib/user.php";


$errors = [];
if (isset($_POST['loginForm'])) {
    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];

    $user = verifyUserLogin($pdo, $email, $password);
    if ($user) {
        session_regenerate_id(true);
        $_SESSION['user'] = $user;
        if ($user['role'] === 'user') {
            header('Location: index.php');
        } else {
            header('Location: /admin/index.php');
        }
    } else {
        $errors[] = 'Mot de passe ou email incorrects !';
    }
}




?>

<form method="post">
    <?php foreach ($errors as $error) { ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php } ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="emailInput" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="passwordInput" class="form-control" id="password1">
    </div>
    <button type="submit" class="btn btn-primary" name="loginForm">Submit</button>
</form>



<?php
require_once __DIR__ . "/templates/footer.php";
?>