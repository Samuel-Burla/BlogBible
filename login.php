<?php
require_once __DIR__ . "/templates/header.php";
?>

<form method="post">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="password1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<?php
require_once __DIR__ . "/templates/footer.php";
?>