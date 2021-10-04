<?php session_start();
$user_id = $_SESSION['id'];
?><?php include_once"connection.php";?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#Sidebar" aria-controls="Sidebar">
            <i class="fas fa-bars"></i> 
        </button>

        <!-- Right elements -->
        <div class="d-flex align-items-center ms-auto">
            <!-- Icon -->
            <a class="text-reset me-3" href="#">
                <i class="fas fa-shopping-cart"></i>
            </a>
    
            <!-- Notifications -->
            <a
            class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="NotificationsLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false" >
                <i class="fas fa-bell"></i>
                <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="NotificationsLink" >
                <li>
                    <a class="dropdown-item" href="#">Some news</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Another news</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                </li>
            </ul>
    
            <!-- Avatar -->
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="ProfileLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false" >
                <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="Profile Image" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="ProfileLink" >
                <li>
                    <a class="dropdown-item" href="#">My profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Settings</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Logout</a>
                </li>
            </ul>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>