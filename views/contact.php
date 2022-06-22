<?php
    $data = new contactController();
    $contacts=$data->getAllContact();
?>
<?php include 'views/includs/sidebar.php'; ?>
               
                <div style="width: 98%; margin: auto;" class="container-fluid">
                    <div class="row mt-4">
                        <div class="col-md d-flex justify-content-between">
                            <div class="">
                                <h3>Contact Details</h3>
                            </div>
                            <div class="">
                                <button class="btn btn-info text-white ">ALL CONTACTS</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div style="overflow-x: auto;" class="row">
                        <table class="table table-hover table-striped">
                            <tr style="color: #ACACAC;">
                                <th scope="col">Name</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Message</th>
                                <th scope="col"></th>
                            </tr>
                            <?php foreach($contacts as $contact){?>
                            <tr>
                                <td><?= $contact['nom']?></td>
                                <td><?= $contact['email']?></td>
                                <td><?= $contact['subject']?></td>
                                <td><?= $contact['message']?></td>
                                <td><i class="bi bi-eye text-info"></i></td>
                            </tr>
                            <?php }?>
                          
                        </table>

                    </div>
                </div>
                <!--end student-->
            </div>
        </div>
    </div>
</main>