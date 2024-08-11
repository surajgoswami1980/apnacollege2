<?= $this->extend("layouts/app") ?>

<?= $this->section("body-content") ?>

<div class="container-fluid " style="margin-top:80px; background-color:#f8f8fd;">
    <div class="row py-5">
        <div class="panel panel-primary align-items-center">
            <div class="panel-body align-items-center text-center ">
                <h3 text-center>Hi <?= $user['name'] ?> , Welcome to your courses!</h3>
                <hr>
                <p>Email: <?= $user['email'] ?></p>
                
            </div>
        </div>
    </div>
</div>

<!-- ----------------------------------------------------login courses------------------------------ -->

<div class="container-fluid " style="background-color:white; margin-top:20px">


 <div class="container-fluid pt-5">
    <div class="container ">
     <h1 class="lh-base  d-flex justify-content-center align-items-center">Join us on</h1>
    </div>
    <div class="row mt-5 d-flex justify-content-between align-items-center text-center">
       <div class="col-md-4 my-5 ">
         <a class="navbar-brand " href="#"> <i class="fa-brands fa-youtube  fa-2x lh-base" style="color:red; "></i> </a>
         <h6>YOUTUBE</h6>
         <h6 CLASS="fw-bold">APNA COLLEGE</h6>
       </div>
       <div class="col-md-4 my-5 ">
         <a class="navbar-brand " href="#"> <i class="fa-brands fa-youtube  fa-2x lh-base" style="color:red; "></i> </a>
         <h6>YOUTUBE</h6>
         <h6 CLASS="fw-bold">APNA COLLEGE</h6>
       </div>
       <div class="col-md-4 my-5 ">
         <a class="navbar-brand " href="#"> <i class="fa-brands fa-youtube  fa-2x lh-base" style="color:red; "></i> </a>
         <h6>YOUTUBE</h6>
         <h6 CLASS="fw-bold">APNA COLLEGE</h6>
       </div>
    </div>
 </div>
</div>


<?= $this->endSection() ?>