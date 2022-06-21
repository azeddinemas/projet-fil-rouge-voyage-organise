<?php
    if (isset($_POST['id'])) {
        $data = new UserController();
        $foo = $data->getOneUser();
    }else 
        Redirect::to('client');
    
    if (isset($_POST['submit'])) {
        $newuser = new USERController();
        $newuser->updateUser();
    }
?>
<?php include 'views/includs/sidebar.php';?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Modifier un Voyage</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>client" class="btn btn-sm btn-info m-2"><i class="fas fa-home text-white"></i></a>
                    <form method="POST">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?=$foo['id']?>">
                            <label for="">Nom</label>
                            <input type="text" name="nom" value="<?= $foo['nom']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Prenom</label>
                            <input type="text" name="prenom" value="<?= $foo['prenom']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="email" name="email" placeholder="E-mail" value="<?= $foo['email']?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="text" name="password" class="form-control" placeholder="password" value="<?= $foo['password']?>" id="">
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