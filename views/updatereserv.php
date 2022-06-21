<?php
   if (isset($_POST['id'])) {
    $data = new ReserveController();
    $foo = $data->getOneReserv();
    }else 
        Redirect::to('reservation');

    if (isset($_POST['submit'])) {
        $newuser = new ReserveController();
        $newuser->updateReserv();
    }
    if (isset($_SESSION['user'])) {
        Redirect::to('index');
    }
?>
<?php include 'views/includs/sidebar.php';?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Modifier reservation</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL; ?>reservation" class="btn btn-sm btn-info m-2"><i class="fas fa-home text-white"></i></a>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?=$foo['id']?>">
                            <label for="">voyage</label>
                            <input type="text" name="voyage" value="<?= $foo['id_voyage']?>" placeholder="voyage" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">nom</label>
                            <input type="text" name="nom" value="<?= $foo['nom']?>" placeholder="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">prenom</label>
                            <input type="text" name="prenom" value="<?= $foo['prenom']?>" placeholder="prenom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="tel" name="phone" value="<?= $foo['phone']?>" placeholder="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ville</label>
                            <input type="text" name="ville" value="<?= $foo['ville']?>" placeholder="ville" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <textarea name="adresse" rows="3" class="form-control" placeholder="Adresse"><?= $foo['adresse']?></textarea>
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