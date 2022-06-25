<?php
    $data = new VoyageController();
    $products=$data->getAllvoyage(); 
?>
<?php include 'views/includs/sidebar.php';?>
                <div style="width: 98%; margin: auto;" class="container-fluid">
                    <div class="row mt-4">
                        <div class="col-md d-flex justify-content-between">
                            <div width>
                                <h3>Voyager List</h3>
                            </div>
                            <?php include 'views/includs/alerts.php'; ?>
                            <div class="">
                                <a href="<?php BASE_URL?>addvoyage" class="btn btn-info text-white ">ADD NEW VOYAGER</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div style="overflow-x: auto;" class="row">
                        <table class="table table-hover" id="myTable">
                            <thead>
                                <tr style="color: #acacac;">
                                    <th scope="col">images</th>
                                    <th scope="col">destination</th>
                                    <th scope="col">prix</th>
                                    <th scope="col">promotion</th>
                                    <th scope="col">description</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <?php
                                    foreach ($products as $product){?>
                                <tr class="align-middle">        
                                    <th style="width: 100px;"><img src="views/assets/img/<?= $product[5]?>" class="rounded align-items-center w-100" ></th>
                                    <td><?= $product[1]?></td>
                                    <td><?= $product[2]?></td>
                                    <td><?= $product[3]?></td>
                                    <td class="text-wrap"><?= $product[4]?></td>
                                    <td>
                                        <div class="d-flex flex-row">
                                            <form method="POST" action="<?php BASE_URL?>updatevoyage" class="m-1">
                                                <input type="hidden" name="id" value="<?=$product[0]?>">
                                                <button class="btn btn-outline-primary">Update</button>
                                            </form>
                                            <form method="POST" action="<?php BASE_URL?>deletevoyage" class="m-1">
                                                <input type="hidden" name="id" value="<?php echo $product[0]?>">
                                                <button class="btn btn-outline-danger" onclick="return deleterow()"><i class="fas fa-trash"></i></button>
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