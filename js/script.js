const doc = document;
const menuOpen = doc.querySelector(".menu");
const menuClose = doc.querySelector(".close");
const overlay = doc.querySelector(".overlay");

menuOpen.addEventListener("click", () => {
  overlay.classList.add("overlay--active");
});

menuClose.addEventListener("click", () => {
overlay.classList.remove("overlay--active");
});

function event_open(){
  document.getElementById("myForm").style.display = "block";
}

function event_close(){
  document.getElementById("myForm").style.display = "none";
}

function friends_open(){
  document.getElementById("myForm").style.display = "block";
}

function friends_close(){
  document.getElementById("myForm").style.display = "none";
}