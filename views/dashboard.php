<?php
    $obj = new DashboardController();
    $rowuser = $obj->rowUser();
    $rowvoyage = $obj->rowProduct();
    $rowres = $obj->rowReserv();
?>
<?php include 'views/includs/sidebar.php';?>
                <!--end sidebar-->
                <!--start Dashboard-->
                <div class="container-fluid">
                    <div class="row mt-5">
                        <div class="col-md col-sm-6 p-2">
                            <div class="p-2" style="background: #badff8;border-radius: 6px;">
                                <i class="bi bi-mortarboard fs-3" style="color: #31a2e4;"></i>
                                <p>Réservation</p>
                                <p class="text-end fw-bold fs-5"><?= $rowres?></p>
                            </div>
                        </div>
                        <div class="col-md col-sm-6 p-2">
                            <div class="p-2" style="background: #ee94cb;border-radius: 6px;">
                                <i class="bi bi-bookmark fs-3" style="color: #f33d9e;"></i>
                                <p>VOYAGER</p>
                                <p class="text-end fw-bold fs-5"><?= $rowvoyage?></p>
                            </div>
                        </div>
                        <!-- <div class="col-md col-sm-6 p-2">
                            <div class="p-2 text-white" style="background: #FF8303;border-radius: 6px;">
                                <i class="bi bi-currency-dollar fs-3"></i>
                                <p>Payments</p>
                                <p class="text-end fw-bold fs-5">DHS 556,000</p>
                            </div>
                        </div> -->
                        <div class="col-md col-sm-6 p-2">
                            <div class="p-2 text-white" style="background: linear-gradient(90deg, rgb(168, 163, 218) 0%, rgb(252, 166, 38) 100%);;border-radius: 6px;">
                                <i class="bi bi-person fs-3"></i>
                                <p>Users</p>
                                <p class="text-end fw-bold fs-5"><?=$rowuser ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>