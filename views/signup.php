<?php 
    if (isset($_POST['submit'])) {
        $newuser = new UserController();
        $result=$newuser->Register();
    }
    if (isset($_SESSION['user'])) {
        Redirect::to('index');
    }
?>

<?php include 'views/includs/navbar.php'; ?>
<main class="log py-3">
    <section style="max-width: 500px;" class="container py-1">
        <form method="POST" class="needs-validation" novalidate>
            <h1 class="titre m-3 border-start border-3 border-white ps-4 text-white">Voyageon</h1>
            <h2 class="text-center mt-5">Sign Up</h2>
            <?= $_COOKIE['vide'] ?? $_COOKIE['fake'] ?? $_COOKIE['mail'] ??''?>
            <p class="text-center mb-5">Enter your credentials to access your account</p>
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-3">
                    <label class="form-label">Last name</label>
                    <input type="text" name="nom" class="form-control" placeholder="Enter your last name" data-aos="fade-right" pattern="^\w{3,}$" required>
                    <div class="invalid-feedback">Please choose a name.</div>
                </div>
                <div class="col-lg-6 col-md-6 mb-3">
                    <label class="form-label">first name</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Enter your first name" data-aos="fade-left" pattern="^\w{3,}$" required>
                    <div class="invalid-feedback">Please choose a first name.</div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="exampl@gmail.com" pattern="^([a-z0-9]+(@gmail.com))$" data-aos="fade-up" required>
                <div class="invalid-feedback">Please choose a E-mail.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" pattern="^\w{4,}$" data-aos="fade-up" required>
                <div class="invalid-feedback">Please choose a password.</div>
            </div>
            <div class="">
                <label class="form-label">Confirmer Password</label>
                <input type="password" name="config" class="form-control" placeholder="Confirmer your password" pattern="^\w{4,}$" data-aos="fade-up" required>
                <div class="invalid-feedback">Please Confirmer password.</div>
            </div>
            <div class="mt-4 d-grid">
                <input type="submit" value="Sign up" name="submit" class="btn btn-outline-dark fw-bold">
            </div>
            <div class="mt-3 text-center">
                <p>Have already an account?<a href="<?php BASE_URL ?>login"> Login here</a></p>
            </div>
        </form>
    </section>
</main>