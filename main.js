var togByClass = document.getElementById('togClass');
var addClassToDiv = document.getElementsByClassName("mobile-menu")[0];

togByClass.addEventListener("click", function () {
    toggleMenu();
});

function toggleMenu() {
    console.log('toggled menu');
    addClassToDiv.classList.toggle("mobile-dropdown");
  }