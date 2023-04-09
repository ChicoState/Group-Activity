
function openNav() {
    $("#jtron").hide(2500);
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    $("#jtron").show(2500);
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}

function event_open(){
  document.getElementById("myForm").style.display = "block";
}

function event_close(){
  document.getElementById("myForm").style.display = "none";
}

function sidebar_open() {
  document.getElementById("mySidebar").style.display = "block";
}
  
function sidebar_close() {
  document.getElementById("mySidebar").style.display = "none";
}