function popupfunction(x)
{
document.getElementById('popup'+x).style.display='block';
document.getElementById('fade'+x).style.display='block';
}

function popupclose(x)
{
document.getElementById('popup'+x).style.display='none';
document.getElementById('fade'+x).style.display='none';
}

// Get the pop-up container and the button to open it
const popup = document.getElementById("picturePopup");
const button = document.getElementById("pictureButton");

// Add a click event listener to the button
button.addEventListener("click", () => {
// Show the pop-up container
popup.classList.add("showPopup");
});

// Function to close the pop-up container
function closePopup() {
popup.classList.remove("showPopup");
}


//login and sign up
var x = document.getElementById("login");
var y = document.getElementById("signup");
var z = document.getElementById("btn");

function signup(){
  x.style.left = "-400px";
  y.style.left = "50px"; 
  z.style.left = "110px"; 
} 
function login(){
  x.style.left = "50px";
  y.style.left = "450px"; 
  z.style.left = "0"; 
}