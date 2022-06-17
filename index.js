let slideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
	showSlides(slideIndex += n);
}

function currentSlide(n) {
	showSlides(slideIndex = n);
}


function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  
  if (n > slides.length) {
	  slideIndex = 1;
	}    
  if (n < 1) {
	  slideIndex = slides.length;
	}
  
  for(i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	}
  
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
  
}



// Get the login modal
var modal = document.getElementById('loginID');

// When the user clicks anywhere outside of the login modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
          modal.style.display = "none";
    }
}


function myLogOutFunction() {
  if (confirm("Are you sure to log out?")) {
    window.location='logout.php';
  } 
  else{
    window.history.back();
  }
  document.getElementById("logoutID").innerHTML = window.location;
}
