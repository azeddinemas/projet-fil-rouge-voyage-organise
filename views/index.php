<?php
    
    $obj = new contactController();
    $obj->addContact();
    
    $data = new ProductController();
    $products = $data->getAllProduit();
?>
<main style="background-color: #eee;">
    <?php include 'views/includs/navbar.php'; ?>
    <main id="home">
        <div class="col-4 text-center mx-auto mt-5">
            <?php include 'views/includs/alerts.php'; ?>
        </div>
        <div class="container-lg mb-3">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center" data-aos="fade-down">
                    <div>
                        <img width="80%" src="views\assets\img\home-img.svg" alt="" id="img">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-up">
                    <h1 style="color: #F79F1F;">Hello!</h1>
                    <a href="<?php BASE_URL?>logoutuser" data-bs-toggle="tooltip" data-bs-placement="buttom" title="logout"><h2><?= $_SESSION['user'] ?? ''?></h2></a>
                    <div>
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, minima architecto illum nam, temporibus quia qui eum enim quasi dignissimos quas iste alias eos dolore atque nihil repellat culpa officia!</h3>
                        <a href="<?php BASE_URL ?>login" class="btn text-white mt-3" style="background: #F79F1F;">Login here</a>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </main>
    <div class="mt-4" id="packages">
        <h1 class="text-center fw-bolder" style="font-size: 4rem; color: #444;">our <span>Packages</span></h1>
        <div class="container-fluid row mt-3 p-3 mx-auto">
            <?php foreach ($products as $product) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="card shadow p-2 mb-5 rounded" style="min-width: 240px;max-height: 500px;">
                        <img src="views/assets/img/<?= $product[5] ?>" class="card-img-top rounded-3" style="height: 220px;">
                        <p class="position-absolute ms-2 mt-1 text-white bg-black bg-opacity-50 p-1 rounded-3 fs-5"><i class="fas fa-map-marker-alt fs-3 align-middle text-warning"></i><?= $product[1];?></p>
                        <div class="card-body">
                            <h5 class="card-title fs-3"><?= $product[2] ?>&nbsp;<span class="text-decoration-line-through text-secondary fs-5 fw-lighter"><?= $product[3] ?></span></h5>
                            <p class="card-text"><?= $product[4] ?></p>
                            <form method="POST" action="<?php BASE_URL?>addreserve">
                                <input type="hidden" name="reserve" value="<?= $product[1]?>">
                                <button type="submit" name="addreservation" style="background: #F79F1F;" class="btn text-white">go somewhere</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="container mt-4" id="show">
        <h1 class="text-center fw-bolder" style="font-size: 4rem; color: #444;">our <span>show</span></h1>
        <div class="overflow-auto mt-3" data-aos="zoom-in">
            <div class="col-10 d-flex gap-2">
                <img src="views\assets\img\AdobeStock_214823294_Preview.jpeg" class="w-100">
                <img src="views\assets\img\travel41.jpg" class="w-100">
                <img src="views\assets\img\travel12.jpg" class="w-100">
            </div>
        </div>
    </div>
    <div class="mt-4" id="services">
        <h1 class="text-center fw-bolder" style="font-size: 4rem; color: #444;">our <span>Services</span></h1>
        <div class="container-fluid row p-3 mx-auto">
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in">
                <div class="card shadow p-2 mb-5 rounded" style="min-width: 240px;">
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <i class="fas fa-hotel fs-2 rounded-circle text-white p-3" style="background-color: #F79F1F;"></i>
                        <h1 class="fw-bolder" style="font-size: 57px; color: #666;">01</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-bolder">Affordable Hotels</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in">
                <div class="card shadow p-2 mb-5 rounded" style="min-width: 240px;">
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <i class="fas fa-plane fs-2 rounded-circle text-white p-3" style="background-color: #F79F1F;"></i>
                        <h1 class="fw-bolder" style="font-size: 57px; color: #666;">02</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-bolder">Fastest Travel</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in">
                <div class="card shadow p-2 mb-5 rounded" style="min-width: 240px;">
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <i class="fas fa-utensils fs-2 rounded-circle text-white p-3" style="background-color: #F79F1F;"></i>
                        <h1 class="fw-bolder" style="font-size: 57px; color: #666;">03</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-bolder">Food And Drinks</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in">
                <div class="card shadow p-2 mb-5 rounded" style="min-width: 240px;">
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <i class="fas fa-globe fs-2 rounded-circle text-white p-3" style="background-color: #F79F1F;"></i>
                        <h1 class="fw-bolder" style="font-size: 57px; color: #666;">04</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-bolder">all over the country</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in">
                <div class="card shadow p-2 mb-5 rounded" style="min-width: 240px;">
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <i class="fas fa-hiking fs-2 rounded-circle text-white p-3" style="background-color: #F79F1F;"></i>
                        <h1 class="fw-bolder" style="font-size: 57px; color: #666;">05</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-bolder">Card title</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in">
                <div class="card shadow p-2 mb-5 rounded" style="min-width: 240px;">
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <i class="fas fa-bullhorn fs-2 rounded-circle text-white p-3" style="background-color: #F79F1F;"></i>
                        <h1 class="fw-bolder" style="font-size: 57px; color: #666;">06</h1>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-bolder">Card title</h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-4" id="review">
        <h1 class="text-center fw-bolder" style="font-size: 4rem; color: #444;">Client's Review</h1>
        <div class="p-3" data-aos="zoom-in">
            <div class="d-flex overflow-auto gap-5">
                <div class="col-11 mx-auto shadow-lg p-3 mb-5 bg-body rounded-3">
                    <img src="views\assets\img\pic-1.png" class="rounded-circle mx-auto d-block" style="width: 100px;">
                    <p class="mt-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga incidunt consequatur reprehenderit quo nulla eaque vitae facilis nemo ipsa corporis harum voluptatum nostrum molestias, aspernatur, nihil dolor eveniet quis aut.</p>
                </div>
                <div class="col-11 mx-auto shadow-lg p-3 mb-5 bg-body rounded-4">
                    <img src="views\assets\img\pic-2.png" class="rounded-circle mx-auto d-block" style="width: 100px;">
                    <p class="mt-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga incidunt consequatur reprehenderit quo nulla eaque vitae facilis nemo ipsa corporis harum voluptatum nostrum molestias, aspernatur, nihil dolor eveniet quis aut.</p>
                </div>
                <div class="col-11 mx-auto shadow-lg p-3 mb-5 bg-body rounded-4">
                    <img src="views\assets\img\pic-3.png" class="rounded-circle mx-auto d-block" style="width: 100px;">
                    <p class="mt-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga incidunt consequatur reprehenderit quo nulla eaque vitae facilis nemo ipsa corporis harum voluptatum nostrum molestias, aspernatur, nihil dolor eveniet quis aut.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4" id="contact">
        <h1 class="text-center fw-bolder" style="font-size: 4rem; color: #444;">Contact <span>Us</span></h1>
        <div class="col-8 mx-auto p-3">
            <form method="POST">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mt-3" data-aos="fade-up">
                        <input type="text" name="nom" placeholder="Entrer votre name" class="form-control shadow">
                    </div>
                    <div class="mt-3 col" data-aos="fade-up">
                        <input type="email" name="email" placeholder="E-mail" class="form-control shadow">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 mt-3" data-aos="fade-up">
                        <input type="text" placeholder="Entrer votre number" class="form-control shadow">
                    </div>
                    <div class="mt-3 col" data-aos="fade-up">
                        <input type="text" name="subject" placeholder="Subject" class="form-control shadow">
                    </div>
                </div>
                <div class="my-3" data-aos="fade-up">
                    <textarea name="message" rows="9" placeholder="your message" class="form-control shadow"></textarea>
                </div>
                <div class="text-center my-5">
                    <button type="submit" class="btn text-white shadow text-nowrap" name="submit" style="background-color: #F79F1F;">send message</button>
                </div>
            </form>
        </div>
    </div>
    <footer class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright : AZEDDINE MASLOUH
        </div>
    </footer>
</main>