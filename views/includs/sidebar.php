<?php
    if (!isset($_SESSION['admin'])) {
        Redirect::to('index');
    }
?>
<main class="container-fluid bg-white">
    <div class="row d-flex flex-nowrap">
        <input type="checkbox" id="menu">
        <div style="background: #ededed;" id="sid" class="col-lg-2 col-md-3 col-sm-5 col-8 text-center">
            <label for="menu" id="label" class="btn float-end"><i class="bi bi-arrow-left-circle fs-3"></i></label>
            <a href="<?php BASE_URL?>index"><h2 class="text-start text-dark"><span class="p-1 text-warning">[</span>Voyageon</h2></a>
            <br>
            <img class="rounded rounded-circle w-50" src="views/assets/img/pic-1.png" alt="">
            <h4><?= $_SESSION['admin']?></h4>
            <p class="text-info">Admin</p>
            <hr>
            <nav class="text-start p-2">
                <a class="nav-link text-black <?php if(basename($_SERVER["REQUEST_URI"]) == "dashboard") echo 'bg-warning rounded-pill';?>" href="<?php BASE_URL;?>dashboard">
                    <i class="bi bi-speedometer2 fs-5 me-2"></i>&nbsp;Dashboard
                </a>
                <br>
                <a class="nav-link text-black <?php if(basename($_SERVER["REQUEST_URI"]) == "client") echo 'bg-info rounded-pill';?>" href="<?php BASE_URL;?>client">
                    <i class="bi bi-bookmark fs-5 me-2"></i>&nbsp;Users
                </a>
                <br>
                <a class="nav-link text-black <?php if(basename($_SERVER["REQUEST_URI"]) == "contact") echo 'bg-info rounded-pill';?>" href="<?php BASE_URL;?>contact">
                    <i class="bi bi-envelope-open fs-5 me-E"></i>&nbsp;&nbsp; Contact
                </a>
                <br>
                <a class="nav-link text-black <?php if(basename($_SERVER["REQUEST_URI"]) == "voyage") echo 'bg-info rounded-pill';?>" href="<?php BASE_URL;?>voyage">
                    <i class="bi bi-grid fs-5 me-3"></i>&nbsp;voyage
                </a>
                <br>
                <a class="nav-link text-black <?php if(basename($_SERVER["REQUEST_URI"]) == "reservation") echo 'bg-info rounded-pill';?>" href="<?php BASE_URL;?>reservation">
                    <i class="bi bi-file-earmark-bar-graph fs-5 me-2"></i>&nbsp;Reservation
                </a>
                <br>
                <a class="nav-link text-black" href="#">
                    <i class="bi bi-sliders me-3"></i> Settings
                </a>
                <br>
            </nav>
            <a href="<?php BASE_URL?>logoutadmin" class="nav-link text-black">
                <i class="bi bi-box-arrow-right me-2 fs-5"></i> Logout
            </a>
            <br>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-md d-flex justify-content-between" style="background-color: #ededed;">
                    <label class="btn" style="font-size: x-large;" for="menu"><i class="bi bi-arrow-right-circle"></i></label>
                    <form class="d-flex my-2">
                        <input class="me-2" type="search" id="myInput" onkeyup="myFunction()" placeholder="Search...     🔍">
                        <button class=""><i class="bi bi-bell"></i></button>
                    </form>
                </div>