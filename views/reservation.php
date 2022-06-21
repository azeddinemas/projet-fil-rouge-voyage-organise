<?php
    $data = new ReserveController();
    $products=$data->getAllReserv();
?>
<?php include 'views/includs/sidebar.php';?>
                <!-- start client -->
                <div style="width: 98%; margin: auto;" class="container-fluid">
                    <div class="row mt-4">
                        <div class="col-md d-flex justify-content-between">
                            <div class="">
                                <h3>Reservation List</h3>
                            </div>
                            <?php include 'views/includs/alerts.php'; ?>
                            <div class="">
                                <a href="#" class="btn btn-info text-white ">ALL RASERVATION</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div style="overflow-x: auto;" class="row">
                        <table class="table table-hover" id="myTable">
                            <thead>
                                <tr style="color: #acacac;">
                                    <th scope="col">voyage</th>
                                    <th scope="col">nom</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Ville</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <?php
                                    foreach ($products as $product){?>
                                <tr class="align-middle">        
                                    <td><?= $product[1]?></td>
                                    <td><?= $product[2]?></td>
                                    <td><?= $product[3]?></td>
                                    <td><?= $product[4]?></td>
                                    <td><?= $product[5]?></td>
                                    <td><?= $product[6]?></td>
                                    <td>
                                        <div class="d-flex flex-row justify-content-end">
                                            <form method="POST" action="<?php BASE_URL?>updatereserv" class="m-1">
                                                <input type="hidden" name="id" value="<?=$product[0]?>">
                                                <button class="btn btn-outline-primary">Update</button>
                                            </form>
                                            <form method="POST" action="<?php BASE_URL?>deletereserv" class="m-1">
                                                <input type="hidden" name="id" value="<?php echo $product[0]?>">
                                                <button class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end student-->
            </div>
        </div>
    </div>
</main>