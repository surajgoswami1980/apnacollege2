function toggleDropdown() {
    var dropdownMenu = document.getElementById('servicesMenu');
    dropdownMenu.classList.toggle('show');
}

    function toggleNav() {
      var overlay = document.getElementById("myNav");
      var icon = document.querySelector('.hamburger-icon');
      if (overlay.style.width === "100%") {
        overlay.style.width = "0%";
          icon.style.display = "block";
      } else {
        overlay.style.width = "100%";
        icon.style.display = "none";
      }
    }



  
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize modals
      var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
      var signUpModal = new bootstrap.Modal(document.getElementById('SignUpModal'));
      var forgetModal = new bootstrap.Modal(document.getElementById('forgetModal'));
  
      // Toggle to Sign Up modal
      document.getElementById('createAccountLink').addEventListener('click', function(e) {
        e.preventDefault();
        loginModal.hide();
        signUpModal.show();
        document.getElementById('SignUpModal').addEventListener('hidden.bs.modal', function () {
          // Ensure backdrop is removed
          document.body.classList.remove('modal-open');
          document.querySelector('.modal-backdrop ').remove();
        });
      });
  
      // Toggle to Sign In modal
      document.getElementById('signInLink').addEventListener('click', function(e) {
        e.preventDefault();
        signUpModal.hide();
        loginModal.show();
        document.getElementById('loginModal').addEventListener('hidden.bs.modal', function () {
          // Ensure backdrop is removed
          document.body.classList.remove('modal-open');
          document.querySelector('.modal-backdrop ').remove();
        });

      });
  
      // Show Forget Password modal

  
      // Handle Forget Password modal close
      document.getElementById('forgetModal').addEventListener('hidden.bs.modal', function () {
        // Ensure backdrop is removed
        document.body.classList.remove('modal-open');
        document.querySelector('.modal-backdrop ').remove();
      });

            // Handle Forget Password modal close


                  // Handle Forget Password modal close

    });
    
    // know your answer 

    document.querySelectorAll('.accordion-button').forEach(button => {
      button.addEventListener('click', () => {
          const content = button.nextElementSibling;
          const arrow = button.querySelector('.arrow');
  
          button.classList.toggle('active');
          if (content.style.display === "block") {
              content.style.display = "none";
          } else {
              content.style.display = "block";
          }
  
          arrow.textContent = content.style.display === "block" ? '▲' : '▼';
      });
  });

  // course realed doubts 

  document.querySelectorAll('.accordion1-button').forEach(button => {
    button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        const arrow = button.querySelector('.arrow');

        button.classList.toggle('active');
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }

        arrow.textContent = content.style.display === "block" ? '▲' : '▼';
    });
});
  // -----------------------------

  // testonomials ----------------------------------------------------------------------------

  
  let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides1 = document.getElementsByClassName("mySlides1");
  let dots = document.getElementsByClassName("dot");
  if (n > slides1.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides1.length}
  for (i = 0; i < slides1.length; i++) {
    slides1[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides1[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

// testonomial small devices

let slideIndex2 = 1;
showSlides2(slideIndex2);

// Next/previous controls
function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}

// Thumbnail image controls
function currentSlide2(n) {
  showSlides2(slideIndex = n);
}

function showSlides2(n) {
  let i;
  let slides2 = document.getElementsByClassName("mySlides2");
  let dots2 = document.getElementsByClassName("dot2");
  if (n > slides2.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = slides2.length}
  for (i = 0; i < slides2.length; i++) {
    slides2[i].style.display = "none";
  }
  for (i = 0; i < dots2.length; i++) {
    dots2[i].className = dots2[i].className.replace(" active", "");
  }
  slides2[slideIndex2-1].style.display = "block";
  dots2[slideIndex2-1].className += " active";
}


// ---------------------------------------------------------------------

// -------------------flash-------------------------


document.addEventListener("DOMContentLoaded", function() {
  const successMessage = document.getElementById('flash-success');
  const errorMessage = document.getElementById('flash-error');

  if (successMessage.innerHTML.trim() !== "") {
      successMessage.style.display = "block";
      setTimeout(function() {
          successMessage.style.display = "none";
      }, 5000); // Hide after 5 seconds
  }

  if (errorMessage.innerHTML.trim() !== "") {
      errorMessage.style.display = "block";
      setTimeout(function() {
          errorMessage.style.display = "none";
      }, 5000); // Hide after 5 seconds
  }
});

function closeFlashMessage(id) {
  document.getElementById(id).style.display = 'none';
}