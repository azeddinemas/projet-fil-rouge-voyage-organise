<?php
    if (isset($_POST['id'])) {
        $data = new VoyageController();
        $foo = $data->getOnevoyage();
    }else 
        Redirect::to('voyage');
    
    if (isset($_POST['submit'])) {
        $newuser = new VoyageController();
        $newuser->updatevoyage();
    }
?>
<?php include 'views/includs/sidebar.php';?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Modifier un Voyage</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>voyage" class="btn btn-sm btn-info m-2"><i class="fas fa-home text-white"></i></a>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?=$foo['id']?>">
                            <label for="">destination</label>
                            <input type="text" name="localisation" placeholder="localisation" value="<?= $foo['localisation']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Prix</label>
                            <input type="text" name="prix" placeholder="prix" value="<?= $foo['prix']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">promotion</label>
                            <input type="text" name="promotion" placeholder="promotion" value="<?= $foo['promotion']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">description</label>
                            <textarea name="description" cols="30" rows="10"class="form-control" placeholder="Adresse"><?= $foo['description']?></textarea>
                        </div>                   
                        <div class="form-group">
                            <label for="">image</label>
                            <div>
                                <input type="file" name="img" class="form-control" >
                            </div>
                        </div>                   
                        <div class="form-group mt-2">
                            <button type="submit" name="submit" class="btn btn-outline-dark">validé</button>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>