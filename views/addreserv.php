<?php
    if (isset($_POST['submit'])) {
        $newuser = new ReserveController();
        $newuser->addReserv();
    }
?>
<?php include 'views/includs/sidebar.php';?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">ADD NEW reservation</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL; ?>reservation" class="btn btn-sm btn-info m-2"><i class="fas fa-home text-white"></i></a>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">voyage</label>
                            <input type="text" name="voyage" placeholder="voyage" class="form-control">
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