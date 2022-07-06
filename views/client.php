<?php
    $data = new UserController();
    $users=$data->getAllUsers(); 
?>
<?php include 'views/includs/sidebar.php';?>
                <!-- start client -->
                <div style="width: 98%; margin: auto;">
                    <div class="row mt-4">
                        <div class="col-md d-flex justify-content-between">
                            <div class="">
                                <h3>Clients List</h3>
                            </div>
                            <div class="">
                                <img class="" src="images/scroll.svg" alt="">
                                <a href="#" class="btn btn-info text-white ">All Clients</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div style="max-height: 80vh;" class="row overflow-auto">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr style="color: #acacac;">      
                                    <th scope="col">nom</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">password</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <?php foreach($users as $user){ ?>
                                <tr class="align-middle">
                                    <th scope="row"><?php echo $user['nom']?></th>
                                    <td><?= $user['prenom']?></td>
                                    <td><?= $user['email']?></td> 
                                    <td><?= $user['password']?></td> 
                                    <td class="d-flex flex-row justify-content-end">
                                        <form method="POST" action="<?php BASE_URL?>deleteuser" class="m-1">
                                            <input type="hidden" name="id" value="<?php echo $user['id']?>">
                                            <button onclick="return deleterow()" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                        <form method="POST" action="<?php BASE_URL?>updateuser" class="m-1">
                                            <input type="hidden" name="id" value="<?=$user['id']?>">
                                            <button  class="btn btn-outline-primary"><i class="fas fa-edit"></i></button>
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
</main>
