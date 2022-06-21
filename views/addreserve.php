<?php 
    if (!isset($_SESSION['user'])) {
        Redirect::to('login');
    }
        
    if (isset($_POST['submit'])) {
        $newuser = new ReserveController();
        $result=$newuser->addReserv();
    }
    $data = new ProductController();
    $products = $data->getAllProduit();
?>
<?php include 'views/includs/navbar.php';?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Ajouté votre reservation</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL; ?>index" class="btn btn-sm btn-secondary m-2"><i class="fas fa-home"></i></a>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">voyage</label>
                            <input type="text" name="voyage" placeholder="localisation" value="<?= $_POST['reserve']?? ''?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">nom</label>
                            <input type="text" name="nom" placeholder="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">prenom</label>
                            <input type="text" name="prenom" placeholder="prenom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="tel" name="phone" placeholder="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ville</label>
                            <input type="text" name="ville" placeholder="ville" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <textarea name="adresse" rows="3" class="form-control" placeholder="Adresse"></textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" name="submit" class="btn btn-outline-dark">Réservé</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>