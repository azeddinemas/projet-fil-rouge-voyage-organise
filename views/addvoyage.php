<?php 
    if (isset($_POST['submit'])) {
        $newuser = new VoyageController();
        $result=$newuser->addvoyage();
    }
?>
<?php include 'views/includs/sidebar.php'; ?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Ajouter un voyage</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>voyage" class="btn btn-sm btn-info m-2"><i class="fas fa-home text-white"></i></a>
                    <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label for="">destination</label>
                            <input type="text" name="localisation" placeholder="destination" class="form-control" required>
                            <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="form-group">
                            <label for="">prix</label>
                            <input type="text" name="prix" placeholder="prix" class="form-control" required>
                            <div class="invalid-feedback">Please choose a price.</div>
                        </div>
                        <div class="form-group">
                            <label for="">promotion</label>
                            <input type="text" name="promotion" placeholder="prix précédent facultatif" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">description</label>
                            <textarea name="description" cols="30" rows="10"class="form-control" placeholder="Adresse" required></textarea>
                            <div class="invalid-feedback"> Please enter a message in the textarea.</div>
                        </div>
                        <div class="form-group">
                            <label for="">images</label>
                            <input type="file" name="img" placeholder="img" class="form-control" required>
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