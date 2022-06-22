
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


//home logo
function imageProfile() {
    window.location='checkNavBarLogo.php';
}
