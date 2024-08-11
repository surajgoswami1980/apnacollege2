<?= $this->extend("layouts/app") ?>

<?= $this->section("body-content") ?>

<!-- first page sigma -->
<div class="container-fluid mt-5" style="background: white; height:80%">
  <div class="container" >
  <div class="row d-flex justify-content-around">
    <div class="mt-5 col-lg-6">
          <div class="container  mt-5 justify-content-center">
          <h2 class="lh-base mb-3" style="font-size:35px; font-weight:600;"><span class="text-primary">Sigma 4.0</span> : <span>Complete Placement Preparation!</span></h2><br>

          <div class="div  lh-sm d-flex align-items-center "><i class="fa-solid fa-video  align-items-center fa-xl text-center"></i>&nbsp;&nbsp;&nbsp;&nbsp;<h5 class="lh-sm text-center" >
                 Full Stack Web Development (MERN Stack)</h5></div><br>
                
                 <div class="div  lh-sm d-flex align-items-center "><i class="fa-solid fa-video align-items-center fa-xl text-center"></i>&nbsp;&nbsp;&nbsp;&nbsp;<h5 class="lh-sm text-center" >
                 Individual Doubt Solving TAs & Community</h5></div><br>
                
                 <div class="div  lh-lg d-flex align-items-center "><i class="fa-solid fa-video align-items-center fa-xl text-center"></i>&nbsp;&nbsp;&nbsp;&nbsp;<h5 class="lh-sm text-center" >Access to Multiple Industry Grade Projects </h5></div><br>

                 <button onclick="initiatePayment();" type="button" class="btn  btn-primary p-2 px-5 py-2" style="font-size:20px; font-weight:600;  background-color:#ff7700; " > Enroll now ></button>
          </div>
    </div>
      <div  class=" col-lg-4 d-flex justify-content-center align-items-center" >
            <img style="width:600px" src=" <?= base_url("images/sigma1.png") ?>" >
          </div>
  </div>
  </div>
</div>

<!-- ------------------------------------delta vs  sigma -------------------------- -->

<div class="container-fluid py-5" style="background-color: #f8f8fd;">
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <h2 class="fw-bold text-center">Delta v/s Sigma 4.0</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 col-12 mb-4 d-flex" style="max-width: 380px; background-color: #f8f8fd;">
            <div class="card w-100 d-flex flex-column p-4 border border-dark rounded">
                <h2 class="fw-bold mb-3 text-center">Delta 5.0 Δ</h2>
                <h5 class="fw-bold mb-2 text-center">Complete Web Development</h5>
                <ul class="list-unstyled flex-grow-1">
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Complete Web Development (MERN)</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Frontend & React</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Backend & Database</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Version Control (Git & Github)</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Projects like Zerodha, Airbnb, Zoom, Linkedin, ChatGPT, Github & many more</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Individual doubt support: TA</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Certificate of Completion</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Duration - 4.5 months</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Start Date - 9th Aug, 2024</li>
                </ul>
                <button class="btn btn-dark mt-auto">Explore more</button>
            </div>
        </div>
        <div class="col-md-4 col-12 mb-4 d-flex" style="max-width: 380px;">
            <div class="card w-100 d-flex flex-column p-4 border border-dark rounded">
                <h2 class="fw-bold mb-3 text-center">Sigma 4.0 𝚺</h5>
                <h5 class="fw-bold mb-2 text-center">Complete Web Development + DSA</h5>
                <ul class="list-unstyled flex-grow-1">
                    <li class="lh-base"><i class="fa-regular fa-circle-check green"></i> Everything included in Delta 5.0</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check green"></i> Java Language</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check green"></i> Advanced DSA</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check green"></i> Live Doubt Sessions with FAANG Engineers: alternate day</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check green"></i> Library Feature: Video Solutions of FAANG Coding Rounds</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check green"></i> Individual Doubt Support for DSA & Development: TA</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check green"></i> Quant & Aptitude Preparation</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check green"></i> 2 Certificates of Completion</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check green"></i> Duration - 8.5 months</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check green"></i> Start Date - 9th Aug, 2024</li>
                </ul>
                <button class="btn btn-primary mt-auto">Enroll Now</button>
            </div>
        </div>
    </div>
</div>


<!-- --------------------------companies---------------------------------------- -->

<?= $this->include("reuseparts/companies.php") ?>

<!-- -------------------------what you learn in sigma 4.0  ------------------------ -->
<div class="container-fluid py-5" style="background-color: #f8f8fd; margin-top:-15px;">
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <h2 class="fw-bold text-center">What will you learn in Sigma 4.0?</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 col-12 mb-3 d-flex" style="max-width: 380px; background-color: #f8f8fd;">
            <div class="card w-100 d-flex flex-column p-4 border border-dark rounded">
                <h5 class="fw-bold mb-3 text-center">Full Stack Web Development</h5>
                <ul class="list-unstyled flex-grow-1">
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Complete Web Development (MERN)</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Frontend & React</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Backend & Database</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Version Control (Git & Github)</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Projects like Zerodha, Airbnb, Zoom, Linkedin, ChatGPT, Github & many more</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Individual doubt support: TA</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Certificate of Completion</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Duration - 4.5 months</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Start Date - 9th Aug, 2024</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-12 mb-3 d-flex" style="max-width: 380px; background-color: #f8f8fd;">
            <div class="card w-100 d-flex flex-column p-4 border border-dark rounded">
                <h5 class="fw-bold mb-3 text-center">Data Structures & Algorithms</h5>
                <ul class="list-unstyled flex-grow-1">
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Complete Web Development (MERN)</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Frontend & React</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Backend & Database</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Version Control (Git & Github)</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Projects like Zerodha, Airbnb, Zoom, Linkedin, ChatGPT, Github & many more</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Individual doubt support: TA</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Certificate of Completion</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Duration - 4.5 months</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Start Date - 9th Aug, 2024</li>
                </ul>
            </div>
        </div>
        <div class="col-md-4 col-12 mb-3 d-flex" style="max-width: 380px; background-color: #f8f8fd;">
            <div class="card w-100 d-flex flex-column p-4 border border-dark rounded">
                <h5 class="fw-bold mb-3 text-center">Quant & Aptitude Preparation</h5>
                
                <ul class="list-unstyled flex-grow-1">
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Complete Web Development (MERN)</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Frontend & React</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Backend & Database</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Version Control (Git & Github)</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Projects like Zerodha, Airbnb, Zoom, Linkedin, ChatGPT, Github & many more</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Individual doubt support: TA</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Certificate of Completion</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Duration - 4.5 months</li>
                    <li class="lh-base"><i class="fa-regular fa-circle-check"></i> Start Date - 9th Aug, 2024</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- ----------------------------------know -------------  your ciruculam  ----------MERN ----------- -->

<?= $this->include("reuseparts/knowaboutmern.php") ?>


<!--       KNOW YOUR CIRUCULAM       DSA   -->

<div class="container-fluid pb-5">

  <div class="container  mt-5">
     <h5 class="lh-base mx-2  d-flex justify-conten-center align-items-center">Data Structures & Algorithms</h5>
  </div>
  <div class="container">
    <div class="accordion">
        <div class="accordion-item">
            <button class="accordion-button">Programming with Java</button>
            <div class="accordion-content">
                <p><strong>What is Web?</strong></p>    
                <p><strong>Flexbox, Grid & Responsiveness</strong></p>
                <p><strong>Markup with HTML & JSX</strong></p>         
                <p><strong>Bootstrap Layouts & Components</strong></p>        
                <p><strong>Frontend UI Framework - Tailwind CLI</strong></p>
                <p><strong>Core JavaScript & Object Orientation</strong></p>
                
                <p><strong>Async JS - Promises, Async/Await</strong></p>
                
                <p><strong>DOM & Events</strong></p>
                
                <p><strong>Event Bubbling & Delegation</strong></p>
                
                <p><strong>Ajax, Axios & Fetch API</strong></p>
                
                <p><strong>Functional React Components</strong></p>
                
                <p><strong>Props & State Management</strong></p>
                
                <p><strong>Dynamic Component Styling</strong></p>
                
                <p><strong>Functions as Props</strong></p>
                
                <p><strong>Hooks in React: useState, useEffect</strong></p>
                
                <p><strong>Material UI</strong></p>
                
                <p><strong>Custom Hooks</strong></p>
                
                <p><strong>Supplement: Redux & Redux Toolkit</strong></p>
                
                <p><strong>Version Control: Git & Github</strong></p>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-button">Data Structures & Algorithms</button>
            <div class="accordion-content">
                <p><strong>Databases (SQL & No SQL)</strong></p>
               
               <p><strong>Mongo Relationships</strong></p>
               
               <p><strong>Dive Deep into Mongo</strong></p>
               
               <p><strong>Express, Node.js & npm</strong></p>
               
               <p><strong>REST APIs</strong></p>
               
               <p><strong>Routing, Cookies & Session</strong></p>
               
               <p><strong>Middlewares Deep Dive</strong></p>
               
               <p><strong>EJS Templating</strong></p>
               
               <p><strong>MVC Architecture</strong></p>
               
               <p><strong>Client & Server Side Validations</strong></p>
               
               <p><strong>Error Handling & Flash-Connect</strong></p>
               
               <p><strong>Authorization</strong></p>
               
               <p><strong>Cloudinary & MapBox with Geocoding</strong></p>
               
               <p><strong>Deployment with Render</strong></p>
               
               <p><strong>+ More Topics like AWS Deployment, Socket.io, Unit Testing with JEST, WebRTC etc. in Project-Based Learning</strong></p>
            </div>
        </div>
        <div class="accordion-item">
            <button class="accordion-button">Advanced DSA</button>
            <div class="accordion-content">
                <p><strong>Databases (SQL & No SQL)</strong></p>
               
               <p><strong>Mongo Relationships</strong></p>
               
               <p><strong>Dive Deep into Mongo</strong></p>
               
               <p><strong>Express, Node.js & npm</strong></p>
               
               <p><strong>REST APIs</strong></p>
               
               <p><strong>Routing, Cookies & Session</strong></p>
               
               <p><strong>Middlewares Deep Dive</strong></p>
               
               <p><strong>EJS Templating</strong></p>
               
               <p><strong>MVC Architecture</strong></p>
               
               <p><strong>Client & Server Side Validations</strong></p>
               
               <p><strong>Error Handling & Flash-Connect</strong></p>
               
               <p><strong>Authorization</strong></p>
               
               <p><strong>Cloudinary & MapBox with Geocoding</strong></p>
               
               <p><strong>Deployment with Render</strong></p>
               
               <p><strong>+ More Topics like AWS Deployment, Socket.io, Unit Testing with JEST, WebRTC etc. in Project-Based Learning</strong></p>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- -----------------------------------------------build industry level projects    ------------------------------------ -->
<?= $this->include("reuseparts/buildindustryprojects.php") ?>

<!-- --------------------------------------------library +------------------------------------------------------ -->

<div class="container-fluid my-5 " style="background: white; height:80%">
    <div class="div1">
    </div>
  <div class="container" >
   <div class="row d-flex justify-content-center">
    <div class="col-md-6">
          <div class="container  mt-5 justify-content-center">
          <h6 class="lh-base mb-3" style="font-size:25px; font-weight:600;"><span class="text-primary">What is </span>  <span>Library +</span></h6><br>

                 <div class="div  lh-sm d-flex align-items-center "><h5 class="lh-sm " >Get PYQ Video Solutions of Google, Microsoft, Atlassian, Adobe, Goldman Sachs created by same company mentors.</h5></div><br>
                
                 <div class="div  lh-sm d-flex align-items-center "><h5 class="lh-sm " >i.e Google’s most Imp PYQ Video Solution by Google Mentor.</h5></div><br>
          </div>
    </div>
      <div  class=" col-md-5 col-10 d-flex justify-content-center align-items-center" style="margin-top:-50px;" >
            <img style="height:80%; overflow:hidden;" src=" <?= base_url("images/library.png") ?>" >
       </div>
   </div>
   <div class="container d-flex justify-content-center ">
        <div class="col-12 d-flex justify-content-center " style="width: 80vw; margin-top:-20px">
            <img src=" <?= base_url("images/company.png") ?>"  style="width: 80vw;"   >
        </div>
   </div>
   <div class="container d-flex mx-5 align-items-center mt-5">
          <button  type="button" class="btn  btn-dark p-2 px-5 py-3 align-items-center" style="font-size:20px; font-weight:600;  " > Enroll now ></button>
   </div>
  </div>
</div>

<!-- ----------------------------------------doubt assistent ----------------------------------------------------------- -->
<?= $this->include("reuseparts/doubtassistent.php") ?>



<!--  -----------------------------------testonomial----------------------------------- -->

<div class="testo">
<!-- Slideshow container -->
<div class="slideshow-container1 mt-5 container " >
 <div class="container text-center my-5  d-flex justify-content-center align-items-center">
     <h1 class="lh-base mx-2 text-center d-flex justify-content-center align-items-center">Read reviews from students</h1>
  </div>
  <!-- Full-width images with number and caption text -->
  <div class="mySlides1 fade1 ">
    <div class="testimonial-container d-flex justify-content-center">
            <div class="testimonial  ml-2" style="width:50%; height:400px; " >
               <img src="<?= base_url("images/certificate.png")?>"style="width:50% ; height:50%;" >
                <h5>CRACKED GOOGLE</h5>
                <h6>Rojal Sapkota</h6>
                <p>The best things about Alpha was solving lots of questions while saving a lot of my time. In fact 2 of the Qs asked to me in Google interview were directly from Alpha. I am very grateful to ApnaCollege for everything.</p>
            </div>
            <div class="testimonial  ml-2"   style="width:50%;  max-height:400px;">
                 <img src="<?= base_url("images/certificate.png")?>" style="width:50% ; height:50%;">
                <h5 class="w-100">RACKED Microsoft & Amazon</h5>
                <h6>Rojal Sapkota</h6>
                <p>The best things about Alpha was solving lots of questions while saving a lot of my time. In fact 2 of the Qs asked to me in Google interview were directly from Alpha. I am very grateful to ApnaCollege for everything.</p>
            </div>
            <div class="testimonial  ml-2"  style="width:50%;  max-height:400px;">
                <img src="<?= base_url("images/certificate.png")?>" style="width:50% ; height:50%;">
                <h5>CRACKED JP Morgan</h5>
                <h6>Varad Ingale</h6>
                <p>I followed ApnaCollege for everything & watched almost all the videos. With their batch I could study consistently, the alternate day schedule kept me extra motivated to complete all topics. It is a dream come true.</p>
            </div>
        </div>
    

  </div>
  <div class="mySlides1 fade1">
    <div class="testimonial-container d-flex justify-content-center">
            <div class="testimonial  ml-2" style="width:50%; height:400px; " >
               <img src="<?= base_url("images/certificate.png")?>"style="width:50% ; height:50%;" >
                <h5>CRACKED GOOGLE</h5>
                <h6>Rojal Sapkota</h6>
                <p>The best things about Alpha was solving lots of questions while saving a lot of my time. In fact 2 of the Qs asked to me in Google interview were directly from Alpha. I am very grateful to ApnaCollege for everything.</p>
            </div>
            <div class="testimonial  ml-2"   style="width:50%;  max-height:400px;">
                 <img src="<?= base_url("images/certificate.png")?>" style="width:50% ; height:50%;">
                <h5 class="w-100">RACKED Microsoft & Amazon</h5>
                <h6>Rojal Sapkota</h6>
                <p>The best things about Alpha was solving lots of questions while saving a lot of my time. In fact 2 of the Qs asked to me in Google interview were directly from Alpha. I am very grateful to ApnaCollege for everything.</p>
            </div>
            <div class="testimonial  ml-2"  style="width:50%;  max-height:400px;">
                <img src="<?= base_url("images/certificate.png")?>" style="width:50% ; height:50%;">
                <h5>CRACKED JP Morgan</h5>
                <h6>Varad Ingale</h6>
                <p>I followed ApnaCollege for everything & watched almost all the videos. With their batch I could study consistently, the alternate day schedule kept me extra motivated to complete all topics. It is a dream come true.</p>
            </div>
        </div>
    

  </div>
  <div class="mySlides1 fade1">
    <div class="testimonial-container d-flex justify-content-center">
            <div class="testimonial  ml-2" style="width:50%; height:400px; " >
               <img src="<?= base_url("images/certificate.png")?>"style="width:50% ; height:50%;" >
                <h5>CRACKED GOOGLE</h5>
                <h6>Rojal Sapkota</h6>
                <p>The best things about Alpha was solving lots of questions while saving a lot of my time. In fact 2 of the Qs asked to me in Google interview were directly from Alpha. I am very grateful to ApnaCollege for everything.</p>
            </div>
            <div class="testimonial  ml-2"   style="width:50%;  max-height:400px;">
                 <img src="<?= base_url("images/certificate.png")?>" style="width:50% ; height:50%;">
                <h5 class="w-100">RACKED Microsoft & Amazon</h5>
                <h6>Rojal Sapkota</h6>
                <p>The best things about Alpha was solving lots of questions while saving a lot of my time. In fact 2 of the Qs asked to me in Google interview were directly from Alpha. I am very grateful to ApnaCollege for everything.</p>
            </div>
            <div class="testimonial  ml-2"  style="width:50%;  max-height:400px;">
                <img src="<?= base_url("images/certificate.png")?>" style="width:50% ; height:50%;">
                <h5>CRACKED JP Morgan</h5>
                <h6>Varad Ingale</h6>
                <p>I followed ApnaCollege for everything & watched almost all the videos. With their batch I could study consistently, the alternate day schedule kept me extra motivated to complete all topics. It is a dream come true.</p>
            </div>
        </div>
    

  </div>


  <!-- Next and previous buttons -->
  <a class="prev1" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next1" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

</div>
<!-- ----------------------------------------------for small devives testonomilas-------------- -->
 <div class="testo2">
 <!-- Slideshow container -->
<div class="slideshow-container2 mt-5 container " >
 <div class="container text-center my-5  d-flex justify-content-center align-items-center">
     <h1 class="lh-base mx-2 text-center d-flex justify-content-center align-items-center">Read reviews from students</h1>
  </div>
  <!-- Full-width images with number and caption text -->

  <div class="mySlides2 fade2 ">
    <div class="testimonial-container2 d-flex justify-content-center">
            <div class="testimonial2  ml-2" style="width:100%; height:400px; " >
               <img src="<?= base_url("images/certificate.png")?>"style="width:50% ; height:50%;" >
                <h5>CRACKED FLIPKART</h5>
                <h6>SOAJAK Sapkota</h6>
                <p>The best things about Alpha was solving lots of questions while saving a lot of my time. In fact 2 of the Qs asked to me in Google interview were directly from Alpha. I am very grateful to ApnaCollege for everything.</p>
            </div>
        </div>
    

  </div>
  <div class="mySlides2 fade2 ">
    <div class="testimonial-container2 d-flex justify-content-center">
            <div class="testimonial2  ml-2" style="width:100%; height:400px; " >
               <img src="<?= base_url("images/certificate.png")?>"style="width:50% ; height:50%;" >
                <h5>CRACKED GOOGLE</h5>
                <h6>Rojal Sapkota</h6>
                <p>The best things about Alpha was solving lots of questions while saving a lot of my time. In fact 2 of the Qs asked to me in Google interview were directly from Alpha. I am very grateful to ApnaCollege for everything.</p>
            </div>
        </div>
  </div>
  <div class="mySlides2 fade2 ">
    <div class="testimonial-container2 d-flex justify-content-center">
            <div class="testimonial2  ml-2" style="width:100%; height:400px; " >
               <img src="<?= base_url("images/certificate.png")?>"style="width:50% ; height:50%;" >
                <h5>CRACKED amazon</h5>
                <h6>kesha Sapkota</h6>
                <p>The best things about Alpha was solving lots of questions while saving a lot of my time. In fact 2 of the Qs asked to me in Google interview were directly from Alpha. I am very grateful to ApnaCollege for everything.</p>
            </div>
        </div>
  </div>


  <!-- Next and previous buttons -->
  <a class="prev2" onclick="plusSlides2(-1)">&#10094;</a>
  <a class="next2" onclick="plusSlides2(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot2" onclick="currentSlide2(1)"></span>
  <span class="dot2" onclick="currentSlide2(2)"></span>
  <span class="dot2" onclick="currentSlide2(3)"></span>
</div>

</div>


<!--  ------------------------------------------ certificate ----------------------------------------------------------------------------------- -->


<?= $this->include("reuseparts/getcertificate.php") ?>

<!--      --------------------------------- frequently asked question ____________________________-->

<?= $this->include("reuseparts/frequentlyaskedquestion.php") ?>



<?= $this->endsection() ?>