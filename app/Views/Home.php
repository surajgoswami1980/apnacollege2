<?= $this->extend("layouts/app") ?>

<?= $this->section("body-content") ?>

<!-- middle content -->

<div class="container-fluid mt-5 py-5" style="background: linear-gradient(to right, #ffffff, #dee0f5); height:80%">
  <div class="container" >
     <!-- ------------------- -->
     <?php if (session()->getFlashdata('success')): ?>
      <div id="flashMessage1" class="alert alert-success alert-dismissible fade1 show1" role="alert">
          <?= session()->getFlashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>
<!-- --------------------------------- -->
       <?php if (isset($validation)) : ?>
                    <div class="col-12">
                       <div id="flashMessage2" class="alert alert-danger alert-dismissible fade2 show3" role="alert">
                            <?= $validation->listErrors() ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
        <?php endif; ?>
        <!-- ------------------------------------------------ -->

  <div class="row">
    <div class="mt-5 col-lg-6">
          <div class="container  mt-5 justify-content-center">
                 <h1 class="lh-base" style=" font-size:48px; font-weight:600; ">Learn & become the </h1>
                 <h1 class="lh-base" style="color:blue; font-size:48px; font-weight:600;  color:#505ba0; ">Top 1% software developer</h1>
                 <h3  >Delta - Web Development</h3><br>

                 <a class="dropdown-item" href="<?= base_url("courses/delta")?>"><button  type="button" class="btn  btn-primary p-3 px-5" style="font-size:20px; font-weight:500;  background-color:#505ba0; " > Explore new batches ></button></a>
          </div>
    </div>
    <div  class="mt-5 col-lg-6">
            <img class="h-100 w-100" src=" <?= base_url("images/boy3.png") ?>" >
          </div>
  </div>
  </div>
</div>

<!-- first pagr bottom  -->

<div style="height:auto; padding-top:50px; font-weight:500; color:white; background-color:#505ba0; ">
  <div class="  w-100 d-flex  justify-content-center align-items-center margin:auto;" style="height:50%;" >
      <h4 class="text-center ">INDIA'S MOST LOVING CODING COMMUNITY ❤️</h5>
  </div>
  <div class="container ">
    <div class="row d-flex justify-content-center align-items-center">
       <div class="col-md-3 my-3">
          <h5>50,0000+</h5>
          <h5>HAPPY LEARNER</h5>
      </div>
      <div class="col-md-3 my-3">
        <h5>50,0000+</h5>
         <h5>HAPPY LEARNER</h5>
       </div>
      <div class="col-md-3 my-3">
          <h5>50,0000+</h5>
           <h5>HAPPY LEARNER</h5>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>  

<!-- ------------------------------------------------------- -->
<div class="container bg-white  justify-content-center align-items-center text-center"  style="height:400px; "><br>
  <h5 class="lh-base mt-5" style="color:#505ba0;">New AUG'24 Batch🔥</h5><br>
  <h4 class="lh-base fw-bold">Sigma 4.0 : Development + DSA + Aptitude</h4><br>
  <h5 class="lh-base">Start your placement preparation today!</h5><br>
  <button  type="button" class="btn  btn-primary p-3 px-5" style="font-size:20px; font-weight:500;  background-color:#505ba0; " > Explore ></button>

</div>

<!-- --------- Companies list ------------ -->

<?= $this->include("reuseparts/companies.php") ?>

<!-- -----------------STUDENTS PLACED IN DIFFERENT COMPANIES ----------------------------------------------- -->

<div class="container-fluid pb-5  justify-content-center align-items-center " style="background-color:#f8f8fd; padding-top: 30px; margin-top:-15px;">
  <div class="container justify-content-center align-items-center text-center">
    <h4 class="lh-base my-5 fw-bold" style="color:#505ba0;">Our Selected Candidate</h4>
  </div>
  <div class="container">
   <div class="row mt-2 d-flex justify-content-center align-items-center">
    <div class="col-md-5  mt-5">
      <img style="height:80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
    <div class="col-md-5  mt-5">
      <img style="height: 80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
   </div>
  </div>
  <div class="container">
   <div class="row mt-2 d-flex justify-content-center align-items-center">
    <div class="col-md-5  mt-5">
      <img style="height:80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
    <div class="col-md-5  mt-5">
      <img style="height: 80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
   </div>
  </div>
  <div class="container">
   <div class="row mt-2 d-flex justify-content-center align-items-center">
    <div class="col-md-5  mt-5">
      <img style="height:80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
    <div class="col-md-5  mt-5">
      <img style="height: 80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
   </div>
  </div>
  <div class="container">
   <div class="row mt-2 d-flex justify-content-center align-items-center">
    <div class="col-md-5  mt-5">
      <img style="height:80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
    <div class="col-md-5  mt-5">
      <img style="height: 80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
   </div>
  </div>
  <div class="container">
   <div class="row mt-2 d-flex justify-content-center align-items-center">
    <div class="col-md-5  mt-5">
      <img style="height:80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
    <div class="col-md-5  mt-5">
      <img style="height: 80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
   </div>
  </div>
  <div class="container">
   <div class="row mt-2 d-flex justify-content-center align-items-center">
    <div class="col-md-5  mt-5">
      <img style="height:80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
    <div class="col-md-5  mt-5">
      <img style="height: 80%; width:75%" src=" <?= base_url('images/selected.png') ?>" >
    </div>
   </div>
  </div>


  <div class="container my-5 d-flex justify-content-center align-items-center">
  <button  type="button" class="btn  btn-primary p-3 px-5" style="font-size:20px; font-weight:500;  background-color:#505ba0; " > See more ></button>
  </div>
</div>

<!-- --------------------------------------------------- -->

<div class="container bg-white  justify-content-center align-items-center " style="background-color:#f8f8fd;">
  <div class="container">
    <div class=" my-5 d-flex justify-content-center fw-bold align-items-center text-center">
      <h3 class="fw-bold">On a mission to teach Millions</h3>
   </div>
  </div> 
  <div class="container d-flex justify-content-center mb-5 align-items-center">
    <div class="row col-lg-10">
        <img style="" src=" <?= base_url('images/certificate.png') ?>" >
    </div>
  </div>
</div>

<!-- ''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''' -->

<div class="container-fluid py-5" style="background-color:#f8f8fd;margin-top:20px">


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

<!-- --------------------------------------------------------------------------------------------------------- -->

<?= $this->endsection() ?>
