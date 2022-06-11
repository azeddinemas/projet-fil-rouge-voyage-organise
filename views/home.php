<?php
    $data = new UserController();
    $users=$data->getAllUsers(); 
    
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>add" class="btn btn-sm btn-primary m-2"><i class="fas fa-plus"></i></a>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">nom</th>
                                <th scope="col">prenom</th>
                                <th scope="col">email</th>
                                <th scope="col">adresse</th>
                                <th scope="col">CIN</th>
                                <th scope="col">role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($users as $user){?>
                            <tr>  
                                <th scope="row"><?php echo $user[1]?></th>
                                <td><?php echo $user[2]?></td>
                                <td><?php echo $user[3]?></td>
                                <td><?php echo $user[4]?></td>
                                <td><?php echo $user[5]?></td>
                                <td><?php echo $user[6]?></td>  
                                <td class="d-flex flex-row">
                                    <form method="POST" action="delete" class="m-1">
                                        <input type="hidden" name="id" value="<?php echo $user[0]?>">
                                        <button  class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                    <form method="POST" action="update" class="m-1">
                                        <input type="hidden" name="id" value="<?=$user[0]?>">
                                        <button  class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></button>
                                    </form>
                                </td>        
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>