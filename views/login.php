<?php
    $obj = new UserController();
    $obj->auth();
    if (isset($_SESSION['user'])) {
        Redirect::to('index');
    }
?>
<?php include 'views/includs/navbar.php';?>
<main class="log">
    <a href="<?php echo BASE_URL; ?>index" class="btn btn-sm btn-secondary m-2"><i class="fas fa-home"></i></a>
    <section class="container mt-3 py-2">
        <form method="POST">
            <h1 class="titre m-2 border-start border-3 border-white ps-4 text-white" data-aos="fade-down">Voyageon</h1>
            <hr>
            <h2 class="text-center">Sign In</h2>
            <div class="text-center"><?php include 'views/includs/alerts.php';?></div>
            <?= $_COOKIE['password'] ?? ''?>
            <p class="text-center mb-4">Enter your credentials to access your account</p>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="<?= $_POST['email'] ?? ''?>" class="form-control" placeholder="Enter your email" >
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <input type="checkbox" name="remember">
                <label for="d">remembre me</label>
            </div>
            <div class="text-center d-grid">
                <button type="submit" name="submit" class="btn btn-outline-dark fw-bold">Connexion</button>
            </div>
            <hr>
            <div class="text-center">
                <p>Need an account?<a href="<?php BASE_URL;?>signup"> sign up</a></p>
            </div>
        </form>
    </section>
</main>