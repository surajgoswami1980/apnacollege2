<?= $this->extend("layouts/app") ?>

<?= $this->section("body-content") ?>
<!-- --------------------------------------first page delta------------------------------------------------------------- -->

<div class="container-fluid mt-5" style="background: white; height:80%">
  <div class="container" >
  <div class="row d-flex justify-content-around">
    <div class="mt-5 col-lg-6">
          <div class="container  mt-5 justify-content-center">
                 <h2 class="lh-base mb-3" style=" font-size:35px; font-weight:600; ">Delta 5.0 : Complete Web Development!</h2>
                 <div class="div  lh-sm d-flex align-items-center "><i class="fa-solid fa-video  align-items-center fa-xl text-center"></i>&nbsp;&nbsp;&nbsp;&nbsp;<h5 class="lh-sm text-center" >
                 Full Stack Web Development (MERN Stack)</h5></div><br>
                
                 <div class="div  lh-sm d-flex align-items-center "><i class="fa-solid fa-video align-items-center fa-xl text-center"></i>&nbsp;&nbsp;&nbsp;&nbsp;<h5 class="lh-sm text-center" >
                 Individual Doubt Solving TAs & Community</h5></div><br>
                
                 <div class="div  lh-lg d-flex align-items-center "><i class="fa-solid fa-video align-items-center fa-xl text-center"></i>&nbsp;&nbsp;&nbsp;&nbsp;<h5 class="lh-sm text-center" >Access to Multiple Industry Grade Projects </h5></div><br>
                

                 <a href="<?= base_url('initiatePayment')?>" target="_blank" ><button  type="button" class="btn  btn-primary p-2 px-5 py-2" style="font-size:20px; font-weight:600;  background-color:#ff7700; " > Enroll now ></button></a>
          </div>
    </div>
    <div  class="mt-5 col-lg-5">
            <img class="h-80 w-60" src=" <?= base_url("images/1.png") ?>" >
          </div>
  </div>
  </div>
</div>

<!-- -----------------------------     companies --------------------------------------------------------------------- -->

<?= $this->include("reuseparts/companies.php") ?>

<!-- know about cericulam  MERN  -->
 
<?= $this->include("reuseparts/knowaboutmern.php") ?>


<!-- ----------------------------------------------BUILD INDUSTRY LEVEL PROJECTS  ----------------------------- -->

<?= $this->include("reuseparts/buildindustryprojects.php") ?>
<!-- ----------------------------------------------------doubtassistent-------------------------------------------- -->


<?= $this->include("reuseparts/doubtassistent.php") ?>

<!-- ------------------------------------------------get certificate --------------------------------------------------- -->


<?= $this->include("reuseparts/getcertificate.php") ?>

<!--      --------------------------------- frequently asked question ____________________________-->

<?= $this->include("reuseparts/frequentlyaskedquestion.php") ?>



<?= $this->endsection() ?>