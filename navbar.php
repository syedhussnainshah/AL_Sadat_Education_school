<?php session_start();
$user_id = $_SESSION['id'];
if (empty($user_id)) {
   header('location:login.php');
}

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
            <!-- Button trigger modal -->
<a href="#" class="text-reset me-3" data-bs-toggle="modal" data-bs-target="#calculator">
            <i class="fas fa-calculator"></i>
            </a>
            <style>
                .input-value{
    border: .5px solid #dee2e6;
    border-radius: 5px !important;
    padding: 10px 20px;
    text-align: right;
    box-shadow: 0 0 6px rgb(0 0 0 / 10%);
    background-color: var(--white) !important;
}
.input-value:focus{
    border-color: #dee2e6 !important;
    box-shadow: 0 0 6px rgb(0 0 0 / 10%);
}
.calc-btn{
    text-align: center;
    cursor: pointer;
    padding: 10px 0px;
    border-radius: 5px;
    box-shadow: 0 0 6px rgb(0 0 0 / 10%); 
    width: 100%;
    border: none;
    background-color: var(--white);
    margin: 8px 0px;
}
.calc-btn:focus{
    background-color: var(--primarycolor);
    color: var(--white); 
}
.result-btn{
    background-color: var(--primarycolor);
    color: var(--white);
}
/* ================== Calculator Styling End ================== */


/* Media Quries */

/* Medium devices (tablets, less than 992px) */
@media (min-width: 991.98px) {
   
    /* Sidebar STyling Start */
    body{
        margin-left: var(--sidebarwidth);
    } 
    .offcanvas{
        transform: none;
        visibility: visible !important;
    } 
    /* .modal-backdrop.show{
        opacity: 0 !important;
    } */
    /* Sidebar Styling End */
    
}

/* Small devices (landscape phones, less than 768px) */
@media (max-width: 767.98px) {
    div.dataTables_wrapper div.dataTables_length, div.dataTables_wrapper div.dataTables_filter, div.dataTables_wrapper div.dataTables_info, div.dataTables_wrapper div.dataTables_paginate {
        text-align: center;
        margin: 20px 0px;
    }
}

/* X-Small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {
    .box-info{
        border-radius: 10px;
        /* background-color: var(--gray); */
        padding: 10px 0px;
    }
}


            </style>
  
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
                    <a class="dropdown-item" href="log_out.php">Logout</a>
                </li>
            </ul>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Calculator Model COde Start -->
<div class="modal fade" id="calculator" tabindex="-1" aria-labelledby="calculatorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="calculatorLabel">Calculator</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="calculator">

                    <div class="row">

                        <div class="col-12">
                            <input type="text" class="form-control input-value" id="input_value">
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="clr()" value="AC">AC</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('(')" value="(">(</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num(')')" value=")">)</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('+')" value="+">+</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('1')" value="1">1</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('2')" value="2">2</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('3')" value="3">3</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('-')" value="-">-</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('4')" value="4">4</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('5')" value="5">5</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('6')" value="6">6</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('*')" value="*">*</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('7')" value="7">7</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('8')" value="8">8</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('9')" value="9">9</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('/')" value="/">/</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('0')" value="0">0</button>
                        </div>

                        <div class="col-3">
                            <button class="calc-btn" onClick="num('.')" value=".">.</button>
                        </div>

                        <div class="col-6">
                            <button class="calc-btn result-btn" onClick="solve()" value="b">=</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Claclator Model Code End -->
<script>
    
function num(val){
  document.getElementById('input_value').value += val;
}
function solve(){
  let a = document.getElementById('input_value').value;
  let b = eval(a);
  document.getElementById('input_value'). value = b;
}
function clr(){
  document.getElementById('input_value').value = "";
}
</script>