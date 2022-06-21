<header class="sticky-top d-flex justify-content-between bg-white shadow-lg p-2">
    <nav class="container-fluid d-flex align-items-center justify-content-between">
        <div>
            <a href=""><img src="views\assets\img\LogoTravel.png" width="85px"></a>
        </div>
        <label for="menu" id="toggel">&#9776;</label>
        <input type="checkbox" class="d-none" id="menu">
        <div class="menu text-center">
            <label for="menu" id="toggel"><i class="bi bi-x-lg"></i></label>
            <a href="<?php echo BASE_URL; ?>index" class="text-dark">home</a>
            <a href="#packages" class="text-dark">packages</a>
            <a href="#show" class="text-dark">show</a>
            <a href="#services" class="text-dark">services</a>
            <a href="#review" class="text-dark">review</a>
            <a href="#contact" class="text-dark">contact</a>
            <a href="<?php BASE_URL ?>login" class="btn rounded-3 text-white border-bottom-0" style="background-color: #F79F1F;">Se connecter</a>
        </div>
    </nav>
</header>