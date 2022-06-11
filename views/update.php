<?php
    if (isset($_POST['id'])) {
        $data = new UserController();
        $foo = $data->getOneUser();
    }else 
        Redirect::to('home');
    
    if (isset($_POST['submit'])) {
        $newuser = new UserController();
        $newuser->updateUser();
        // header("location:".BASE_URL);

    }
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Modifier un user</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary m-2"><i class="fas fa-home"></i></a>
                    <form method="POST">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?=$foo['id']?>">
                            <label for="">Nom</label>
                            <input type="text" name="nom" placeholder="nom" value="<?= $foo['nom']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Prenom</label>
                            <input type="text" name="prenom" placeholder="prenom" value="<?= $foo['prenom']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="email" name="email" placeholder="E-mail" value="<?= $foo['email']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">adresse</label>
                            <input type="text" name="adresse" placeholder="nom" value="<?= $foo['adresse']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">CIN</label>
                            <input type="text" name="cin" placeholder="cin" value="<?= $foo['cin']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">role</label>
                            <input type="text" name="role" placeholder="role" value="<?= $foo['role']?>" class="form-control">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" name="submit" class="btn btn-primary">validé</button>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
    </div>
</div>