<?php
if (isset($_POST['submit'])) {
    $obj = new adminController();
    $obj->auth();
}
if (isset($_SESSION['admin'])) {
    Redirect::to('dashboard');
}

?>

<section style="max-width: 400px; border-radius: 20px" class="container mt-5 py-1 shadow-lg">
    <form method="POST">
        <h1 class="m-3">Admin</h1>
        <h2 class="text-center mt-5">Sign In</h2>
        <?= $_COOKIE['error'] ?? ''?>
        <p class="text-center mb-5">Enter your credentials to access your account</p>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" value="<?= $_POST['email'] ?? '' ?>" name="email" class="form-control" placeholder="Enter your email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password">
        </div>
        <div class="mb-3">
            <input type="checkbox" name="remember">
            <label for="d">remembre me</label>
        </div>
        <div class="d-grid mb-4">
            <input type="submit" value="Connexion" name="submit" class="btn btn-info text-white">
        </div>
    </form>
</section>